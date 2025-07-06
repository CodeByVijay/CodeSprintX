/**
 * Dashboard UI functionality for student dashboard
 */
document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const profileButton = document.getElementById('profile-button');
    const profileDropdown = document.getElementById('profile-dropdown');
    const sidebarLinks = sidebar ? sidebar.querySelectorAll('a') : [];

    // Check if Font Awesome is loaded properly
    checkFontAwesome();

    // Add mobile table functionality
    initResponsiveTables();

    // Initialize responsive layout adjustments
    initResponsiveLayout();

    // Check for device type
    const isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

    // Add appropriate event listeners based on device type
    if (isTouchDevice) {
        enableTouchOptimizations();
    }    // Profile dropdown functionality
    if (profileButton && profileDropdown) {
        profileButton.addEventListener('click', function(e) {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');

            // Update aria-expanded attribute for accessibility
            const isExpanded = !profileDropdown.classList.contains('hidden');
            profileButton.setAttribute('aria-expanded', isExpanded);
        });

        document.addEventListener('click', function(e) {
            if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.add('hidden');
                profileButton.setAttribute('aria-expanded', 'false');
            }
        });

        // Close dropdown when Escape key is pressed
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !profileDropdown.classList.contains('hidden')) {
                profileDropdown.classList.add('hidden');
                profileButton.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Note: Sidebar toggle functionality is handled in the main layout file
    // to avoid conflicts and ensure proper initialization order

    // Initialize tooltips if they exist
    const tooltips = document.querySelectorAll('[data-tooltip]');
    if (tooltips.length > 0) {
        tooltips.forEach(tooltip => {
            tooltip.addEventListener('mouseenter', function() {
                const tooltipText = this.getAttribute('data-tooltip');
                const tooltipEl = document.createElement('div');
                tooltipEl.className = 'tooltip absolute bg-gray-800 text-white text-xs rounded py-1 px-2 z-50';
                tooltipEl.innerHTML = tooltipText;
                document.body.appendChild(tooltipEl);

                const rect = this.getBoundingClientRect();
                tooltipEl.style.top = rect.bottom + 5 + 'px';
                tooltipEl.style.left = rect.left + (rect.width / 2) - (tooltipEl.offsetWidth / 2) + 'px';
            });

            tooltip.addEventListener('mouseleave', function() {
                const tooltips = document.querySelectorAll('.tooltip');
                tooltips.forEach(t => t.remove());
            });
        });
    }

    // Initialize responsive table functionality
    function initResponsiveTables() {
        const tables = document.querySelectorAll('.responsive-table-card');

        tables.forEach(table => {
            if (window.innerWidth <= 640) {
                const headerCells = table.querySelectorAll('thead th');
                const headers = Array.from(headerCells).map(th => th.textContent.trim());

                const dataCells = table.querySelectorAll('tbody td');
                dataCells.forEach((cell, index) => {
                    // Only add data-label if it doesn't already have one
                    if (!cell.hasAttribute('data-label')) {
                        const headerIndex = index % headers.length;
                        cell.setAttribute('data-label', headers[headerIndex]);
                    }
                });
            }
        });
    }

    // Function to check FontAwesome loading
    function checkFontAwesome() {
        const span = document.createElement('span');
        span.className = 'fa';
        span.style.display = 'none';
        document.body.appendChild(span);

        const isFontAwesomeLoaded = window.getComputedStyle(span).getPropertyValue('font-family').includes('Font');
        document.body.removeChild(span);

        if (!isFontAwesomeLoaded) {
            console.warn('Font Awesome not loaded properly, attempting to reload');
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css';
            document.head.appendChild(link);
        }
    }

    // Function to optimize touch experience
    function enableTouchOptimizations() {
        // Add specific touch handlers for better mobile experience
        if (sidebar) {
            // Add extra padding to touch targets for easier tapping
            const sidebarItems = sidebar.querySelectorAll('a');
            sidebarItems.forEach(item => {
                item.style.paddingTop = '0.75rem';
                item.style.paddingBottom = '0.75rem';
            });

            // Add swipe to close sidebar functionality
            let touchStartX = 0;
            let touchEndX = 0;

            sidebar.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            }, {passive: true});

            sidebar.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, {passive: true});

            function handleSwipe() {
                if (touchStartX - touchEndX > 50 && window.innerWidth < 768) {
                    // Swiped left, close the sidebar
                    sidebar.classList.remove('expanded');
                    if (sidebarOverlay) {
                        sidebarOverlay.classList.remove('active');
                    }
                }
            }
        }

        // Make buttons more touch-friendly
        const buttons = document.querySelectorAll('button, .btn, [role="button"]');
        buttons.forEach(button => {
            if (!button.classList.contains('touch-optimized')) {
                button.classList.add('touch-optimized');
                button.style.minHeight = '44px';  // Apple's recommended minimum touch target
            }
        });
    }

    // Function to handle responsive layout adjustments
    function initResponsiveLayout() {
        // Fix for iOS Safari 100vh issue
        if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);

            window.addEventListener('resize', () => {
                const vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });
        }

        // Add touch-target-size class to interactive elements
        const touchTargets = document.querySelectorAll('a, button, input, select, [role="button"]');
        touchTargets.forEach(target => {
            if (!target.classList.contains('touch-target-size') &&
                !target.closest('.sidebar') &&
                !target.closest('.header')) {
                target.classList.add('touch-target-size');
            }
        });

        // Prevent zooming on input fields on iOS
        const metaViewport = document.querySelector('meta[name="viewport"]');
        if (metaViewport && /iPhone|iPad|iPod/.test(navigator.userAgent)) {
            metaViewport.content = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0';
        }

        // Listen for orientation changes
        window.addEventListener('orientationchange', function() {
            setTimeout(() => {
                const vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }, 200);
        });
    }
});
