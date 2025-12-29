(function() {
    'use strict';

    window.__app = window.__app || {};

    function debounce(func, wait) {
        var timeout;
        return function executedFunction() {
            var context = this;
            var args = arguments;
            var later = function() {
                timeout = null;
                func.apply(context, args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function throttle(func, limit) {
        var inThrottle;
        return function() {
            var args = arguments;
            var context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(function() {
                    inThrottle = false;
                }, limit);
            }
        };
    }

    function initBurgerMenu() {
        if (__app.burgerInitialized) return;
        __app.burgerInitialized = true;

        var nav = document.querySelector('.navbar-collapse');
        var toggle = document.querySelector('.navbar-toggler');
        var body = document.body;

        if (!nav || !toggle) return;

        var isOpen = false;

        function openMenu() {
            isOpen = true;
            nav.classList.add('show');
            toggle.classList.add('active');
            toggle.setAttribute('aria-expanded', 'true');
            body.style.overflow = 'hidden';
        }

        function closeMenu() {
            isOpen = false;
            nav.classList.remove('show');
            toggle.classList.remove('active');
            toggle.setAttribute('aria-expanded', 'false');
            body.style.overflow = '';
        }

        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isOpen) {
                closeMenu();
            }
        });

        document.addEventListener('click', function(e) {
            if (isOpen && !nav.contains(e.target) && !toggle.contains(e.target)) {
                closeMenu();
            }
        });

        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].addEventListener('click', function() {
                if (isOpen) {
                    closeMenu();
                }
            });
        }

        var handleResize = debounce(function() {
            if (window.innerWidth >= 992 && isOpen) {
                closeMenu();
            }
        }, 100);

        window.addEventListener('resize', handleResize, { passive: true });
    }

    function initSmoothScroll() {
        if (__app.smoothScrollInitialized) return;
        __app.smoothScrollInitialized = true;

        var isHomepage = window.location.pathname === '/' || window.location.pathname.endsWith('/index.html');

        if (!isHomepage) {
            var sectionLinks = document.querySelectorAll('a[href^="#"]');
            for (var i = 0; i < sectionLinks.length; i++) {
                var link = sectionLinks[i];
                var href = link.getAttribute('href');
                if (href !== '#' && href !== '#!') {
                    link.setAttribute('href', '/' + href);
                }
            }
        }

        document.addEventListener('click', function(e) {
            var target = e.target;
            while (target && target.tagName !== 'A') {
                target = target.parentElement;
            }
            if (!target) return;

            var href = target.getAttribute('href');
            if (!href || !href.startsWith('#') || href === '#' || href === '#!') return;

            if (!isHomepage) return;

            e.preventDefault();

            var targetElement = document.querySelector(href);
            if (!targetElement) return;

            var header = document.querySelector('.l-header');
            var headerHeight = header ? header.offsetHeight : 70;
            var targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    }

    function initScrollSpy() {
        if (__app.scrollSpyInitialized) return;
        __app.scrollSpyInitialized = true;

        var sections = document.querySelectorAll('section[id]');
        if (sections.length === 0) return;

        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        var header = document.querySelector('.l-header');
        var headerHeight = header ? header.offsetHeight : 70;

        function updateActiveLink() {
            var scrollPos = window.pageYOffset + headerHeight + 100;

            sections.forEach(function(section) {
                var sectionTop = section.offsetTop;
                var sectionHeight = section.offsetHeight;
                var sectionId = section.getAttribute('id');

                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    navLinks.forEach(function(link) {
                        link.classList.remove('active');
                        link.removeAttribute('aria-current');

                        var href = link.getAttribute('href');
                        if (href === '#' + sectionId) {
                            link.classList.add('active');
                            link.setAttribute('aria-current', 'page');
                        }
                    });
                }
            });
        }

        window.addEventListener('scroll', throttle(updateActiveLink, 100), { passive: true });
        updateActiveLink();
    }

    function initIntersectionObserver() {
        if (__app.intersectionObserverInitialized) return;
        __app.intersectionObserverInitialized = true;

        if (!('IntersectionObserver' in window)) return;

        var animatedElements = document.querySelectorAll('.card, .c-card, section > *, .hero-section, article');

        var observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1
        };

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(30px)';
                    entry.target.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';

                    setTimeout(function() {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 50);

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(function(element) {
            observer.observe(element);
        });
    }

    function initCountUp() {
        if (__app.countUpInitialized) return;
        __app.countUpInitialized = true;

        var countElements = document.querySelectorAll('[data-count]');
        if (countElements.length === 0) return;

        if (!('IntersectionObserver' in window)) return;

        function animateCount(element) {
            var target = parseInt(element.getAttribute('data-count'));
            var duration = 2000;
            var start = 0;
            var startTime = null;

            function updateCount(currentTime) {
                if (!startTime) startTime = currentTime;
                var progress = Math.min((currentTime - startTime) / duration, 1);
                var current = Math.floor(progress * target);
                element.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    element.textContent = target;
                }
            }

            requestAnimationFrame(updateCount);
        }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        countElements.forEach(function(element) {
            observer.observe(element);
        });
    }

    function initRippleEffect() {
        if (__app.rippleInitialized) return;
        __app.rippleInitialized = true;

        var buttons = document.querySelectorAll('.c-button, .btn, .nav-link, .page-link');

        buttons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                var ripple = document.createElement('span');
                var rect = this.getBoundingClientRect();
                var size = Math.max(rect.width, rect.height);
                var x = e.clientX - rect.left - size / 2;
                var y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.6)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s ease-out';
                ripple.style.pointerEvents = 'none';

                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);

                setTimeout(function() {
                    ripple.remove();
                }, 600);
            });
        });

        var style = document.createElement('style');
        style.textContent = '@keyframes ripple { to { transform: scale(4); opacity: 0; } }';
        document.head.appendChild(style);
    }

    function initHoverAnimations() {
        if (__app.hoverAnimationsInitialized) return;
        __app.hoverAnimationsInitialized = true;

        var cards = document.querySelectorAll('.card, .c-card');

        cards.forEach(function(card) {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'transform 0.3s ease-out, box-shadow 0.3s ease-out';
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    }

    function initImageAnimations() {
        if (__app.imageAnimationsInitialized) return;
        __app.imageAnimationsInitialized = true;

        var images = document.querySelectorAll('img:not(.c-logo__img)');

        images.forEach(function(img) {
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy');
            }

            img.style.opacity = '0';
            img.style.transform = 'scale(0.95)';
            img.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';

            img.addEventListener('load', function() {
                this.style.opacity = '1';
                this.style.transform = 'scale(1)';
            });

            if (img.complete) {
                img.style.opacity = '1';
                img.style.transform = 'scale(1)';
            }

            img.addEventListener('error', function() {
                var svgPlaceholder = 'data:image/svg+xml;base64,' + btoa(
                    '<svg xmlns="http://www.w3.org/2000/svg" width="300" height="200" viewBox="0 0 300 200">' +
                    '<rect width="100%" height="100%" fill="#f8f9fa"/>' +
                    '<text x="50%" y="50%" text-anchor="middle" dy="0.3em" font-family="sans-serif" font-size="14" fill="#6c757d">Bild nicht verfügbar</text>' +
                    '</svg>'
                );
                this.src = svgPlaceholder;
                this.style.opacity = '1';
            });
        });
    }

    function initScrollToTop() {
        if (__app.scrollToTopInitialized) return;
        __app.scrollToTopInitialized = true;

        var button = document.createElement('button');
        button.innerHTML = '↑';
        button.className = 'scroll-to-top';
        button.setAttribute('aria-label', 'Nach oben scrollen');
        button.style.cssText = 'position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; border-radius: 50%; background: var(--color-accent); color: white; border: none; font-size: 24px; cursor: pointer; opacity: 0; visibility: hidden; transition: opacity 0.3s ease-out, visibility 0.3s ease-out, transform 0.3s ease-out; z-index: 1000; box-shadow: var(--shadow-lg);';

        document.body.appendChild(button);

        function toggleButton() {
            if (window.pageYOffset > 300) {
                button.style.opacity = '1';
                button.style.visibility = 'visible';
            } else {
                button.style.opacity = '0';
                button.style.visibility = 'hidden';
            }
        }

        button.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) translateY(-3px)';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) translateY(0)';
        });

        window.addEventListener('scroll', throttle(toggleButton, 100), { passive: true });
        toggleButton();
    }

    function initFormValidation() {
        if (__app.formValidationInitialized) return;
        __app.formValidationInitialized = true;

        var forms = document.querySelectorAll('form.needs-validation');

        var validators = {
            name: {
                pattern: /^[a-zA-ZÀ-ÿs-']{2,50}$/,
                message: 'Bitte geben Sie einen gültigen Namen ein (2-50 Zeichen, nur Buchstaben).'
            },
            email: {
                pattern: /^[^s@]+@[^s@]+.[^s@]+$/,
                message: 'Bitte geben Sie eine gültige E-Mail-Adresse ein.'
            },
            phone: {
                pattern: /^[ds+-()]{10,20}$/,
                message: 'Bitte geben Sie eine gültige Telefonnummer ein.'
            },
            message: {
                minLength: 10,
                message: 'Bitte geben Sie eine Nachricht mit mindestens 10 Zeichen ein.'
            }
        };

        function escapeHtml(text) {
            var map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        function validateField(field) {
            var fieldName = field.getAttribute('name') || field.getAttribute('id');
            var value = field.value.trim();
            var isValid = true;
            var errorMessage = '';

            field.setCustomValidity('');

            if (field.hasAttribute('required') && !value) {
                isValid = false;
                errorMessage = 'Dieses Feld ist erforderlich.';
            } else if (value) {
                if (fieldName && fieldName.toLowerCase().includes('name') && validators.name) {
                    if (!validators.name.pattern.test(value)) {
                        isValid = false;
                        errorMessage = validators.name.message;
                    }
                } else if (field.type === 'email' || (fieldName && fieldName.toLowerCase().includes('email'))) {
                    if (!validators.email.pattern.test(value)) {
                        isValid = false;
                        errorMessage = validators.email.message;
                    }
                } else if (fieldName && fieldName.toLowerCase().includes('phone')) {
                    if (!validators.phone.pattern.test(value)) {
                        isValid = false;
                        errorMessage = validators.phone.message;
                    }
                } else if (fieldName && fieldName.toLowerCase().includes('message')) {
                    if (value.length < validators.message.minLength) {
                        isValid = false;
                        errorMessage = validators.message.message;
                    }
                }
            }

            if (field.type === 'checkbox' && field.hasAttribute('required') && !field.checked) {
                isValid = false;
                errorMessage = 'Sie müssen dieses Feld akzeptieren.';
            }

            var feedbackElement = field.parentElement.querySelector('.invalid-feedback');
            if (!feedbackElement) {
                feedbackElement = document.createElement('div');
                feedbackElement.className = 'invalid-feedback';
                field.parentElement.appendChild(feedbackElement);
            }

            if (!isValid) {
                field.classList.add('is-invalid');
                field.classList.remove('is-valid');
                feedbackElement.textContent = errorMessage;
                field.setCustomValidity(errorMessage);
            } else {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
                feedbackElement.textContent = '';
            }

            return isValid;
        }

        forms.forEach(function(form) {
            var fields = form.querySelectorAll('input, textarea, select');

            fields.forEach(function(field) {
                field.addEventListener('blur', function() {
                    validateField(this);
                });

                field.addEventListener('input', function() {
                    if (this.classList.contains('is-invalid')) {
                        validateField(this);
                    }
                });
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var isFormValid = true;

                fields.forEach(function(field) {
                    if (!validateField(field)) {
                        isFormValid = false;
                    }
                });

                if (!isFormValid) {
                    var firstInvalid = form.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.focus();
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return;
                }

                var submitBtn = form.querySelector('button[type="submit"]');
                var originalText = submitBtn ? submitBtn.innerHTML : '';

                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Wird gesendet...';
                }

                var formData = new FormData(form);
                var data = {};
                for (var pair of formData.entries()) {
                    data[pair[0]] = escapeHtml(pair[1]);
                }

                setTimeout(function() {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }

                    window.location.href = 'thank_you.html';
                }, 1000);
            });
        });
    }

    function initModalAnimations() {
        if (__app.modalAnimationsInitialized) return;
        __app.modalAnimationsInitialized = true;

        var privacyLinks = document.querySelectorAll('a[href*="privacy"], a[href*="datenschutz"]');

        privacyLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#' || this.getAttribute('href') === '#privacy') {
                    e.preventDefault();

                    var overlay = document.createElement('div');
                    overlay.style.cssText = 'position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); z-index: 9999; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease-out;';

                    var modal = document.createElement('div');
                    modal.style.cssText = 'background: white; padding: 2rem; border-radius: 0.5rem; max-width: 600px; max-height: 80vh; overflow-y: auto; transform: scale(0.9); transition: transform 0.3s ease-out; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);';
                    modal.innerHTML = '<h2>Datenschutz</h2><p>Ihre Datenschutzinformationen werden hier angezeigt.</p><button class="c-button c-button--primary mt-3">Schließen</button>';

                    overlay.appendChild(modal);
                    document.body.appendChild(overlay);

                    setTimeout(function() {
                        overlay.style.opacity = '1';
                        modal.style.transform = 'scale(1)';
                    }, 10);

                    function closeModal() {
                        overlay.style.opacity = '0';
                        modal.style.transform = 'scale(0.9)';
                        setTimeout(function() {
                            document.body.removeChild(overlay);
                        }, 300);
                    }

                    overlay.addEventListener('click', function(e) {
                        if (e.target === overlay) {
                            closeModal();
                        }
                    });

                    modal.querySelector('button').addEventListener('click', closeModal);
                }
            });
        });
    }

    __app.init = function() {
        if (__app.initialized) return;
        __app.initialized = true;

        initBurgerMenu();
        initSmoothScroll();
        initScrollSpy();
        initIntersectionObserver();
        initCountUp();
        initRippleEffect();
        initHoverAnimations();
        initImageAnimations();
        initScrollToTop();
        initFormValidation();
        initModalAnimations();
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', __app.init);
    } else {
        __app.init();
    }

})();
