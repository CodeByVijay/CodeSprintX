// Global variable to track script loading status
let razorpayScriptLoaded = false;
let razorpayLoadPromise = null;

/**
 * Load the Razorpay script and return a promise
 * This ensures we only try to load it once, even if called multiple times
 */
function loadRazorpayScript() {
    // If script is already loaded or loading, return the existing promise
    if (razorpayLoadPromise) {
        return razorpayLoadPromise;
    }

    // If Razorpay is already defined, return a resolved promise
    if (typeof Razorpay !== 'undefined') {
        razorpayScriptLoaded = true;
        return Promise.resolve();
    }

    // Create a new promise to load the script
    razorpayLoadPromise = new Promise((resolve, reject) => {
        console.log('Loading Razorpay script...');

        // Create and append script element
        const script = document.createElement('script');
        script.src = 'https://checkout.razorpay.com/v1/checkout.js';
        script.async = true;
        script.defer = true;

        script.onload = function() {
            console.log('✅ Razorpay script loaded successfully');
            razorpayScriptLoaded = true;
            resolve();
        };

        script.onerror = function(error) {
            console.error('❌ Failed to load Razorpay script', error);
            razorpayLoadPromise = null; // Reset the promise so we can try again
            reject(new Error('Failed to load the payment gateway script. Please check your internet connection.'));
        };

        document.head.appendChild(script);
    });

    return razorpayLoadPromise;
}

/**
 * Check if Razorpay is available, load it if needed, and call callback when ready
 * @param {Function} callback - Function to call when Razorpay is ready
 */
function withRazorpay(callback) {
    // If Razorpay is already available, call the callback immediately
    if (typeof Razorpay === 'function') {
        callback();
        return;
    }

    // Otherwise, load the script and then call the callback
    loadRazorpayScript()
        .then(callback)
        .catch(error => {
            console.error('Error in withRazorpay:', error);
            const retry = confirm('Unable to load payment gateway. Would you like to try again?');
            if (retry) {
                razorpayLoadPromise = null; // Reset the promise so we can try again
                withRazorpay(callback);
            }
        });
}

/**
 * Initialize Razorpay with the given options
 * Handles loading the script if needed and provides better error handling
 * @param {Object} options - Razorpay options object
 * @param {number} maxAttempts - Maximum number of initialization attempts
 * @returns {Promise} - Resolves when Razorpay is initialized and opened
 */
function initializeRazorpay(options, maxAttempts = 3) {
    let attempts = 0;

    function attemptInit() {
        return new Promise((resolve, reject) => {
            attempts++;
            console.log(`Attempt ${attempts} to initialize Razorpay`);

            if (typeof Razorpay !== 'function') {
                console.log('Razorpay not available yet, loading script...');
                loadRazorpayScript()
                    .then(() => {
                        if (attempts < maxAttempts) {
                            setTimeout(() => {
                                attemptInit().then(resolve).catch(reject);
                            }, 1000);
                        } else {
                            reject(new Error('Failed to load Razorpay after multiple attempts'));
                        }
                    })
                    .catch(reject);
                return;
            }

            console.log('Creating Razorpay instance with options:', {
                key: options.key,
                order_id: options.order_id,
                amount: options.amount,
                currency: options.currency
            });

            try {
                const rzp = new Razorpay(options);

                // Add event handlers for better tracking
                rzp.on('payment.success', function(response) {
                    console.log('Payment successful via event handler:', response);
                    resolve(response);
                });

                rzp.on('payment.error', function(error) {
                    console.error('Payment error via event handler:', error);
                    reject(error);
                });

                // Open the checkout form
                rzp.open();
                console.log('✅ Razorpay checkout opened successfully');
                resolve(rzp);
            } catch (error) {
                console.error('❌ Error initializing Razorpay:', error);

                if (attempts < maxAttempts) {
                    console.log(`Retrying... (${attempts}/${maxAttempts})`);
                    setTimeout(() => {
                        attemptInit().then(resolve).catch(reject);
                    }, 1000);
                } else {
                    reject(error);
                }
            }
        });
    }

    return attemptInit();
}

// Try to preload the Razorpay script when this file loads
loadRazorpayScript().catch(error => {
    console.warn('Preloading Razorpay script failed:', error);
    console.log('Will try again when payment is initiated');
});
