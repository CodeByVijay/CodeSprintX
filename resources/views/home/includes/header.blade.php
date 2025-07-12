 <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 sticky top-0 z-50 relative">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="block transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/logos/logo_color.webp') }}" alt="CodeSprintX Logo" class="h-10 filter drop-shadow-sm">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="nav-link text-gray-700 hover:text-primary font-medium transition-all duration-300 border-b-2 border-transparent hover:border-primary py-1.5 relative group">
                    Home
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-primary to-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="{{ route('about-us') }}" class="nav-link text-gray-700 hover:text-primary font-medium transition-all duration-300 border-b-2 border-transparent hover:border-primary py-1.5 relative group">
                    About Us
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-primary to-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="{{ route('home') }}#courses" class="nav-link text-gray-700 hover:text-primary font-medium transition-all duration-300 border-b-2 border-transparent hover:border-primary py-1.5 relative group">
                    Courses
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-primary to-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="{{ route('contact-us') }}" class="nav-link text-gray-700 hover:text-primary font-medium transition-all duration-300 border-b-2 border-transparent hover:border-primary py-1.5 relative group">
                    Contact
                    <span class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-primary to-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
            </nav>

            <!-- Authentication Buttons (Desktop) -->
            <div class="hidden md:flex space-x-3" role="menu">
                <a href="{{ route('login') }}" class="inline-block px-5 py-2 text-primary border-2 border-primary rounded-xl hover:bg-primary hover:text-white font-medium transition-all duration-300 btn-modern text-sm">
                    Login
                </a>
                <a href="{{ route('register') }}" class="inline-block px-5 py-2 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary font-medium transition-all duration-300 btn-modern shadow-lg hover:shadow-xl text-sm">
                    Register
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none p-2 rounded-xl hover:bg-gray-100 transition-colors duration-300 z-50" aria-label="Toggle menu" aria-expanded="false">
                <i class="fas fa-bars text-lg transition-transform duration-300"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-2xl absolute left-0 right-0 top-full z-40 mx-4 rounded-b-2xl" aria-labelledby="mobile-menu-button" role="menu">
            <div class="container mx-auto px-4 py-4 space-y-2" role="menuitem">
                <a href="{{ route('home') }}" class="nav-link block text-gray-700 hover:text-primary font-medium transition-all duration-300 py-2.5 px-3 rounded-lg hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
                    <i class="fas fa-home mr-3 text-primary text-sm"></i>Home
                </a>
                <a href="{{ route('about-us') }}" class="nav-link block text-gray-700 hover:text-primary font-medium transition-all duration-300 py-2.5 px-3 rounded-lg hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
                    <i class="fas fa-info-circle mr-3 text-primary text-sm"></i>About Us
                </a>
                <a href="{{ route('home') }}#courses" class="nav-link block text-gray-700 hover:text-primary font-medium transition-all duration-300 py-2.5 px-3 rounded-lg hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
                    <i class="fas fa-graduation-cap mr-3 text-primary text-sm"></i>Courses
                </a>
                <a href="{{ route('contact-us') }}" class="nav-link block text-gray-700 hover:text-primary font-medium transition-all duration-300 py-2.5 px-3 rounded-lg hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
                    <i class="fas fa-envelope mr-3 text-primary text-sm"></i>Contact
                </a>
                <div class="pt-3 pb-2 flex space-x-3 border-t border-gray-100">
                    <a href="{{ route('login') }}" class="flex-1 text-center px-3 py-2.5 text-primary border-2 border-primary rounded-lg hover:bg-primary hover:text-white font-medium transition-all duration-300 btn-modern text-sm">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="flex-1 text-center px-3 py-2.5 bg-gradient-to-r from-primary to-secondary text-white rounded-lg hover:from-secondary hover:to-primary font-medium transition-all duration-300 btn-modern shadow-lg text-sm">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </header>
