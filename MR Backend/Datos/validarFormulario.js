document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        if (!this.checkValidity()) {
            this.classList.add('was-validated');
        } else {
            alert('Gracias por contactarnos. Nos pondremos en contacto contigo pronto.');
            this.reset();
            this.classList.remove('was-validated');
        }
    });
});
