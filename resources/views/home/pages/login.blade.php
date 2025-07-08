@extends('home.partials.app')
@section('content')
    <?php
    $pageTitle = 'Login';
    $pageDescription = 'Log in to your CodeSprintX account to access your internship materials, progress tracking, and certification.';
    ?>

    <!-- Login Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen flex items-center relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;100&quot; height=&quot;100&quot; viewBox=&quot;0 0 100 100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0h100v100H0z&quot; fill=&quot;none&quot;/%3E%3Cpath d=&quot;M0 0l100 100M100 0L0 100&quot; stroke=&quot;%233B82F6&quot; stroke-width=&quot;0.5&quot; opacity=&quot;0.3&quot;/%3E%3C/svg%3E');"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-md mx-auto">
                <!-- Login Card -->
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden border border-white/20 animate-on-scroll">
                    <!-- Header -->
                    <div class="bg-gradient-to-r from-primary to-secondary p-8 text-center">
                        <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-user text-3xl text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-white mb-2">Welcome Back</h2>
                        <p class="text-blue-100">Login to access your account</p>
                    </div>

                    <div class="p-8">
                        <form action="#" method="POST" class="space-y-6">
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

                            <!-- Password Field -->
                            <div class="form-group relative group">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-gray-700 font-medium text-sm group-focus-within:text-xs group-focus-within:text-primary transition-all duration-300">Password</label>
                                    <a href="#" class="text-sm text-primary hover:text-secondary font-medium transition-colors duration-300">Forgot Password?</a>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-lock text-gray-400 group-focus-within:text-primary transition-colors duration-300"></i>
                                    </div>
                                    <input type="password" id="password" name="password"
                                        class="w-full pl-12 pr-16 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 bg-gray-50 hover:bg-white"
                                        placeholder="Enter your password" required>
                                    <button type="button"
                                        class="toggle-password absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary focus:outline-none transition-colors duration-300 z-10"
                                        onclick="togglePasswordVisibility('password')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <div class="relative">
                                    <input type="checkbox" id="remember" name="remember"
                                        class="w-5 h-5 text-primary focus:ring-primary border-gray-300 rounded transition-colors duration-300">
                                </div>
                                <label for="remember" class="ml-3 text-gray-700 font-medium">Remember me</label>
                            </div>

                            <!-- Login Button -->
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 px-6 rounded-xl hover:from-secondary hover:to-primary font-semibold transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-primary/20 btn-modern shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Login to Account
                            </button>
                        </form>

                        <!-- Register Link -->
                        <div class="text-center mt-8 pt-6 border-t border-gray-200">
                            <p class="text-gray-600">Don't have an account?
                                <a href="{{ route('register') }}" class="text-primary hover:text-secondary font-semibold transition-colors duration-300">
                                    Register Now
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
