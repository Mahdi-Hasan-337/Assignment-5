function passwordToggle(inputId) {
    const passwordInput = document.getElementById(inputId);
    const passwordToggleIcon = document.querySelector(`[onclick="passwordToggle('${inputId}')"]`);
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggleIcon.classList.remove('fa-eye-slash');
        passwordToggleIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        passwordToggleIcon.classList.remove('fa-eye');
        passwordToggleIcon.classList.add('fa-eye-slash');
    }
}