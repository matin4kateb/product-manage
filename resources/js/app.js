import './bootstrap';

// 1. Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// 2. Mobile navigation toggle (for a mobile menu in header/sidebar)
const menuToggle = document.querySelector('#menu-toggle'); // Assuming you have a menu toggle button
const nav = document.querySelector('nav');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('open');  // Toggle an 'open' class to show/hide the menu
    });
}

// 3. Simple form validation (ensuring required fields are filled out)
const form = document.querySelector('form');
if (form) {
    form.addEventListener('submit', function (e) {
        let isValid = true;
        form.querySelectorAll('input[required], textarea[required]').forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('error');
                alert(`${input.name} is required!`);
            } else {
                input.classList.remove('error');
            }
        });
        
        if (!isValid) {
            e.preventDefault();  // Prevent form submission if invalid
        }
    });
}

// 4. Modal Toggle (for showing hidden information like alerts)
const modal = document.querySelector('#modal');
const openModalBtn = document.querySelector('#open-modal');
const closeModalBtn = document.querySelector('#close-modal');

if (openModalBtn && modal) {
    openModalBtn.addEventListener('click', () => {
        modal.classList.add('open');  // Show the modal
    });
}

if (closeModalBtn) {
    closeModalBtn.addEventListener('click', () => {
        modal.classList.remove('open');  // Close the modal
    });
}

// 5. Back to top button (appears after scrolling)
const backToTopBtn = document.querySelector('#back-to-top');
if (backToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('visible'); // Show button after scrolling 300px
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}
