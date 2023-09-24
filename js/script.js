document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');
    const errorMessage = document.getElementById('error-message');
    const logoutButton = document.getElementById('logout-button');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        // Simulasi pengecekan username dan password
        const username = loginForm.username.value;
        const password = loginForm.password.value;

        if (username === 'user' && password === 'password') {
            // Redirect ke halaman utama setelah login berhasil
            window.location.href = 'index.html';
        } else {
            errorMessage.textContent = 'Username atau password salah. Silakan coba lagi.';
        }
    });

    logoutButton.addEventListener('click', function() {
        // Proses log out di sini (misalnya, menghapus sesi)
        isLoggedIn = false;
        alert('Anda berhasil log out!');
        // Sembunyikan tombol "Log Out"
        logoutButton.style.display = 'none';
    });

    // Sembunyikan tombol "Log Out" saat halaman pertama kali dimuat
    logoutButton.style.display = 'none';

});



