import './bootstrap';
import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

window
    .Echo
    .channel("notifications")
    .listen(".new-notification", (data) => {
        showNotification(data.message);
    });

function showNotification(message) {
    let notification = document.createElement("div");
    notification.className = "alert alert-vertical sm:alert-horizontal bg-white shadow-lg p-4 rounded-lg flex items-center space-x-4 border border-gray-200";
    notification.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div>
            <h3 class="font-bold">New message!</h3>
            <div class="text-xs">${message}</div>
        </div>
        <button class="btn btn-sm btn-close bg-red-500 text-white px-2 py-1 rounded-md">x</button>
    `;

    let container = document.getElementById("notification-container");
    container.appendChild(notification);

    notification.querySelector(".btn-close").addEventListener("click", () => {
        notification.remove();
    });

    setTimeout(() => {
        notification.remove();
    }, 5000);
}
