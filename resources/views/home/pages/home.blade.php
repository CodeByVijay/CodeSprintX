<?php
use App\Helpers\ColorHelper;
?>
@extends('home.partials.app')
@section('content')
    <?php
    $pageTitle = 'Home';
    $pageDescription = 'CodeSprintX offers professional internship programs in Web Development, Python, Java and more. Get certified and boost your career with our 3-month and 6-month programs.';
    ?>

    <!-- Hero Banner -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('assets/images/hero_section.png') }}" alt="Students learning"
                class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative container mx-auto px-4 py-24 md:py-32">
            <div class="max-w-2xl animate-on-scroll">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 gradient-text">Launch Your Career with Professional
                    Internships</h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed">Gain practical skills, build your
                    portfolio, and get certified with our 3-month and 6-month internship programs.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#courses"
                        class="inline-block px-8 py-4 bg-primary text-white font-semibold rounded-xl hover:bg-secondary transition-all duration-300 text-center btn-modern btn-pulse">
                        Explore Programs
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="inline-block px-8 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-all duration-300 text-center btn-modern">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-white section-pattern">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 section-heading">Why Choose CodeSprintX</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">What makes our internship programs stand out from the
                    competition</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div
                    class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 animate-on-scroll">
                    <div
                        class="feature-icon inline-block p-6 bg-gradient-to-br from-blue-100 to-purple-100 text-primary rounded-2xl mb-6">
                        <i class="fas fa-laptop-code text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Industry-Relevant Skills</h3>
                    <p class="text-gray-600 leading-relaxed">Learn skills that are in high demand in today's job market with
                        real-world applications.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 animate-on-scroll">
                    <div
                        class="feature-icon inline-block p-6 bg-gradient-to-br from-green-100 to-blue-100 text-primary rounded-2xl mb-6">
                        <i class="fas fa-certificate text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Recognized Certification</h3>
                    <p class="text-gray-600 leading-relaxed">Get certified upon completion to boost your resume and career
                        prospects.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 animate-on-scroll">
                    <div
                        class="feature-icon inline-block p-6 bg-gradient-to-br from-purple-100 to-pink-100 text-primary rounded-2xl mb-6">
                        <i class="fas fa-project-diagram text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Practical Projects</h3>
                    <p class="text-gray-600 leading-relaxed">Build real-world projects for your professional portfolio that
                        employers love.</p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="feature-card bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-300 animate-on-scroll">
                    <div
                        class="feature-icon inline-block p-6 bg-gradient-to-br from-yellow-100 to-orange-100 text-primary rounded-2xl mb-6">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Expert Mentorship</h3>
                    <p class="text-gray-600 leading-relaxed">Learn from industry professionals with years of experience and
                        expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Internship Programs -->
    <section id="courses" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 section-pattern">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 section-heading">Our Internship Programs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Choose from our range of professional internship domains
                    designed to launch your career</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Course 1 -->
                @foreach ($programs as $program)
                    {{-- {{ dd($program) }} --}}
                    <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">

                        <div class="h-52 flex items-center justify-center text-white relative overflow-hidden"
                            style="background: linear-gradient(135deg, {{ $program->bg_color }}, {{ ColorHelper::darken($program->bg_color, 0.5) }});">


                            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                            <i class="{{ $program->icon }} text-7xl relative z-10"></i>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-gray-800">{{ $program->title }}</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">{{ $program->short_desc }}</p>
                            <div class="mb-6 flex flex-wrap gap-2">
                                <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month
                                    Plan</span>
                                <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month
                                    Plan</span>
                            </div>
                            <a href="{{ route('course.description', $program->slug) }}"
                                class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                                View More
                            </a>
                        </div>
                    </div>
                @endforeach

                <!-- Course 2 -->
                {{-- <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">
                <div class="h-52 bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    <i class="fab fa-python text-7xl relative z-10"></i>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Python Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Learn Python programming, data analysis, Django, and machine learning fundamentals.</p>
                    <div class="mb-6 flex flex-wrap gap-2">
                        <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month Plan</span>
                        <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month Plan</span>
                    </div>
                    <a href="{{ route('course.description', 'python-development') }}" class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                        View More
                    </a>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">
                <div class="h-52 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    <i class="fab fa-java text-7xl relative z-10"></i>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Java Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Master Java programming, OOP concepts, Spring Boot, and enterprise applications.</p>
                    <div class="mb-6 flex flex-wrap gap-2">
                        <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month Plan</span>
                        <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month Plan</span>
                    </div>
                    <a href="{{ route('course.description', 'java-development') }}" class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                        View More
                    </a>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">
                <div class="h-52 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    <i class="fas fa-database text-7xl relative z-10"></i>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Data Science</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Learn data analysis, visualization, statistical methods and machine learning algorithms.</p>
                    <div class="mb-6 flex flex-wrap gap-2">
                        <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month Plan</span>
                        <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month Plan</span>
                    </div>
                    <a href="{{ route('course.description', 'data-science') }}" class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                        View More
                    </a>
                </div>
            </div>

            <!-- Course 5 -->
            <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">
                <div class="h-52 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    <i class="fas fa-mobile-alt text-7xl relative z-10"></i>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Mobile App Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Create iOS and Android applications using React Native and Flutter frameworks.</p>
                    <div class="mb-6 flex flex-wrap gap-2">
                        <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month Plan</span>
                        <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month Plan</span>
                    </div>
                    <a href="{{ route('course.description', 'mobile-development') }}" class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                        View More
                    </a>
                </div>
            </div>

            <!-- Course 6 -->
            <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden animate-on-scroll">
                <div class="h-52 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    <i class="fas fa-shield-alt text-7xl relative z-10"></i>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Cybersecurity</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Learn network security, ethical hacking, penetration testing and security protocols.</p>
                    <div class="mb-6 flex flex-wrap gap-2">
                        <span class="course-tag text-sm bg-blue-100 text-blue-800 py-2 px-3 rounded-full">3 Month Plan</span>
                        <span class="course-tag text-sm bg-green-100 text-green-800 py-2 px-3 rounded-full">6 Month Plan</span>
                    </div>
                    <a href="{{ route('course.description', 'cybersecurity') }}" class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 font-semibold btn-modern">
                        View More
                    </a>
                </div>
            </div> --}}
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-20 stats-section text-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <!-- Stat 1 -->
                <div class="stat-card animate-on-scroll">
                    <div class="stat-number">500+</div>
                    <p class="text-blue-100 text-lg font-medium">Students Trained</p>
                </div>

                <!-- Stat 2 -->
                <div class="stat-card animate-on-scroll">
                    <div class="stat-number">98%</div>
                    <p class="text-blue-100 text-lg font-medium">Completion Rate</p>
                </div>

                <!-- Stat 3 -->
                <div class="stat-card animate-on-scroll">
                    <div class="stat-number">85%</div>
                    <p class="text-blue-100 text-lg font-medium">Placement Success</p>
                </div>

                <!-- Stat 4 -->
                <div class="stat-card animate-on-scroll">
                    <div class="stat-number">10+</div>
                    <p class="text-blue-100 text-lg font-medium">Corporate Partners</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Logo Slider -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 section-heading">Our Corporate Partners</h2>
                <p class="text-lg text-gray-600">Trusted by leading companies worldwide</p>
            </div>

            <div class="logo-slider">
                <div class="logo-slide">
                    <!-- Add company logos here for seamless looping -->
                    <img src="https://placehold.co/160x80.png?text=Company+1" alt="Company 1">
                    <img src="https://placehold.co/160x80.png?text=Company+2" alt="Company 2">
                    <img src="https://placehold.co/160x80.png?text=Company+3" alt="Company 3">
                    <img src="https://placehold.co/160x80.png?text=Company+4" alt="Company 4">
                    <img src="https://placehold.co/160x80.png?text=Company+5" alt="Company 5">
                    <img src="https://placehold.co/160x80.png?text=Company+6" alt="Company 6">
                    <img src="https://placehold.co/160x80.png?text=Company+7" alt="Company 7">
                    <img src="https://placehold.co/160x80.png?text=Company+8" alt="Company 8">
                </div>

                <div class="logo-slide">
                    <!-- Duplicate for seamless looping -->
                    <img src="https://placehold.co/160x80.png?text=Company+1" alt="Company 1">
                    <img src="https://placehold.co/160x80.png?text=Company+2" alt="Company 2">
                    <img src="https://placehold.co/160x80.png?text=Company+3" alt="Company 3">
                    <img src="https://placehold.co/160x80.png?text=Company+4" alt="Company 4">
                    <img src="https://placehold.co/160x80.png?text=Company+5" alt="Company 5">
                    <img src="https://placehold.co/160x80.png?text=Company+6" alt="Company 6">
                    <img src="https://placehold.co/160x80.png?text=Company+7" alt="Company 7">
                    <img src="https://placehold.co/160x80.png?text=Company+8" alt="Company 8">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @include('home.includes.testimonials')

    <!-- CTA Section -->
    <section class="py-20 cta-section text-white relative overflow-hidden">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Start Your Professional Journey?</h2>
                <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-3xl mx-auto leading-relaxed">Join our internship
                    programs today and take the first step towards a successful career in technology.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#courses"
                        class="inline-block px-10 py-4 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-xl hover:from-secondary hover:to-primary transition-all duration-300 btn-modern btn-pulse">
                        Explore Programs
                    </a>
                    <a href="{{ route('register') }}"
                        class="inline-block px-10 py-4 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-all duration-300 btn-modern">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    @include('home.includes.contact_us')
@endsection
