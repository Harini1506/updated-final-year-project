function togglePasswordVisibility() {
    const passwordInput = document.getElementById("admin_password");
    const eyeIcon = document.querySelector(".eye-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.style.backgroundImage = "url('data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath d='M10,0 C4.5,0 0,4.5 0,10 C0,15.5 4.5,20 10,20 C15.5,20 20,15.5 20,10 C20,4.5 15.5,0 10,0 Z M10,13 C13.31,13 16,10.31 16,7 C16,3.69 13.31,1 10,1 C6.69,1 4,3.69 4,7 C4,10.31 6.69,13 10,13 Z M10,9 C7.24,9 5,10.24 5,12 C5,13.76 7.24,15 10,15 C12.76,15 15,13.76 15,12 C15,10.24 12.76,9 10,9 Z'/%3E%3C/svg%3E')";
    } else {
        passwordInput.type = "password";
        eyeIcon.style.backgroundImage = "url('data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath d='M10,0 C4.5,0 0,4.5 0,10 C0,15.5 4.5,20 10,20 C15.5,20 20,15.5 20,10 C20,4.5 15.5,0 10,0 Z M10,13 C13.31,13 16,10.31 16,7 C16,3.69 13.31,1 10,1 C6.69,1 4,3.69 4,7 C4,10.31 6.69,13 10,13 Z M10,9 C7.24,9 5,10.24 5,12 C5,13.76 7.24,15 1   15,15 C12.76,15 10.5,13.76 10,13 Z'/%3E%3C/svg%3E')";
    }
 }