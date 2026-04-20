'use strict';

/* --------------------------------------------------------------------------
   Navigation – mobile toggle
   -------------------------------------------------------------------------- */
(function initNav() {
    const toggle = document.getElementById('navToggle');
    const nav    = document.getElementById('primary-nav');
    if (!toggle || !nav) return;

    // Overlay element
    const overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    overlay.setAttribute('aria-hidden', 'true');
    document.body.appendChild(overlay);

    function openNav() {
        nav.classList.add('nav--open');
        toggle.setAttribute('aria-expanded', 'true');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeNav() {
        nav.classList.remove('nav--open');
        toggle.setAttribute('aria-expanded', 'false');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    toggle.addEventListener('click', () => {
        const isOpen = toggle.getAttribute('aria-expanded') === 'true';
        isOpen ? closeNav() : openNav();
    });

    overlay.addEventListener('click', closeNav);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeNav();
    });

    // Close on desktop resize
    const mq = window.matchMedia('(min-width: 900px)');
    mq.addEventListener('change', (e) => { if (e.matches) closeNav(); });
})();

/* --------------------------------------------------------------------------
   Back to top button
   -------------------------------------------------------------------------- */
(function initBackToTop() {
    const btn = document.getElementById('backToTop');
    if (!btn) return;

    function onScroll() {
        btn.classList.toggle('visible', window.scrollY > 400);
    }
    window.addEventListener('scroll', onScroll, { passive: true });

    btn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

/* --------------------------------------------------------------------------
   Sticky header shadow on scroll
   -------------------------------------------------------------------------- */
(function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
})();

/* --------------------------------------------------------------------------
   Intersection Observer – fade-in animations
   -------------------------------------------------------------------------- */
(function initFadeIn() {
    const elements = document.querySelectorAll('.fade-in');
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    elements.forEach((el) => observer.observe(el));
})();

/* --------------------------------------------------------------------------
   Contact form – AJAX submission
   -------------------------------------------------------------------------- */
(function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn   = form.querySelector('.form-submit');
    const btnText     = submitBtn ? submitBtn.querySelector('.btn-text') : null;
    const alertSuccess = document.getElementById('formSuccess');
    const alertError   = document.getElementById('formError');

    function setFieldError(input, msg) {
        input.classList.add('is-error');
        const errEl = document.getElementById(input.id + 'Error');
        if (errEl) { errEl.textContent = msg; errEl.classList.add('visible'); }
    }

    function clearFieldError(input) {
        input.classList.remove('is-error');
        const errEl = document.getElementById(input.id + 'Error');
        if (errEl) { errEl.classList.remove('visible'); }
    }

    function validateForm() {
        let valid = true;
        const fields = form.querySelectorAll('[data-required]');

        fields.forEach((field) => {
            clearFieldError(field);
            if (!field.value.trim()) {
                setFieldError(field, 'Ce champ est obligatoire.');
                valid = false;
            }
        });

        const emailField = form.querySelector('[type="email"]');
        if (emailField && emailField.value.trim()) {
            const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRe.test(emailField.value.trim())) {
                setFieldError(emailField, 'Veuillez entrer une adresse email valide.');
                valid = false;
            }
        }

        return valid;
    }

    // Live validation – clear error on input
    form.querySelectorAll('input, textarea').forEach((field) => {
        field.addEventListener('input', () => clearFieldError(field));
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (alertSuccess) alertSuccess.classList.remove('visible');
        if (alertError)   alertError.classList.remove('visible');

        if (!validateForm()) return;

        if (submitBtn) submitBtn.classList.add('loading');

        try {
            const data = new FormData(form);
            // Determine correct path based on current page location
            const isInPages = window.location.pathname.includes('/pages/');
            const sendMailPath = isInPages ? '../send-mail.php' : 'send-mail.php';

            const response = await fetch(sendMailPath, {
                method: 'POST',
                body: data,
            });

            const result = await response.json();

            if (result.success) {
                if (alertSuccess) alertSuccess.classList.add('visible');
                form.reset();
                // Scroll to success message
                alertSuccess?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                if (alertError) {
                    alertError.querySelector('.alert-msg').textContent =
                        result.message || 'Une erreur est survenue. Veuillez réessayer.';
                    alertError.classList.add('visible');
                }
            }
        } catch (err) {
            if (alertError) {
                alertError.querySelector('.alert-msg').textContent =
                    'Impossible d\'envoyer le message. Veuillez nous contacter par téléphone.';
                alertError.classList.add('visible');
            }
        } finally {
            if (submitBtn) submitBtn.classList.remove('loading');
        }
    });
})();
