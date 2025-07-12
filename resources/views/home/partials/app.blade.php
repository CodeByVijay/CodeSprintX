<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Security Meta Tags -->
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://code.jquery.com https://cdnjs.cloudflare.com https://checkout.razorpay.com https://*.razorpay.com; style-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com; img-src 'self' data: https://placehold.co; font-src 'self' https://cdnjs.cloudflare.com; connect-src 'self' https://*.razorpay.com; frame-src 'self' https://*.razorpay.com https://www.google.com https://*.google.com; frame-ancestors 'none'; form-action 'self';">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <!-- Temporarily comment out X-Frame-Options to allow Razorpay iframes -->
    <!-- <meta http-equiv="X-Frame-Options" content="DENY"> -->
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">

    <!-- SEO Meta Tags -->
    <title>{{ $pageTitle ?? 'CodeSprintX - Professional Internship Programs' }}</title>
    <meta name="description" content="{{ $pageDescription ?? 'CodeSprintX offers 3-month and 6-month internship programs in Web Development, Python, Java and more. Get certified and boost your career.' }}">
    <meta name="keywords" content="{{ $pageKeywords ?? 'internship, skill development, web development, python, java, professional training, certification' }}">
    <meta name="author" content="CodeSprintX">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $pageTitle ?? 'CodeSprintX - Professional Internship Programs' }}">
    <meta property="og:description" content="{{ $pageDescription ?? 'CodeSprintX offers 3-month and 6-month internship programs in Web Development, Python, Java and more. Get certified and boost your career.' }}">
    <meta property="og:image" content="{{ asset('assets/images/logos/logo_color.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $pageTitle ?? 'CodeSprintX - Professional Internship Programs' }}">
    <meta property="twitter:description" content="{{ $pageDescription ?? 'CodeSprintX offers 3-month and 6-month internship programs in Web Development, Python, Java and more. Get certified and boost your career.' }}">
    <meta property="twitter:image" content="{{ asset('assets/images/logos/logo_color.webp') }}">

    <!-- Favicon & App Icons -->
    <link rel="icon" href="https://placehold.co/32x32.png?text=SC" type="image/png">
    <link rel="apple-touch-icon" href="https://placehold.co/192x192.png?text=SC" type="image/png">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#3B82F6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://codesprintx.com' . $_SERVER['REQUEST_URI']; ?>">

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

    <!-- Preload Key Assets -->
    <link rel="preload" href="{{ asset('assets/images/logos/logo_color.webp') }}" as="image">
    <link rel="preload" href="{{ asset('assets/css/style.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/js/script.min.js') }}" as="script">

    <!-- FontAwesome -->
    <link rel="preload" href="{{ asset('assets/css/fontawesome.css') }}" as="style">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}" as="style"/>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- jQuery UI for better animations -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- Razorpay SDK (pre-loaded) -->
    <script src="{{ asset('assets/js/razorpay-checkout.js') }}"></script>

    <!-- Razorpay Helper -->
    <script src="{{ asset('assets/js/razorpay-helper.min.js') }}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-50">
    <!-- No JavaScript Warning -->
    <noscript>
        <div
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: white; z-index: 9999; display: flex; justify-content: center; align-items: center; text-align: center; padding: 20px;">
            <div>
                <h1 style="color: #FF0000; font-size: 24px; margin-bottom: 20px;">JavaScript Required</h1>
                <p style="font-size: 16px; max-width: 600px; margin: 0 auto;">This website requires JavaScript to
                    function properly. Please enable JavaScript in your browser settings and reload the page.</p>
            </div>
        </div>
    </noscript>

    <!-- Header -->
    @include('home.includes.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('home.includes.footer')

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top" aria-label="Scroll to top" title="Scroll to top">
        <i class="fas fa-arrow-up"></i>
        <span class="sr-only">Scroll to top</span>
    </button>

    <!-- Toast Notification -->
    <!-- <div id="scroll-toast" class="scroll-toast">
        Scrolled to top
    </div> -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/security.min.js') }}"></script>

    <!-- Page-specific scripts -->
    @yield('scripts')

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "CodeSprintX",
        "url": "https://codesprintx.com",
        "logo": "{{ asset('assets/images/logos/logo_color.webp') }}",
        "description": "CodeSprintX offers professional internship programs in Web Development, Python, Java and more. Get certified and boost your career with our 3-month and 6-month programs.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Education Lane",
            "addressLocality": "Knowledge City",
            "addressRegion": "Delhi",
            "postalCode": "110001",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-9876543210",
            "contactType": "customer service",
            "email": "info@codesprintx.com"
        },
        "sameAs": [
            "https://www.facebook.com/CodeSprintX",
            "https://www.twitter.com/CodeSprintX",
            "https://www.instagram.com/CodeSprintX",
            "https://www.linkedin.com/company/CodeSprintX"
        ]
    }
    </script>
</body>

</html>
