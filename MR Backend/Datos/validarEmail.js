document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        if (!emailValue) {
            emailError.textContent = '';
            return true;
        }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
            emailError.textContent = 'Correo inválido (debe contener @).';
            return false;
        } else {
            emailError.textContent = '';
            return true;
        }
    }

    emailInput.addEventListener('input', validateEmail);
});
