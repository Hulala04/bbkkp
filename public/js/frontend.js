// Frontend JavaScript for BBSPJIKKP Website

document.addEventListener('DOMContentLoaded', function() {

    // Initialize all components
    initScrollToTop();
    initSmoothScrolling();
    initAnimationsOnScroll();
    initMegaMenu();
    initCarousel();
    initLazyLoading();

    // Scroll to Top Button
    function initScrollToTop() {
        const scrollToTopBtn = document.createElement('button');
        scrollToTopBtn.className = 'scroll-to-top';
        scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
        document.body.appendChild(scrollToTopBtn);

        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        // Scroll to top functionality
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Smooth Scrolling for Anchor Links
    function initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Animations on Scroll
    function initAnimationsOnScroll() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');

                    // Add staggered animation for cards
                    if (entry.target.classList.contains('service-card') ||
                        entry.target.classList.contains('info-card')) {
                        const cards = entry.target.parentElement.querySelectorAll('.service-card, .info-card');
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-fade-in');
                            }, index * 100);
                        });
                    }
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .info-card, .news-card, .partner-logo').forEach(element => {
            observer.observe(element);
        });
    }

    // Mega Menu Functionality untuk Semua Dropdown
    function initMegaMenu() {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        let activeMenu = null;
        let hoverTimeout = null;

        dropdownToggles.forEach(toggle => {
            // Mouse enter event
            toggle.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
                const dropdown = this.nextElementSibling;

                if (dropdown) {
                    // Close other active menus
                    if (activeMenu && activeMenu !== dropdown) {
                        closeMenu(activeMenu);
                    }

                    // Show current menu
                    showMenu(dropdown);
                    activeMenu = dropdown;
                }
            });

            // Mouse leave event
            toggle.addEventListener('mouseleave', function() {
                const dropdown = this.nextElementSibling;
                if (dropdown) {
                    hoverTimeout = setTimeout(() => {
                        if (!dropdown.matches(':hover') && !this.matches(':hover')) {
                            closeMenu(dropdown);
                            if (activeMenu === dropdown) {
                                activeMenu = null;
                            }
                        }
                    }, 150);
                }
            });
        });

        // Keep dropdown menus open when hovering over them
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
                showMenu(this);
                activeMenu = this;
            });

            menu.addEventListener('mouseleave', function() {
                hoverTimeout = setTimeout(() => {
                    closeMenu(this);
                    if (activeMenu === this) {
                        activeMenu = null;
                    }
                }, 150);
            });
        });

        // Click outside to close
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                if (activeMenu) {
                    closeMenu(activeMenu);
                    activeMenu = null;
                }
            }
        });

        // Function to show menu
        function showMenu(menu) {
            menu.style.display = 'block';
            menu.classList.add('show');
        }

        // Function to close menu
        function closeMenu(menu) {
            menu.classList.remove('show');
            setTimeout(() => {
                if (!menu.classList.contains('show')) {
                    menu.style.display = 'none';
                }
            }, 300);
        }
    }

    // Carousel Functionality
    function initCarousel() {
        const carousels = document.querySelectorAll('.carousel');

        carousels.forEach(carousel => {
            let currentSlide = 0;
            const slides = carousel.querySelectorAll('.carousel-item');
            const totalSlides = slides.length;

            if (totalSlides <= 1) return;

            // Auto-play carousel
            setInterval(() => {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % totalSlides;
                slides[currentSlide].classList.add('active');
            }, 5000);

            // Pause on hover
            carousel.addEventListener('mouseenter', function() {
                this.setAttribute('data-paused', 'true');
            });

            carousel.addEventListener('mouseleave', function() {
                this.removeAttribute('data-paused');
            });
        });
    }

    // Lazy Loading for Images
    function initLazyLoading() {
        const images = document.querySelectorAll('img[data-src]');

        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    // Form Validation
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');

        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    }

    // Search Functionality
    function initSearch() {
        const searchInput = document.querySelector('#searchInput');
        const searchResults = document.querySelector('#searchResults');

        if (searchInput && searchResults) {
            let searchTimeout;

            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                const query = this.value.trim();

                if (query.length < 3) {
                    searchResults.style.display = 'none';
                    return;
                }

                searchTimeout = setTimeout(() => {
                    performSearch(query);
                }, 300);
            });
        }
    }

    // Perform Search
    function performSearch(query) {
        // This would typically make an AJAX request to your backend
        // For now, we'll just show a placeholder
        const searchResults = document.querySelector('#searchResults');
        searchResults.innerHTML = `
            <div class="search-result-item">
                <h6>Mencari: "${query}"</h6>
                <p>Hasil pencarian akan ditampilkan di sini...</p>
            </div>
        `;
        searchResults.style.display = 'block';
    }

    // Mobile Menu Toggle
    function initMobileMenu() {
        const mobileMenuToggle = document.querySelector('.navbar-toggler');
        const mobileMenu = document.querySelector('#navbarNav');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('show');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenuToggle.contains(event.target) &&
                    !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.remove('show');
                }
            });
        }
    }

    // Counter Animation
    function initCounterAnimation() {
        const counters = document.querySelectorAll('.counter');

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.dataset.target);
                    const duration = 2000; // 2 seconds
                    const increment = target / (duration / 16); // 60fps
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                    counterObserver.unobserve(counter);
                }
            });
        });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // Parallax Effect
    function initParallax() {
        const parallaxElements = document.querySelectorAll('.parallax');

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;

            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    // Initialize additional features
    initFormValidation();
    initSearch();
    initMobileMenu();
    initCounterAnimation();
    initParallax();

    // Utility Functions
    window.BBSPJIKKP = {
        // Show loading spinner
        showLoading: function(element) {
            if (element) {
                element.innerHTML = '<div class="loading"></div>';
            }
        },

        // Hide loading spinner
        hideLoading: function(element, content) {
            if (element) {
                element.innerHTML = content || '';
            }
        },

        // Show notification
        showNotification: function(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
            notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;

            document.body.appendChild(notification);

            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 5000);
        },

        // Format number with thousand separator
        formatNumber: function(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        },

        // Debounce function
        debounce: function(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        },

        // Throttle function
        throttle: function(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        }
    };

    // Handle AJAX requests with CSRF token
    const token = document.querySelector('meta[name="csrf-token"]');
    if (token) {
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.getAttribute('content');
    }

    // Global error handler
    window.addEventListener('error', function(e) {
        console.error('Global error:', e.error);
    });

    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                console.log('Page load time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
            }, 0);
        });
    }
});

// Service Worker Registration (for PWA features)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('ServiceWorker registration successful');
            })
            .catch(function(err) {
                console.log('ServiceWorker registration failed');
            });
    });
}
