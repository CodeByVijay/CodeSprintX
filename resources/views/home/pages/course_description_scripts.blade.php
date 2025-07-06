<!-- Razorpay integration scripts -->
<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM loaded, initializing payment buttons...');

        // Handle Razorpay button clicks
        $('.razorpay-buy-btn').on('click', function(e) {
            e.preventDefault();

                const button = $(this);
                const course = button.data('course');
                const duration = button.data('duration');
                const amount = button.data('amount');

                console.log('Buy button clicked:', { course, duration, amount });

                // Show loading state
                const originalText = button.html();
                button.html('<i class="fas fa-spinner fa-spin"></i> Processing...');
                button.prop('disabled', true);

                // Create Razorpay order via AJAX
                $.ajax({
                    url: "{{ route('payment.create-order') }}",
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        course: course,
                        duration: duration,
                        amount: amount
                    },
                    success: function(response) {
                        console.log('Order created successfully:', response);

                        // Configure Razorpay options
                        const options = {
                            key: response.key_id,
                            amount: amount,
                            currency: response.currency || 'INR',
                            name: "CodeSprintX",
                            description: course + " - " + duration + " Month Internship Program",
                            image: "{{ asset('assets/images/logos/logo_color.png') }}",
                            order_id: response.order_id,
                            handler: function(paymentResponse) {
                                console.log('Payment successful:', paymentResponse);

                                // Submit form on successful payment
                                var form = document.createElement('form');
                                form.method = 'POST';
                                form.action = "{{ route('payment.verify') }}";

                                // Add CSRF token
                                var csrfToken = document.createElement('input');
                                csrfToken.type = 'hidden';
                                csrfToken.name = '_token';
                                csrfToken.value = "{{ csrf_token() }}";
                                form.appendChild(csrfToken);

                                // Add payment details
                                var paymentField = document.createElement('input');
                                paymentField.type = 'hidden';
                                paymentField.name = 'razorpay_payment_id';
                                paymentField.value = paymentResponse.razorpay_payment_id;
                                form.appendChild(paymentField);

                                var orderField = document.createElement('input');
                                orderField.type = 'hidden';
                                orderField.name = 'razorpay_order_id';
                                orderField.value = paymentResponse.razorpay_order_id;
                                form.appendChild(orderField);

                                var signatureField = document.createElement('input');
                                signatureField.type = 'hidden';
                                signatureField.name = 'razorpay_signature';
                                signatureField.value = paymentResponse.razorpay_signature;
                                form.appendChild(signatureField);

                                document.body.appendChild(form);
                                form.submit();
                            },
                            prefill: {
                                name: "",
                                email: "",
                                contact: ""
                            },
                            notes: {
                                course: course,
                                duration: duration + " months"
                            },
                            theme: {
                                color: "#3B82F6"
                            },
                            modal: {
                                ondismiss: function() {
                                    console.log('Payment cancelled');
                                    // Reset button state
                                    button.html(originalText);
                                    button.prop('disabled', false);
                                }
                            }
                        };

                        // Use our improved helper function to initialize Razorpay
                        initializeRazorpay(options)
                            .catch(error => {
                                console.error('Failed to initialize Razorpay:', error);
                                alert('There was an issue with the payment gateway: ' + error.message + '\nPlease try again.');

                                // Reset button state
                                button.html(originalText);
                                button.prop('disabled', false);
                            });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating order:', error);
                        console.error('Status:', status);
                        console.error('Response:', xhr.responseText);

                        try {
                            const response = JSON.parse(xhr.responseText);
                            alert('Error: ' + (response.error || 'Could not process payment. Please try again.'));
                        } catch (e) {
                            alert('Could not process payment. Please try again later.');
                        }

                        // Reset button state
                        button.html(originalText);
                        button.prop('disabled', false);
                    }
                });
            });

            // Also handle CTA section buttons
            $('.cta-buy-btn').on('click', function(e) {
                e.preventDefault();

                const course = $(this).data('course');
                const duration = $(this).data('duration');
                const amount = $(this).data('amount');

                // Find the corresponding buy button in the pricing section and trigger its click
                $(`.razorpay-buy-btn[data-course="${course}"][data-duration="${duration}"]`).click();
            });
        });
    </script>
@endsection
                        console.error('Response:', xhr.responseText);

                        let errorMessage = 'An error occurred while processing your payment. Please try again.';

                        try {
                            const response = JSON.parse(xhr.responseText);
                            if (response.error) {
                                errorMessage = response.error;
                            }
                        } catch (e) {
                            // Use default error message
                        }

                        alert(errorMessage);
                    }
                });
            });

            // Also handle CTA section buttons
            $('.cta-buy-btn').on('click', function(e) {
                e.preventDefault();

                const course = $(this).data('course');
                const duration = $(this).data('duration');
                const amount = $(this).data('amount');

                // Find the corresponding buy button in the pricing section and trigger its click
                $(`.razorpay-buy-btn[data-course="${course}"][data-duration="${duration}"]`).click();
            });
        });
    </script>
@endsection
