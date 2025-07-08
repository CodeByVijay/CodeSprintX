@extends('home.partials.app')
@section('content')

<?php
$pageTitle = "Register";
$pageDescription = "Register for a CodeSprintX account to enroll in our professional internship programs in Web Development, Python, Java and more.";
?>

<!-- Register Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 via-white to-blue-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;100&quot; height=&quot;100&quot; viewBox=&quot;0 0 100 100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0h100v100H0z&quot; fill=&quot;none&quot;/%3E%3Cpath d=&quot;M0 0l100 100M100 0L0 100&quot; stroke=&quot;%238B5CF6&quot; stroke-width=&quot;0.5&quot; opacity=&quot;0.3&quot;/%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto">
            <!-- Register Card -->
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden border border-white/20 animate-on-scroll">
                <!-- Header -->
                <div class="bg-gradient-to-r from-purple-600 to-primary p-8 text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-user-plus text-3xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-2">Create an Account</h2>
                    <p class="text-purple-100">Join CodeSprintX to start your professional journey</p>
                </div>

                <div class="p-8">
                    <form action="#" method="POST" class="space-y-6">
                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group relative group">
                                <label for="first_name" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">First Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-user text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                    </div>
                                    <input type="text" id="first_name" name="first_name"
                                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                        placeholder="First name" required>
                                </div>
                            </div>

                            <div class="form-group relative group">
                                <label for="last_name" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Last Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-user text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                    </div>
                                    <input type="text" id="last_name" name="last_name"
                                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                        placeholder="Last name" required>
                                </div>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group relative group">
                            <label for="email" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                    <i class="fas fa-envelope text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                </div>
                                <input type="email" id="email" name="email"
                                    class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                    placeholder="Enter your email" required>
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group relative group">
                            <label for="phone" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                    <i class="fas fa-phone text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                </div>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                    placeholder="Enter 10-digit phone number"
                                    pattern="[0-9]{10}"
                                    minlength="10"
                                    maxlength="10"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                                    required>
                            </div>
                        </div>

                        <!-- Password Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group relative group">
                                <label for="password" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-lock text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                    </div>
                                    <input type="password" id="password" name="password"
                                        class="w-full pl-12 pr-16 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                        placeholder="Create password" required>
                                    <button type="button"
                                        class="toggle-password absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary focus:outline-none transition-colors duration-300 z-10"
                                        onclick="togglePasswordVisibility('password')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group relative group">
                                <label for="confirm_password" class="block text-gray-700 font-medium mb-2 text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Confirm Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-lock text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                    </div>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="w-full pl-12 pr-16 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                        placeholder="Confirm password" required>
                                    <button type="button"
                                        class="toggle-password absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary focus:outline-none transition-colors duration-300 z-10"
                                        onclick="togglePasswordVisibility('confirm_password')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="flex items-start p-4 border-2 border-gray-200 rounded-xl">
                            <div class="flex items-center h-5 mt-1">
                                <input type="checkbox" id="terms" name="terms"
                                    class="w-5 h-5 text-primary focus:ring-primary border-gray-300 rounded transition-colors duration-300"
                                    required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-700 leading-relaxed">
                                    I agree to the
                                    <a href="{{ route('terms-conditions') }}" class="text-primary hover:text-secondary font-semibold transition-colors duration-300">Terms & Conditions</a>
                                    and
                                    <a href="{{ route('privacy-policy') }}" class="text-primary hover:text-secondary font-semibold transition-colors duration-300">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <!-- Register Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-primary text-white py-4 px-6 rounded-xl hover:from-primary hover:to-purple-600 font-semibold transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-primary/20 btn-modern shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <i class="fas fa-user-plus mr-2"></i>
                            Create Account
                        </button>
                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-8 pt-6 border-t border-gray-200">
                        <p class="text-gray-600">Already have an account?
                            <a href="{{ route('login') }}" class="text-primary hover:text-secondary font-semibold transition-colors duration-300">
                                Login
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>    </section>
@endsection

@section('scripts')
<script>

    // Phone number validation
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('phone');

        // Prevent non-numeric input and limit to 10 digits
        phoneInput.addEventListener('input', function(e) {
            // Remove any non-numeric characters
            let value = e.target.value.replace(/[^0-9]/g, '');

            // Limit to 10 digits
            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            e.target.value = value;
        });

        // Prevent pasting non-numeric content
        phoneInput.addEventListener('paste', function(e) {
            e.preventDefault();
            const paste = (e.clipboardData || window.clipboardData).getData('text');
            const numericPaste = paste.replace(/[^0-9]/g, '').slice(0, 10);
            e.target.value = numericPaste;
        });

        // Additional validation on form submit
        const form = phoneInput.closest('form');
        form.addEventListener('submit', function(e) {
            const phoneValue = phoneInput.value;
            if (phoneValue.length !== 10) {
                e.preventDefault();
                alert('Please enter exactly 10 digits for the phone number.');
                phoneInput.focus();
                return false;
            }
        });
    });
</script>
@endsection
