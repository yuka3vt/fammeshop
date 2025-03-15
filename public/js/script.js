function togglePassword(inputId, iconId) {
    let passwordInput = document.getElementById(inputId);
    let eyeIcon = document.getElementById(iconId);

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye"); 
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const notification = document.getElementById("notification");
    const closeButton = document.querySelector(".btn-close");

    closeButton.addEventListener("click", function () {
        notification.style.display = "none";
    });

    setTimeout(function () {
        notification.style.display = "none";
    }, 7000);
});