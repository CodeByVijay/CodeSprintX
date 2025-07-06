/**
 * Consolidated JavaScript for CodeSprintX Internship Website
 * Contains all functionality for the site including:
 * - Navigation and Mobile Menu
 * - Testimonial Slider
 * - Logo Slider
 * - FAQ Accordion
 * - Smooth Scrolling
 * - Form Validation
 * - Scroll to Top
 */

$(document).ready(function() {
    // ===================================================
    // Navigation and Active Menu Item Highlighting
    // ===================================================
    function initNavigation() {
        // Set active menu item based on current page
        const currentPath = window.location.pathname;
        console.log("Current path:", currentPath);

        $('nav a, #mobile-menu a').each(function() {
            const linkPath = $(this).attr('href');
            console.log("Checking link:", linkPath);

            // Check if the current page matches the link's href
            if (currentPath === linkPath ||
                currentPath.endsWith(linkPath) ||
                (linkPath === './' && (currentPath === '/' || currentPath.endsWith('/index.php'))) ||
                (linkPath !== './' && currentPath.includes(linkPath.replace('./', '')))) {

                console.log("Active link found:", linkPath);
                $(this).addClass('text-primary font-semibold border-primary');
                if ($(this).closest('#mobile-menu').length) {
                    $(this).addClass('bg-gray-100');
                } else {
                    $(this).addClass('border-b-2');
                }
            }
        });
    }

    // Initialize navigation
    initNavigation();

    // Initialize mobile menu
    initMobileMenu();

    // ===================================================
    // Mobile Menu Functionality
    // ===================================================
    function initMobileMenu() {
        // Check if mobile menu exists
        if (!$('#mobile-menu').length || !$('#mobile-menu-button').length) {
            console.error('Mobile menu elements not found');
            return;
        }

        console.log('Mobile menu script initialized');
        console.log('Mobile menu element:', $('#mobile-menu'));
        console.log('Mobile menu button:', $('#mobile-menu-button'));

        // Mobile Menu Toggle
        $('#mobile-menu-button').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            console.log('Mobile menu button clicked');

            // Toggle active class on mobile menu
            $('#mobile-menu').toggleClass('active');

            // Toggle body class to prevent scrolling when menu is open
            $('body').toggleClass('mobile-menu-open');

            // Toggle icon between bars and times
            const icon = $(this).find('i');
            if (icon.hasClass('fa-bars')) {
                icon.removeClass('fa-bars').addClass('fa-times');
                $(this).attr('aria-expanded', 'true');
            } else {
                icon.removeClass('fa-times').addClass('fa-bars');
                $(this).attr('aria-expanded', 'false');
            }
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(event) {
            if ($('#mobile-menu').hasClass('active') &&
                !$(event.target).closest('#mobile-menu, #mobile-menu-button').length) {

                console.log('Closing mobile menu (clicked outside)');
                $('#mobile-menu').removeClass('active');
                $('body').removeClass('mobile-menu-open');
                $('#mobile-menu-button i').removeClass('fa-times').addClass('fa-bars');
                $('#mobile-menu-button').attr('aria-expanded', 'false');
            }
        });

        // Force refresh active state for mobile and desktop navigation
        updateActiveMenuItems();

        // Close mobile menu when clicking a menu item
        $('#mobile-menu a').on('click', function() {
            console.log('Mobile menu item clicked');
            $('#mobile-menu').removeClass('active');
            $('body').removeClass('mobile-menu-open');
            $('#mobile-menu-button i').removeClass('fa-times').addClass('fa-bars');
            $('#mobile-menu-button').attr('aria-expanded', 'false');
        });

        // Ensure button aria-expanded is initially set
        $('#mobile-menu-button').attr('aria-expanded', 'false');
    }

    // Helper function to update active menu items
    function updateActiveMenuItems() {
        const currentPath = window.location.pathname;
        console.log("Mobile menu checking path:", currentPath);

        $('.nav-link').each(function() {
            const linkPath = $(this).attr('href');
            // Enhanced active link detection
            if (linkPath === './' && (currentPath === '/' || currentPath.endsWith('/index.php') || currentPath.endsWith('/'))) {
                $(this).addClass('text-primary font-semibold');
                if ($(this).closest('#mobile-menu').length) {
                    $(this).addClass('bg-gray-100');
                } else {
                    $(this).addClass('border-primary');
                }
            }
            else if (linkPath !== './' &&
                     (currentPath.endsWith(linkPath) ||
                      currentPath.endsWith(linkPath.replace('./', '/')))) {
                $(this).addClass('text-primary font-semibold');
                if ($(this).closest('#mobile-menu').length) {
                    $(this).addClass('bg-gray-100');
                } else {
                    $(this).addClass('border-primary');
                }
            }
        });
    }

    // ===================================================
    // Testimonial Slider
    // ===================================================
    function initTestimonialSlider() {
        // Function to fix testimonial slider issues
        function fixTestimonialSlider() {
            if ($('.testimonial-slider').length) {
                // Get references to slider elements
                const testimonialSlider = $('.testimonial-slider');
                const testimonialTrack = $('.testimonial-track');
                const testimonialSlides = $('.testimonial-slide');
                const prevButton = $('.testimonial-prev');
                const nextButton = $('.testimonial-next');

                // Make sure the slider is properly initialized
                if (testimonialSlides.length > 0) {
                    // Calculate proper dimensions
                    let slideWidth;
                    let visibleSlides;

                    // Determine number of visible slides based on screen size
                    const screenWidth = $(window).width();
                    if (screenWidth < 640) {
                        visibleSlides = 1;
                    } else if (screenWidth < 1024) {
                        visibleSlides = 2;
                    } else {
                        visibleSlides = 3;
                    }

                    // Calculate slide width based on container and visible slides
                    const containerWidth = testimonialSlider.width();
                    slideWidth = containerWidth / visibleSlides;

                    // Apply width to slides with proper mobile handling
                    testimonialSlides.each(function(index) {
                        $(this).css({
                            'width': slideWidth + 'px',
                            'flex-basis': slideWidth + 'px'
                        });
                    });

                    // Ensure active slide is properly marked
                    testimonialSlides.removeClass('active');
                    for (let i = 0; i < visibleSlides; i++) {
                        if (i < testimonialSlides.length) {
                            $(testimonialSlides[i]).addClass('active');
                        }
                    }

                    // Reset track position
                    testimonialTrack.css('transform', 'translateX(0)');

                    // Make sure pagination dots are updated
                    if ($('.testimonial-dots').length) {
                        // Update or create pagination dots if needed
                        updatePaginationDots(testimonialSlides.length, visibleSlides);
                    }

                    // Show navigation buttons only if there are enough slides
                    if (testimonialSlides.length > visibleSlides) {
                        prevButton.show();
                        nextButton.show();
                    } else {
                        prevButton.hide();
                        nextButton.hide();
                    }
                }
            }
        }

        // Helper function to update pagination dots
        function updatePaginationDots(slideCount, visibleSlides) {
            const dotsContainer = $('.testimonial-dots');
            const maxSlideGroups = Math.max(1, Math.ceil(slideCount / visibleSlides));

            // Clear existing dots
            dotsContainer.empty();

            // Create the right number of dots
            for (let i = 0; i < maxSlideGroups; i++) {
                dotsContainer.append(`<button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 focus:outline-none transition-colors mx-1" data-index="${i}" aria-label="View testimonial group ${i+1}"></button>`);
            }

            // Make first dot active
            $('.testimonial-dot').first().addClass('bg-primary active').removeClass('bg-gray-300');

            // Add click event to dots
            $('.testimonial-dot').on('click', function() {
                const index = $(this).data('index');
                const slideWidth = $('.testimonial-slide').first().outerWidth(true);
                const offset = -index * slideWidth * visibleSlides;

                // Update active dot
                $('.testimonial-dot').removeClass('bg-primary active').addClass('bg-gray-300');
                $(this).addClass('bg-primary active').removeClass('bg-gray-300');

                // Move slider to position
                $('.testimonial-track').css('transform', `translateX(${offset}px)`);

                // Update active slides
                $('.testimonial-slide').removeClass('active');
                for (let i = index * visibleSlides; i < (index + 1) * visibleSlides; i++) {
                    if (i < slideCount) {
                        $(`.testimonial-slide:eq(${i})`).addClass('active');
                    }
                }
            });
        }

        // Function to handle next testimonial button click
        function handleNextButtonClick() {
            const dotsContainer = $('.testimonial-dots');
            const activeDot = dotsContainer.find('.active');
            const nextDot = activeDot.next('.testimonial-dot');

            if (nextDot.length) {
                nextDot.click();
            } else {
                // If at the end, go back to the first dot
                dotsContainer.find('.testimonial-dot').first().click();
            }
        }

        // Function to handle previous testimonial button click
        function handlePrevButtonClick() {
            const dotsContainer = $('.testimonial-dots');
            const activeDot = dotsContainer.find('.active');
            const prevDot = activeDot.prev('.testimonial-dot');

            if (prevDot.length) {
                prevDot.click();
            } else {
                // If at the beginning, go to the last dot
                dotsContainer.find('.testimonial-dot').last().click();
            }
        }

        // Add event listeners for next and previous buttons
        $('.testimonial-next').on('click', handleNextButtonClick);
        $('.testimonial-prev').on('click', handlePrevButtonClick);

        // Call fix on page load
        fixTestimonialSlider();

        // Also fix on window resize with debounce
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(fixTestimonialSlider, 250);
        });

        // Fix on window load to ensure all resources are loaded
        $(window).on('load', function() {
            fixTestimonialSlider();
        });
    }

    // Initialize testimonial slider
    initTestimonialSlider();

    // ===================================================
    // Logo Slider
    // ===================================================
    function initLogoSlider() {
        // Function to fix the logo slider
        function fixLogoSlider() {
            const logoSlider = $('.logo-slider');

            if (logoSlider.length) {
                // Ensure there are at least two copies of the logos for seamless looping
                const logoSlides = $('.logo-slide');

                if (logoSlides.length < 2) {
                    // Clone the first slide if we only have one
                    const clone = logoSlides.first().clone();
                    logoSlider.append(clone);
                }

                // Get all logo images and ensure they're loaded
                const logoImages = $('.logo-slide img');
                let loadedImages = 0;

                logoImages.each(function() {
                    const img = new Image();
                    img.onload = function() {
                        loadedImages++;
                        if (loadedImages === logoImages.length) {
                            resetLogoAnimation();
                        }
                    };
                    img.src = $(this).attr('src');
                });

                // Reset the animation
                function resetLogoAnimation() {
                    // Calculate the total width of all logos in one slide
                    let totalWidth = 0;
                    $('.logo-slide:first-child img').each(function() {
                        totalWidth += $(this).outerWidth(true);
                    });

                    // Set a minimum width to prevent issues
                    totalWidth = Math.max(totalWidth, logoSlider.width());

                    // Set width for proper animation
                    $('.logo-slide').width(totalWidth);

                    // Reset animation
                    logoSlides.css('animation', 'none');
                    void logoSlider[0].offsetWidth; // Force reflow
                    logoSlides.css('animation', 'slide 30s linear infinite');
                }

                // Call reset after a short delay to ensure DOM is ready
                setTimeout(resetLogoAnimation, 100);
            }
        }

        // Call logo slider fix
        fixLogoSlider();

        // Also fix on window resize with debounce
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(fixLogoSlider, 250);
        });

        // Fix on window load to ensure all resources are loaded
        $(window).on('load', function() {
            fixLogoSlider();
        });
    }

    // Initialize logo slider
    initLogoSlider();

    // ===================================================
    // Smooth Scrolling
    // ===================================================
    function initSmoothScrolling() {
        // Add smooth scrolling to all internal links
        $('a[href*="#"]:not([href="#"])').on('click', function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname) {

                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if (target.length) {
                    event.preventDefault();

                    // Close mobile menu if open
                    if ($('#mobile-menu').hasClass('active')) {
                        $('#mobile-menu').removeClass('active');
                        $('#mobile-menu-button i').removeClass('fa-times').addClass('fa-bars');
                        $('#mobile-menu-button').attr('aria-expanded', 'false');
                    }

                    $('html, body').animate({
                        scrollTop: target.offset().top - 80 // Adjusted for header height
                    }, 800);

                    // Update URL hash without causing jump
                    if (history.pushState) {
                        history.pushState(null, null, this.hash);
                    } else {
                        location.hash = this.hash;
                    }

                    return false;
                }
            }
        });
    }

    // Initialize smooth scrolling
    initSmoothScrolling();

    // ===================================================
    // FAQ Accordion
    // ===================================================
    function initFAQAccordion() {
        // Preload FAQ answers if they exist
        if ($('.faq-answer').length) {
            $('.faq-answer').each(function() {
                // Temporarily make visible to calculate height, but invisible
                $(this).css({
                    'position': 'absolute',
                    'visibility': 'hidden',
                    'display': 'block',
                    'height': 'auto'
                });

                // Store the height
                const height = $(this).outerHeight();
                $(this).data('height', height);

                // Reset to original state
                $(this).css({
                    'position': '',
                    'visibility': '',
                    'display': 'none',
                    'height': ''
                });
            });
        }

        // FAQ Accordion if it exists
        if ($('.faq-question').length) {
            $('.faq-question').on('click', function() {
                const item = $(this).parent();
                const answer = item.find('.faq-answer');
                const chevron = $(this).find('svg');

                if (item.hasClass('active')) {
                    // Close this item
                    chevron.css('transform', 'rotate(0deg)');
                    answer.animate({ height: 0 }, 300, function() {
                        answer.hide().css('height', '');
                        item.removeClass('active');
                    });
                } else {
                    // Close all other items
                    $('.faq-item.active').each(function() {
                        const activeChevron = $(this).find('.faq-question svg');
                        const activeAnswer = $(this).find('.faq-answer');

                        activeChevron.css('transform', 'rotate(0deg)');
                        activeAnswer.animate({ height: 0 }, 300, function() {
                            activeAnswer.hide().css('height', '');
                            $(this).parent().removeClass('active');
                        });
                    });

                    // Open this item
                    item.addClass('active');
                    chevron.css('transform', 'rotate(180deg)');

                    const height = answer.data('height');
                    answer.show().css('height', 0).animate({ height: height }, 300, function() {
                        // Reset height to auto after animation completes for responsive behavior
                        $(this).css('height', '');
                    });
                }
            });
        }
    }

    // Initialize FAQ accordion
    initFAQAccordion();

    // ===================================================
    // Form Validation
    // ===================================================
    function initFormValidation() {
        // Form validation if forms exist
        if ($('form').length) {
            $('form').on('submit', function(event) {
                // This is just for demo - in a real site, form would be processed by backend
                event.preventDefault();

                // Simple validation
                let valid = true;
                $(this).find('[required]').each(function() {
                    if ($(this).val() === '') {
                        valid = false;
                        $(this).addClass('border-red-500').removeClass('border-gray-300');
                    } else {
                        $(this).removeClass('border-red-500').addClass('border-gray-300');
                    }
                });

                if (valid) {
                    // Show success message
                    $(this).hide();
                    $(this).after('<div class="p-4 mt-4 bg-green-100 text-green-700 rounded-md"><i class="fas fa-check-circle mr-2"></i>Thank you! Your message has been sent successfully.</div>');
                }
            });

            // Reset form validation on input
            $('form input, form textarea').on('input', function() {
                $(this).removeClass('border-red-500').addClass('border-gray-300');
            });
        }
    }

    // Initialize form validation
    initFormValidation();

    // ===================================================
    // Scroll to Top Functionality
    // ===================================================
    function initScrollToTop() {
        // Reference to the scroll button
        const scrollButton = $('#scroll-to-top');

        // Check if the button exists
        if (scrollButton.length) {
            // Make sure the script is loaded and working
            console.log("Scroll to top button found");

            // Apply a more direct approach to show/hide the button
            $(window).scroll(function() {
                const scrollTop = $(this).scrollTop();

                if (scrollTop < 200) {
                    scrollButton.addClass('at-top');
                } else {
                    scrollButton.removeClass('at-top');
                }

                // Add progress indicator
                const docHeight = $(document).height();
                const winHeight = $(window).height();
                const scrollPercent = (scrollTop) / (docHeight - winHeight);
                const progressAngle = scrollPercent * 360;

                // Add a background progress indicator (circular)
                scrollButton.css('background-image',
                    `conic-gradient(rgba(59, 130, 246, 0.3) ${progressAngle}deg, #3B82F6 0deg)`);

                // Standard visibility toggle
                if (scrollTop > 300) {
                    scrollButton.addClass('visible');
                } else {
                    scrollButton.removeClass('visible');
                }
            });

            // Trigger a scroll event to check initial state
            $(window).trigger('scroll');

            // Add a more robust click handler
            scrollButton.on('click', function(e) {
                e.preventDefault();

                // Play a subtle sound effect
                const audio = new Audio('data:audio/mp3;base64,//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAFAAAGUACFhYWFhYWFhYWFhYWFhYWFhYWFvb29vb29vb29vb29vb29vb29vb3T09PT09PT09PT09PT09PT09PT0+np6enp6enp6enp6enp6enp6enp//////////////8AAAA5TEFNRTMuMTAwAZYAAAAAAAAAABQ4JAMGQgAAMAAABlAi/zWXAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//sQxAADwAABpAAAACAAANIAAAAEJ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8w==');
                audio.volume = 0.1; // Set volume to 10%
                audio.play().catch(e => {
                    // Handle any autoplay restrictions silently
                    console.log('Audio play prevented:', e);
                });

                // Animate scroll to top with improved easing
                $('html, body').animate({
                    scrollTop: 0
                }, {
                    duration: 800,
                    easing: 'easeInOutQuart',
                    complete: function() {
                        // Show toast notification
                        const toast = $('#scroll-toast');
                        toast.addClass('show');

                        // Hide toast after 3 seconds
                        setTimeout(function() {
                            toast.removeClass('show');
                        }, 3000);
                    }
                });

                return false;
            });
        } else {
            console.error("Scroll to top button not found");
        }
    }

    // Initialize scroll to top functionality
    initScrollToTop();

    // ===================================================
    // Service Worker Registration (PWA Support)
    // ===================================================
    function initServiceWorker() {
        // Register Service Worker for PWA support
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(registration => {
                    console.log('Service Worker registered with scope:', registration.scope);
                }).catch(error => {
                    console.log('Service Worker registration failed:', error);
                });
        }
    }

    // Initialize service worker
    initServiceWorker();

    // ===================================================
    // Scroll Animation for Modern Design
    // ===================================================
    function initScrollAnimations() {
        // Create intersection observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    }

    // Initialize scroll animations
    initScrollAnimations();

    // ===================================================
    // Enhanced Scroll to Top with Modern Styling
    // ===================================================
    function initEnhancedScrollToTop() {
        const scrollToTopBtn = $('#scroll-to-top');

        if (scrollToTopBtn.length) {
            // Show/hide button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    scrollToTopBtn.removeClass('at-top').addClass('visible');
                } else {
                    scrollToTopBtn.removeClass('visible').addClass('at-top');
                }
            });

            // Smooth scroll to top with enhanced animation
            scrollToTopBtn.click(function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 800, 'easeInOutCubic');

                // Add pulse effect
                $(this).addClass('btn-pulse');
                setTimeout(() => {
                    $(this).removeClass('btn-pulse');
                }, 2000);
            });
        }
    }

    // Initialize enhanced scroll to top
    initEnhancedScrollToTop();

    // ===================================================
    // Modern Card Hover Effects
    // ===================================================
    function initModernCardEffects() {
        // Enhanced course card hover effects
        $('.course-card').hover(
            function() {
                $(this).addClass('transform-active');
            },
            function() {
                $(this).removeClass('transform-active');
            }
        );

        // Feature card shimmer effect on hover
        $('.feature-card').hover(
            function() {
                const shimmerElement = $('<div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-20 transform -translate-x-full transition-transform duration-700"></div>');
                $(this).append(shimmerElement);
                setTimeout(() => {
                    shimmerElement.addClass('translate-x-full');
                }, 50);
                setTimeout(() => {
                    shimmerElement.remove();
                }, 750);
            }
        );
    }

    // Initialize modern card effects
    initModernCardEffects();

    // ===================================================
    // Parallax Effect for Hero Section
    // ===================================================
    function initParallaxEffect() {
        $(window).scroll(function() {
            const scrolled = $(this).scrollTop();
            const rate = scrolled * -0.5;

            $('.hero-overlay').css('transform', 'translateY(' + rate + 'px)');
        });
    }

    // Initialize parallax effect
    initParallaxEffect();

    // ===================================================
    // Enhanced Logo Slider with Pause on Hover
    // ===================================================
    function initEnhancedLogoSlider() {
        $('.logo-slider').hover(
            function() {
                $(this).find('.logo-slide').css('animation-play-state', 'paused');
            },
            function() {
                $(this).find('.logo-slide').css('animation-play-state', 'running');
            }
        );
    }

    // Initialize enhanced logo slider
    initEnhancedLogoSlider();

    // ===================================================
    // Staggered Animation for Grid Items
    // ===================================================
    function initStaggeredAnimations() {
        // Add staggered delays to grid items
        $('.course-card, .feature-card, .stat-card').each(function(index) {
            $(this).css('animation-delay', (index * 0.1) + 's');
        });
    }

    // Initialize staggered animations
    initStaggeredAnimations();

    // ===================================================
    // Modern Form Enhancements
    // ===================================================
    function initModernFormEnhancements() {
        // Add focus effects to form inputs
        $('input, textarea, select').on('focus', function() {
            $(this).closest('.form-group').addClass('focused');
        }).on('blur', function() {
            if (!$(this).val()) {
                $(this).closest('.form-group').removeClass('focused');
            }
        });

        // Add floating labels effect
        $('input, textarea').on('input', function() {
            if ($(this).val()) {
                $(this).addClass('has-value');
            } else {
                $(this).removeClass('has-value');
            }
        });
    }

    // Initialize modern form enhancements
    initModernFormEnhancements();

    // ===================================================
    // Initialize All Modern Features
    // ===================================================

    // Add jQuery easing for smooth animations
    $.easing.easeInOutCubic = function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t + b;
        return c/2*((t-=2)*t*t + 2) + b;
    };

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800, 'easeInOutCubic');
        }
    });

    // Add loading states to buttons
    $('.btn-modern').on('click', function() {
        const $btn = $(this);
        const originalText = $btn.text();

        // Don't add loading state to anchor links
        if (!$btn.is('a')) {
            $btn.addClass('loading-shimmer').text('Loading...');

            setTimeout(() => {
                $btn.removeClass('loading-shimmer').text(originalText);
            }, 2000);
        }
    });

    // Lazy load images for better performance
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('loading-shimmer');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Add ripple effect to buttons
    $('.btn-modern').on('mousedown', function(e) {
        const $btn = $(this);
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const ripple = $('<span class="ripple"></span>');
        ripple.css({
            position: 'absolute',
            left: x + 'px',
            top: y + 'px',
            width: '0',
            height: '0',
            borderRadius: '50%',
            background: 'rgba(255, 255, 255, 0.5)',
            transform: 'translate(-50%, -50%)',
            animation: 'ripple-animation 0.6s ease-out',
            pointerEvents: 'none'
        });

        $btn.css('position', 'relative').append(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);
    });

    // Add CSS for ripple animation
    if (!$('#ripple-styles').length) {
        $('<style id="ripple-styles">').text(`
            @keyframes ripple-animation {
                to {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
        `).appendTo('head');
    }

    console.log('Modern design enhancements loaded successfully!');
});

/**
 * Toggle password field visibility
 * @param {string} fieldId - The ID of the password field to toggle
 */
function togglePasswordVisibility(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const toggleButton = passwordField.nextElementSibling;
    const toggleIcon = toggleButton.querySelector('i');

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}
