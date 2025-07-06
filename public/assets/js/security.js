/**
 * Security Measures for CodeSprintX Website
 * This script implements various security protections:
 * - Disables right-click context menu
 * - Prevents developer tools access via F12 and other shortcuts
 * - Prevents text selection and copying
 * - Attempts to prevent screenshots (limited effectiveness)
 * - Prevents keyboard shortcuts for developer tools
 */

(function() {
    // ===================================================
    // Ensure FontAwesome and other essential resources load
    // ===================================================
    const checkFontAwesome = function() {
        // Check if FontAwesome is loaded correctly
        if (typeof FontAwesome === 'undefined' && document.querySelector('.fas, .fab, .far') !== null) {
            // If FontAwesome failed to load but icons are present, attempt to reload it
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css';
            document.head.appendChild(link);
        }
    };

    // Run once after short delay to ensure page has loaded
    setTimeout(checkFontAwesome, 1000);

    // ===================================================
    // Disable Right-Click Context Menu
    // ===================================================
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        return false;
    });

    // ===================================================
    // Prevent Text Selection and Copying
    // ===================================================
    document.addEventListener('selectstart', function(e) {
        // Don't prevent selection in form elements
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            return true;
        }
        e.preventDefault();
        return false;
    });

    // Apply user-select: none to the entire body
    document.body.style.userSelect = 'none';
    document.body.style.webkitUserSelect = 'none';
    document.body.style.msUserSelect = 'none';
    document.body.style.mozUserSelect = 'none';

    // Prevent copy, cut, paste
    document.addEventListener('copy', function(e) {
        // Don't prevent copy in form elements
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            return true;
        }
        e.preventDefault();
        return false;
    });

    document.addEventListener('cut', function(e) {
        // Don't prevent cut in form elements
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            return true;
        }
        e.preventDefault();
        return false;
    });

    // ===================================================
    // Prevent Developer Tools via Keyboard Shortcuts
    // ===================================================
    document.addEventListener('keydown', function(e) {
        // Prevent F12
        if (e.keyCode === 123) {
            e.preventDefault();
            return false;
        }

        // Prevent Ctrl+Shift+I (Chrome dev tools)
        if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
            e.preventDefault();
            return false;
        }

        // Prevent Ctrl+Shift+J (Chrome dev tools)
        if (e.ctrlKey && e.shiftKey && e.keyCode === 74) {
            e.preventDefault();
            return false;
        }

        // Prevent Ctrl+Shift+C (Chrome dev tools inspect)
        if (e.ctrlKey && e.shiftKey && e.keyCode === 67) {
            e.preventDefault();
            return false;
        }

        // Prevent Ctrl+Shift+E (Firefox dev tools)
        if (e.ctrlKey && e.shiftKey && e.keyCode === 69) {
            e.preventDefault();
            return false;
        }

        // Prevent Ctrl+U (View Source)
        if (e.ctrlKey && e.keyCode === 85) {
            e.preventDefault();
            return false;
        }

        // Prevent Print Screen
        if (e.keyCode === 44) {
            e.preventDefault();
            return false;
        }
    });

    // ===================================================
    // Additional Developer Tools Detection
    // ===================================================

    // Set a flag for developer tools detection
    let devToolsOpen = false;

    // Function to detect developer tools
    function detectDevTools() {
        const widthThreshold = window.outerWidth - window.innerWidth > 160;
        const heightThreshold = window.outerHeight - window.innerHeight > 160;

        // Detect if Dev Tools is open
        if (widthThreshold || heightThreshold) {
            if (!devToolsOpen) {
                // Dev tools just opened
                devToolsOpen = true;
                handleDevToolsOpen();
            }
        } else {
            if (devToolsOpen) {
                // Dev tools just closed
                devToolsOpen = false;
            }
        }
    }

    // Function to handle when dev tools is opened
    function handleDevToolsOpen() {
        // Redirect or show warning
        document.documentElement.innerHTML = 'Developer tools access is not permitted on this site.';
        // Alternatively, redirect:
        // window.location.href = './';
    }

    // Check for dev tools periodically
    setInterval(detectDevTools, 1000);

    // ===================================================
    // Prevent Screenshots (limited effectiveness)
    // ===================================================

    // Apply CSS that can make screenshots more difficult
    const style = document.createElement('style');
    style.innerHTML = `
        /* Make screenshots more difficult with CSS tricks */
        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            pointer-events: none;
            z-index: 10000;
        }
    `;
    document.head.appendChild(style);

    // ===================================================
    // Console Warning Message
    // ===================================================
    const warningMessage = `
    ⚠️ WARNING ⚠️
    This is a protected website.
    Any attempt to use developer tools or extract content
    is strictly prohibited and may result in legal action.
    `;

    // Override console methods
    const consoleWarn = console.warn;
    console.warn = function() {
        consoleWarn.apply(console, [warningMessage]);
    };

    // Show warning in console
    console.warn();

    // Disable console.log and other methods
    console.log = function() { return false; };
    console.error = function() { return false; };
    console.info = function() { return false; };
    console.debug = function() { return false; };

})();
