document.addEventListener('DOMContentLoaded', function() {
    const telefonoInput = document.getElementById('telefono');
    const telefonoError = document.getElementById('telefonoError');

    function validateTelefono() {
        const telefonoValue = telefonoInput.value.trim();
        if (!telefonoValue) {
            telefonoError.textContent = '';
            return true;
        }
        if (!/^[0-9]+$/.test(telefonoValue)) {
            telefonoError.textContent = 'Teléfono solo debe contener números.';
            return false;
        } else {
            telefonoError.textContent = '';
            return true;
        }
    }

    telefonoInput.addEventListener('input', validateTelefono);
});
