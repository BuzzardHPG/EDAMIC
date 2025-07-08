document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            contactForm.classList.add('was-validated');
        }, false);
    }
    
    function validateForm() {
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');
        
        let isValid = true;
        
        // Validate name
        if (name.value.trim() === '') {
            isValid = false;
        }
        
        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            isValid = false;
        }
        
        // Validate subject
        if (subject.value === '' || subject.value === null) {
            isValid = false;
        }
        
        // Validate message
        if (message.value.trim() === '') {
            isValid = false;
        }
        
        return isValid;
    }
});