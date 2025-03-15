document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("register-form");
    const usernameInput = form.querySelector("input[name='username']");
    const contactInput = form.querySelector("input[name='contact']");
    const emailInput = form.querySelector("input[name='email']");
    const passwordInput = form.querySelector("input[name='password']");
    const confirmPasswordInput = form.querySelector("input[name='password_confirmation']");
    const submitButton = form.querySelector("button[type='submit']");

    function validateUsername() {
        const errorElement = document.getElementById("error-username");
        errorElement.innerText = "";
        const username = usernameInput.value;
        const usernameRegex = /^[a-zA-Z0-9._]+$/;
    
        if (username.length < 5) {
            errorElement.innerText = "Username harus minimal 5 karakter.";
            return false;
        }
        if (username.length > 50) {
            errorElement.innerText = "Username tidak boleh lebih dari 50 karakter.";
            return false;
        }
        if (!usernameRegex.test(username)) {
            errorElement.innerText = "Username hanya boleh berisi huruf, angka, '.', dan '_'.";
            return false;
        }
    
        return true;
    }

    function validateContact() {
        const errorElement = document.getElementById("error-contact");
        errorElement.innerText = "";
        const contactRegex = /^[0-9]{11,14}$/;
        if (!contactRegex.test(contactInput.value)) {
            errorElement.innerText = "Nomor harus 11-14 digit dan hanya berisi angka.";
            return false;
        }
        return true;
    }

    function validateEmail() {
        const errorElement = document.getElementById("error-email");
        errorElement.innerText = "";
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(emailInput.value)) {
            errorElement.innerText = "Format email tidak valid.";
            return false;
        }
        return true;
    }

    function validatePassword() {
        const errorElement = document.getElementById("error-password");
        errorElement.innerText = "";
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        if (!passwordRegex.test(passwordInput.value)) {
            errorElement.innerText = "Password minimal 8 karakter, harus ada huruf besar, kecil, dan angka.";
            return false;
        }
        return true;
    }

    function validateConfirmPassword() {
        const errorElement = document.getElementById("error-password_confirmation");
        errorElement.innerText = "";
        if (passwordInput.value !== confirmPasswordInput.value) {
            errorElement.innerText = "Password tidak cocok.";
            return false;
        }
        return true;
    }

    function checkFormValidity() {
        const isValid = validateUsername() && validateContact() && validateEmail() && validatePassword() && validateConfirmPassword();
        submitButton.disabled = !isValid;
    }

    usernameInput.addEventListener("input", () => { validateUsername(); checkFormValidity(); });
    contactInput.addEventListener("input", () => { validateContact(); checkFormValidity(); });
    emailInput.addEventListener("input", () => { validateEmail(); checkFormValidity(); });
    passwordInput.addEventListener("input", () => { validatePassword(); validateConfirmPassword(); checkFormValidity(); });
    confirmPasswordInput.addEventListener("input", () => { validateConfirmPassword(); checkFormValidity(); });

    form.addEventListener("submit", function (event) {
        event.preventDefault();
    
        let formData = new FormData(this);
    
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
        fetch(this.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": csrfToken,
                "Accept": "application/json"
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(data => {
            document.querySelectorAll(".error-message").forEach(el => el.innerText = "");
    
            if (data.errors) {
                for (let key in data.errors) {
                    document.getElementById("error-" + key).innerText = data.errors[key][0];
                }
            } else {
                alert("Registration successful!");
                window.location.href = "/auth/login";
            }
        })
        .catch(error => {
            console.error("Error:", error);
            if (error.errors) {
                for (let key in error.errors) {
                    document.getElementById("error-" + key).innerText = error.errors[key][0];
                }
            }
        });
    });
});