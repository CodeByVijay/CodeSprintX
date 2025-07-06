<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Security Meta Tags -->
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://code.jquery.com https://cdnjs.cloudflare.com https://checkout.razorpay.com https://*.razorpay.com; style-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com; img-src 'self' data: https://placehold.co; font-src 'self' data: https://cdnjs.cloudflare.com https://fonts.gstatic.com; connect-src 'self' https://*.razorpay.com; frame-src 'self' https://*.razorpay.com https://www.google.com https://*.google.com; frame-ancestors 'none'; form-action 'self';">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">

    <!-- SEO Meta Tags -->
    <title>{{ $pageTitle ?? 'Student Dashboard - CodeSprintX' }}</title>
    <meta name="description" content="{{ $pageDescription ?? 'Student dashboard for CodeSprintX Internship Programs.' }}">
    <meta name="author" content="CodeSprintX">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon & App Icons -->
    <link rel="icon" href="https://placehold.co/32x32.png?text=SC" type="image/png">
    <link rel="apple-touch-icon" href="https://placehold.co/192x192.png?text=SC" type="image/png">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#3B82F6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#60A5FA',
                        dark: '#1F2937',
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft8v5raYoqOn0fFIl7JjKcgKP9n2A8YHiWQR2b6FQlRCFpJDFgP3MqGCWsmi/gIgbKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fallback for Font Awesome -->
    <script>
        (function() {
            // Check if Font Awesome is loaded
            const span = document.createElement('span');
            span.className = 'fa';
            span.style.display = 'none';
            document.body.insertBefore(span, document.body.firstChild);

            const isFontAwesomeLoaded = window.getComputedStyle(span, null).getPropertyValue('font-family').includes('FontAwesome');
            document.body.removeChild(span);

            if (!isFontAwesomeLoaded) {
                // If not loaded, add it again
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css';
                document.head.appendChild(link);
                console.log('Font Awesome fallback loaded');
            }
        })();
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard-responsive.css') }}">

    <style>
        /* Dashboard specific styles */
        :root {
            --vh: 1vh;
        }

        .sidebar {
            width: 260px;
            transition: all 0.3s ease;
            position: fixed;
            height: 100vh; /* Fallback */
            height: calc(var(--vh, 1vh) * 100);
            z-index: 40;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .content-wrapper {
            margin-left: 260px;
            transition: all 0.3s ease;
            width: calc(100% - 260px);
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar.collapsed .sidebar-logo span,
        .sidebar.collapsed .nav-text {
            display: none;
        }

        .sidebar.collapsed ~ .content-wrapper {
            margin-left: 70px;
            width: calc(100% - 70px);
        }

        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu.hidden {
            display: none;
        }

        /* Ensure icons display properly */
        .fas, .far, .fab, .fa {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
            font-weight: 900;
        }

        .far {
            font-weight: 400 !important;
        }

        .fab {
            font-family: "Font Awesome 6 Brands" !important;
        }

        /* Sidebar toggle button styling */
        #sidebar-toggle {
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            background: none;
        }

        #sidebar-toggle:hover {
            background-color: rgba(59, 130, 246, 0.1);
            transform: scale(1.05);
        }

        #sidebar-toggle:active {
            transform: scale(0.95);
        }

        /* Mobile sidebar toggle styling */
        #mobile-sidebar-toggle {
            cursor: pointer;
            transition: all 0.2s ease;
        }

        #mobile-sidebar-toggle:hover {
            background-color: #f9fafb;
            transform: scale(1.05);
        }

        #mobile-sidebar-toggle:active {
            transform: scale(0.95);
            background-color: #f3f4f6;
        }

        /* Profile image upload styles */
        .profile-image-container {
            transition: all 0.3s ease;
        }

        .profile-image-container:hover {
            transform: scale(1.02);
        }

        .profile-image-container.drag-over {
            border-color: #3B82F6 !important;
            background-color: rgba(59, 130, 246, 0.1);
        }

        /* Notification toast animations */
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        .notification-toast {
            animation: slideInRight 0.3s ease-out;
        }

        .notification-toast.hide {
            animation: slideOutRight 0.3s ease-in;
        }

        /* Mobile sidebar - hidden by default on small screens */
        @media (max-width: 767px) {
            .sidebar {
                width: 0;
                transform: translateX(-100%);
                box-shadow: none;
                z-index: 40;
                transition: transform 0.3s ease-in-out, width 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            .sidebar.expanded {
                width: 260px;
                transform: translateX(0);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }

            .content-wrapper {
                margin-left: 0;
                width: 100%;
                transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 30;
                transition: opacity 0.3s ease;
                -webkit-tap-highlight-color: transparent;
            }

            .overlay.active {
                display: block;
                animation: fade-in 0.3s forwards;
            }

            @keyframes fade-in {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            /* Mobile toggle button position */
            .mobile-toggle {
                display: block;
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 50;
                background-color: white;
                padding: 0.5rem;
                border-radius: 0.375rem;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                transition: background-color 0.2s ease;
            }

            .mobile-toggle:active {
                background-color: #f3f4f6;
            }
        }

        /* Tablet view adjustments */
        @media (min-width: 768px) and (max-width: 1023px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .sidebar-logo span,
            .sidebar .nav-text {
                display: none;
            }

            .content-wrapper {
                margin-left: 70px;
                width: calc(100% - 70px);
            }

            .sidebar.expanded {
                width: 260px;
            }

            .sidebar.expanded .sidebar-logo span,
            .sidebar.expanded .nav-text {
                display: inline;
            }

            .sidebar.expanded ~ .content-wrapper {
                margin-left: 260px;
                width: calc(100% - 260px);
            }
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-50">
    <!-- Mobile sidebar toggle button (only visible on small screens) -->
    <button id="mobile-sidebar-toggle" class="mobile-toggle md:hidden fixed top-4 left-4 z-50 bg-white text-gray-700 p-2 rounded-lg shadow-md">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Overlay for mobile sidebar -->
    <div id="sidebar-overlay" class="overlay md:hidden"></div>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('user.includes.sidebar')

        <!-- Content Area -->
        <div class="content-wrapper flex-1 flex flex-col">
            <!-- Header/Navbar -->
            @include('user.includes.header')

            <!-- Main Content -->
            <main class="flex-1 p-4 md:p-6 overflow-x-hidden">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-white border-t">
                <div class="container mx-auto px-4 text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} CodeSprintX. All rights reserved.
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Profile dropdown functionality
            const profileButton = document.getElementById('profile-button');
            const profileDropdown = document.getElementById('profile-dropdown');

            if (profileButton && profileDropdown) {
                profileButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    profileDropdown.classList.toggle('show');
                });

                document.addEventListener('click', function(e) {
                    if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                        profileDropdown.classList.remove('show');
                    }
                });
            }

            // Sidebar toggle functionality
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
            const sidebarOverlay = document.getElementById('sidebar-overlay');

            console.log('Sidebar elements found:', {
                sidebar: !!sidebar,
                sidebarToggle: !!sidebarToggle,
                mobileSidebarToggle: !!mobileSidebarToggle,
                sidebarOverlay: !!sidebarOverlay
            });

            // Function to toggle sidebar based on screen size
            function toggleSidebar() {
                if (window.innerWidth >= 768) {
                    // Desktop: toggle collapsed state
                    sidebar.classList.toggle('collapsed');
                    console.log('Desktop sidebar toggled, collapsed:', sidebar.classList.contains('collapsed'));
                } else {
                    // Mobile: toggle expanded state
                    sidebar.classList.toggle('expanded');
                    if (sidebarOverlay) {
                        sidebarOverlay.classList.toggle('active');
                    }
                    console.log('Mobile sidebar toggled, expanded:', sidebar.classList.contains('expanded'));
                }
            }

            // Desktop sidebar toggle (button inside sidebar)
            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Sidebar toggle button clicked');
                    toggleSidebar();
                });
            }

            // Mobile sidebar toggle (floating button)
            if (mobileSidebarToggle && sidebar) {
                mobileSidebarToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Mobile sidebar toggle button clicked');
                    sidebar.classList.toggle('expanded');
                    if (sidebarOverlay) {
                        sidebarOverlay.classList.toggle('active');
                    }
                });
            }

            // Close sidebar when clicking on overlay
            if (sidebarOverlay && sidebar) {
                sidebarOverlay.addEventListener('click', function() {
                    console.log('Overlay clicked, closing sidebar');
                    sidebar.classList.remove('expanded');
                    sidebarOverlay.classList.remove('active');
                });

                // Also handle touch events for mobile
                sidebarOverlay.addEventListener('touchstart', function(e) {
                    e.preventDefault();
                    console.log('Overlay touched, closing sidebar');
                    sidebar.classList.remove('expanded');
                    sidebarOverlay.classList.remove('active');
                });
            }

            // Resize handling
            window.addEventListener('resize', function() {
                const isDesktop = window.innerWidth >= 768;
                console.log('Window resized, isDesktop:', isDesktop);

                if (!isDesktop) {
                    // Mobile: remove collapsed state and handle overlay
                    sidebar.classList.remove('collapsed');
                    if (sidebar.classList.contains('expanded') && sidebarOverlay) {
                        sidebarOverlay.classList.add('active');
                    }
                } else {
                    // Desktop: remove mobile states
                    sidebar.classList.remove('expanded');
                    if (sidebarOverlay) {
                        sidebarOverlay.classList.remove('active');
                    }
                }
            });

            // Close sidebar when clicking on a link on mobile
            const sidebarLinks = sidebar ? sidebar.querySelectorAll('a') : [];
            if (sidebarLinks.length > 0) {
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (window.innerWidth < 768 && sidebar.classList.contains('expanded')) {
                            console.log('Sidebar link clicked on mobile, closing sidebar');
                            sidebar.classList.remove('expanded');
                            if (sidebarOverlay) {
                                sidebarOverlay.classList.remove('active');
                            }
                        }
                    });
                });
            }

            // Initialize sidebar state on page load
            function initializeSidebarState() {
                if (window.innerWidth >= 768) {
                    // Desktop: ensure no mobile classes
                    sidebar.classList.remove('expanded');
                    if (sidebarOverlay) {
                        sidebarOverlay.classList.remove('active');
                    }
                } else {
                    // Mobile: ensure no desktop classes
                    sidebar.classList.remove('collapsed');
                }
                console.log('Sidebar state initialized for', window.innerWidth >= 768 ? 'desktop' : 'mobile');
            }

            // Initialize on page load
            if (sidebar) {
                initializeSidebarState();
            }
        });
    </script>

    <!-- Page-specific scripts -->
    @yield('scripts')

    <!-- Dashboard Script -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/security.js') }}"></script>
</body>

</html>
