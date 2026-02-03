/**
 * =========================================
 * MAIN SITE JAVASCRIPT
 * Clean • Bootstrap-safe • Production-ready
 * =========================================
 */

(function () {
    'use strict';

    /* ==============================
       DOM READY
       ============================== */
    document.addEventListener('DOMContentLoaded', () => {
        initNavbar();
        initSmoothScroll();
        initActiveLinks();
        initScrollEffects();
        initCTAForm();
    });

    /* ==============================
       NAVBAR (MOBILE + SCROLL)
       ============================== */
    function initNavbar() {
        const navbar = document.querySelector('.navbar');
        const toggler = document.querySelector('.navbar-toggler');
        const menu = document.querySelector('.navbar-collapse');

        if (!navbar) return;

        // Close mobile menu on link click
        if (menu) {
            menu.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (menu.classList.contains('show')) {
                        toggler.click();
                    }
                });
            });
        }

        // Navbar shadow on scroll
        window.addEventListener(
            'scroll',
            () => {
                if (window.scrollY > 10) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            },
            { passive: true }
        );
    }

    /* ==============================
       SMOOTH SCROLL (ANCHORS)
       ============================== */
    function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');

            // 🚫 INVALID TARGETS
            if (!targetId || targetId === '#' || targetId === '#!') {
                return;
            }

            const target = document.querySelector(targetId);

            // 🚫 TARGET DOES NOT EXIST
            if (!target) return;

            e.preventDefault();

            const offset = 80; // navbar height
            const targetPosition =
                target.getBoundingClientRect().top +
                window.pageYOffset -
                offset;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });
}


    /* ==============================
       ACTIVE NAV LINKS
       ============================== */
    function initActiveLinks() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        if (!sections.length || !navLinks.length) return;

        window.addEventListener(
            'scroll',
            () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 120;
                    if (window.scrollY >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            },
            { passive: true }
        );
    }

    /* ==============================
       SCROLL UI EFFECTS
       (NO IMAGES)
       ============================== */
    function initScrollEffects() {
        const elements = document.querySelectorAll('[data-fade]');

        if (!elements.length) return;

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15 }
        );

        elements.forEach(el => observer.observe(el));
    }

    /* ==============================
       CTA FORM UX
       ============================== */
    function initCTAForm() {
        const form = document.querySelector('.cta-form');
        const input = document.querySelector('.cta-input');
        const button = document.querySelector('.btn-cta-submit');

        if (!form || !input || !button) return;

        // Focus effect
        input.addEventListener('focus', () => {
            form.classList.add('is-focused');
        });

        input.addEventListener('blur', () => {
            form.classList.remove('is-focused');
        });

        // Basic validation (frontend only)
        form.addEventListener('submit', e => {
            e.preventDefault();

            const value = input.value.trim();

            if (!value) {
                input.classList.add('is-invalid');
                input.focus();
                return;
            }

            input.classList.remove('is-invalid');

            // Loading state
            button.disabled = true;
            button.classList.add('loading');

            setTimeout(() => {
                button.disabled = false;
                button.classList.remove('loading');
                form.reset();
            }, 1200);
        });
    }
})();
