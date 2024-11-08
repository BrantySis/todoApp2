import './bootstrap';
import { Notyf } from 'notyf';
import 'notyf/notyf.min.css';
import 'preline';

//import Alpine from 'alpinejs';

//window.Alpine = Alpine;

//Alpine.start();

const notyf = new Notyf();  // Create an instance of Notyf

// Function to show the toast
function showToast(message, type = 'success') {
    notyf.open({
        type: type,      // 'success' or 'error'
        message: message // The toast message to display
    });
}

document.addEventListener('livewire:load', function () {
    // Listen for a custom Livewire event (show-toast)
    window.addEventListener('show-toast', event => {
        showToast(event.detail.message);  // Show the toast with the message from Livewire
    });
});

if (
    localStorage.getItem("hs_theme") === "dark" ||
    (!localStorage.getItem("hs_theme") &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}