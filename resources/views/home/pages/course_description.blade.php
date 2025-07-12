<?php
use Illuminate\Support\Facades\Crypt;
?>
@extends('home.partials.app')
@section('content')
    <!-- Promo Banner -->
    @if (
        (isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month'])) &&
            isset($currentCourse['offer_end_at']) &&
            strtotime($currentCourse['offer_end_at']) > time())
        <div class="bg-gradient-to-r from-yellow-500 via-red-500 to-pink-500 text-white py-2 px-4 text-center relative">
            <div class="container mx-auto">
                <div class="flex items-center justify-center">
                    <span class="animate-pulse mr-2">🔥</span>
                    <p class="font-bold">
                        SPECIAL OFFER: Up to
                        @php
                            $discounts = [];
                            if (isset($currentCourse['original_price_3_month'])) {
                                $original = (float) str_replace(
                                    ['₹', ','],
                                    '',
                                    $currentCourse['original_price_3_month'],
                                );
                                $current = (float) str_replace(['₹', ','], '', $currentCourse['price_3_month']);
                                $discounts[] = round((($original - $current) / $original) * 100);
                            }
                            if (isset($currentCourse['original_price_6_month'])) {
                                $original = (float) str_replace(
                                    ['₹', ','],
                                    '',
                                    $currentCourse['original_price_6_month'],
                                );
                                $current = (float) str_replace(['₹', ','], '', $currentCourse['price_6_month']);
                                $discounts[] = round((($original - $current) / $original) * 100);
                            }
                            echo max($discounts);
                        @endphp% OFF! Limited Time Discount on {{ $currentCourse['title'] }} Program
                    </p>
                    <span class="animate-pulse ml-2">🔥</span>
                </div>
                <div class="text-xs mt-1">
                    Offer ends on {{ date('F j, Y', strtotime($currentCourse['offer_end_at'])) }}! Don't miss this
                    opportunity to kickstart your career.
                </div>
            </div>
        </div>
    @endif

    <!-- Course Header -->
    <section class="relative py-20 bg-[{{ $currentCourse['bg_color'] }}] text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="text-center md:text-left md:w-2/3">
                    <h1 class="text-4xl font-bold mb-4">{{ $currentCourse['title'] }}</h1>
                    <p class="text-xl mb-6">{{ $currentCourse['short_desc'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-6 justify-center md:justify-start">
                        @foreach (array_slice($currentCourse['skills'], 0, 5) as $skill)
                            <span class="px-3 py-1 bg-white/20 rounded-full text-sm">{{ $skill }}</span>
                        @endforeach
                        @if (count($currentCourse['skills']) > 5)
                            <span
                                class="px-3 py-1 bg-white/20 rounded-full text-sm">+{{ count($currentCourse['skills']) - 5 }}
                                more</span>
                        @endif
                    </div>
                </div>
                <div class="mt-8 md:mt-0 md:w-1/3 flex justify-center">
                    <div class="text-9xl">
                        <i class="{{ $currentCourse['icon'] }}"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Details -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-bold mb-6">Course Overview</h2>
                    <p class="text-gray-700 mb-8">{{ $currentCourse['long_desc'] }}</p>

                    <div class="mb-12">
                        <div class="text-center mb-8">
                            <h3 class="text-3xl font-bold text-gray-800 mb-2">What You'll Learn</h3>
                            <p class="text-gray-600 max-w-2xl mx-auto">Master essential skills through comprehensive learning modules designed to transform you into a skilled professional.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($currentCourse['what_you_learn'] as $index => $learn)
                                <div class="group relative bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
                                    <div class="flex items-start space-x-4">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-gray-600 leading-relaxed">{{ $learn }}</p>
                                        </div>
                                    </div>
                                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-50 to-purple-50 rounded-bl-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- {{ dd($currentCourse['projects']) }} --}}

                    <div class="mb-12">
                        <div class="text-center mb-8">
                            <h3 class="text-3xl font-bold text-gray-800 mb-2">Projects You'll Work On</h3>
                            <p class="text-gray-600 max-w-2xl mx-auto">Build real-world applications that showcase your skills and enhance your portfolio with industry-relevant projects.</p>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            @foreach ($currentCourse['projects'] as $index => $project)
                                <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-500">
                                    <!-- Project Header -->
                                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 relative overflow-hidden">
                                        <div class="flex items-center justify-between relative z-10">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                                    <span class="text-xl font-bold text-white">{{ $index + 1 }}</span>
                                                </div>
                                                <div>
                                                    <h4 class="text-xl font-bold text-white">{{ $project['name'] }}</h4>
                                                    <p class="text-blue-100 text-sm">Project {{ $index + 1 }}</p>
                                                </div>
                                            </div>
                                            <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- Decorative Elements -->
                                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-8 translate-x-8"></div>
                                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-8 -translate-x-8"></div>
                                    </div>

                                    <!-- Project Content -->
                                    <div class="p-6">
                                        <p class="text-gray-600 leading-relaxed">{{ $project['description'] }}</p>
                                    </div>

                                    <!-- Hover Effect Overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Additional Info -->
                        <div class="mt-8 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                            <div class="flex items-center justify-center space-x-2 text-blue-700 mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-semibold">Portfolio Ready</span>
                            </div>
                            <p class="text-center text-gray-600 text-sm">All projects include source code, documentation, and deployment guides that you can showcase to employers.</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Program Structure</h3>

                        <!-- Tab Navigation -->
                        <div class="mb-6">
                            <div class="flex border-b border-gray-200">
                                <button id="tab-3-month" class="program-tab px-6 py-3 text-lg font-medium text-blue-600 border-b-2 border-blue-600 bg-blue-50">
                                    3 Month Program
                                </button>
                                <button id="tab-6-month" class="program-tab px-6 py-3 text-lg font-medium text-gray-500 hover:text-gray-700">
                                    6 Month Program
                                </button>
                            </div>
                        </div>

                        <!-- 3 Month Program Content -->
                        <div id="content-3-month" class="program-content">
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <!-- Week 1-2 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Weeks 1-2: Fundamentals</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Introduction to core concepts and setting up your development environment.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Environment setup and tools installation</li>
                                            <li>Introduction to programming fundamentals</li>
                                            <li>Basic syntax and concepts</li>
                                            <li>First simple project</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Week 3-4 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Weeks 3-4: Core Concepts</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Diving deeper into the core concepts and building your knowledge base.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Advanced syntax and patterns</li>
                                            <li>Working with data structures</li>
                                            <li>Understanding key frameworks</li>
                                            <li>Small practice projects</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Week 5-8 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Weeks 5-8: Practical Applications</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Applying your knowledge to real-world scenarios and building larger projects.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Working with APIs and integrations</li>
                                            <li>Best practices and design patterns</li>
                                            <li>Mid-term project development</li>
                                            <li>Code reviews and feedback</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Weeks 9-12 -->
                                <div>
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Weeks 9-12: Advanced Topics & Final Project</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Mastering advanced topics and completing your final capstone project.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Advanced frameworks and libraries</li>
                                            <li>Performance optimization</li>
                                            <li>Final project development</li>
                                            <li>Deployment and portfolio building</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6 Month Program Content -->
                        <div id="content-6-month" class="program-content hidden">
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <!-- Month 1 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 1: Foundation & Fundamentals</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Comprehensive introduction and solid foundation building.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Detailed environment setup and configuration</li>
                                            <li>In-depth programming fundamentals</li>
                                            <li>Advanced syntax and best practices</li>
                                            <li>Multiple foundational projects</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Month 2 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 2: Core Technologies & Frameworks</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Deep dive into core technologies and popular frameworks.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Advanced data structures and algorithms</li>
                                            <li>Framework mastery and best practices</li>
                                            <li>Database integration and management</li>
                                            <li>Intermediate project development</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Month 3 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 3: Advanced Applications & APIs</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Building complex applications with third-party integrations.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>RESTful API development and consumption</li>
                                            <li>Authentication and authorization systems</li>
                                            <li>Real-time features and websockets</li>
                                            <li>Complex project architecture</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Month 4 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 4: Testing & Quality Assurance</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Ensuring code quality through comprehensive testing strategies.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Unit testing and integration testing</li>
                                            <li>Test-driven development (TDD)</li>
                                            <li>Code review processes and tools</li>
                                            <li>Quality assurance best practices</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Month 5 -->
                                <div class="border-b border-gray-200 last:border-b-0">
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 5: Performance & Deployment</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Optimizing applications and preparing for production deployment.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Performance optimization techniques</li>
                                            <li>Caching strategies and implementation</li>
                                            <li>CI/CD pipeline setup</li>
                                            <li>Cloud deployment and scaling</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Month 6 -->
                                <div>
                                    <div class="bg-gray-50 p-4">
                                        <h4 class="text-lg font-medium text-gray-800">Month 6: Capstone Project & Career Prep</h4>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 mb-2">Final comprehensive project and career preparation.</p>
                                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                            <li>Full-stack capstone project development</li>
                                            <li>Portfolio building and presentation</li>
                                            <li>Interview preparation and coding challenges</li>
                                            <li>Job application strategies and networking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 sticky top-24">
                        <h3 class="text-2xl font-bold mb-6">Program Options</h3>

                        @if (isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
                            @if (isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                <div class="mb-4 bg-yellow-50 border border-yellow-200 p-3 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="text-yellow-600 mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-700">Limited Time Offer</p>
                                            <p class="text-xs text-gray-600">Offer ends on
                                                {{ date('F j', strtotime($currentCourse['offer_end_at'])) }} (<span
                                                    id="sidebar-countdown" class="font-bold text-red-600"></span> left)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="mt-6 grid grid-cols-3 gap-3">
                                <div class="text-center">
                                    <div
                                        class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs font-medium text-gray-700">Quality Guaranteed</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs font-medium text-gray-700">Best Price Promise</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="mx-auto w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs font-medium text-gray-700">Limited Time Offer</p>
                                </div>
                            </div>
                        @endif

                        <!-- 3 Month Plan -->
                        <div
                            class="border border-gray-200 rounded-lg bg-white p-6 mb-6 hover:shadow-md transition-shadow relative">
                            @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                <div
                                    class="absolute -top-4 -right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform rotate-12">
                                    SALE!</div>
                            @endif
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-xl font-semibold">3 Month Plan</h4>
                                <span class="bg-blue-100 text-blue-800 py-1 px-3 rounded-full text-sm">Basic</span>
                            </div>
                            <div class="mb-4">
                                @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                    <div class="flex items-center mb-1">
                                        <span
                                            class="text-sm text-gray-500 line-through mr-2">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                        @php
                                            $original = (float) str_replace(
                                                ['₹', ','],
                                                '',
                                                $currentCourse['original_price_3_month'],
                                            );
                                            $current = (float) str_replace(
                                                ['₹', ','],
                                                '',
                                                $currentCourse['price_3_month'],
                                            );
                                            $discount = round((($original - $current) / $original) * 100);
                                            $savings = $original - $current;
                                        @endphp
                                        <span
                                            class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $discount }}%
                                            OFF</span>
                                    </div>
                                    <div class="text-green-600 text-sm font-medium mb-1">Save
                                        ₹{{ number_format($savings, 2) }}</div>
                                @endif
                                <div class="flex items-baseline">
                                    @if (isset($currentCourse['original_price_3_month']) && (!isset($currentCourse['offer_end_at']) || strtotime($currentCourse['offer_end_at']) <= time()))
                                        <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                    @else
                                        <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['price_3_month'] }}</span>
                                    @endif
                                    <span class="text-gray-600 ml-1">/one-time</span>
                                    @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                        <span class="ml-2 text-sm text-green-600 font-medium">Limited Time Offer!</span>
                                    @endif
                                </div>
                            </div>
                            <ul class="mb-6">
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">12 weeks of structured learning</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Core concepts and fundamentals</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">2 practical projects</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Weekly assignments and feedback</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Certificate of completion</span>
                                </li>
                            </ul>
                            <button
                                class="razorpay-buy-btn block w-full py-4 px-4 bg-primary text-white text-center rounded-md hover:bg-secondary transition-colors font-bold"
                                data-course="{{ $currentCourse['title'] }}" data-token="{{ $currentCourse['id'] }}"
                                data-duration="{{ Crypt::encrypt('3') }}">
                                @if (isset($currentCourse['original_price_3_month']))
                                @endif
                                Buy Now
                            </button>

                            @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                <div class="mt-3 bg-gray-50 p-2 rounded text-sm">
                                    <div class="flex items-start">
                                        <div class="text-yellow-500 mr-1">★★★★★</div>
                                        <div class="text-gray-600 italic">"Amazing value for money! I couldn't believe the
                                            quality at this price." – Rahul S.</div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- 6 Month Plan -->
                        <div class="border-2 border-primary rounded-lg bg-white p-6 relative">
                            <div class="absolute top-0 right-0 bg-primary text-white py-1 px-4 text-sm rounded-bl-lg">
                                RECOMMENDED
                            </div>
                            @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                <div
                                    class="absolute -top-4 -left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform -rotate-12">
                                    BEST DEAL!</div>
                            @endif
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-xl font-semibold">6 Month Plan</h4>
                                <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-sm">Advanced</span>
                            </div>
                            <div class="mb-4">
                                @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                    <div class="flex items-center mb-1">
                                        <span
                                            class="text-sm text-gray-500 line-through mr-2">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                        @php
                                            $original = (float) str_replace(
                                                ['₹', ','],
                                                '',
                                                $currentCourse['original_price_6_month'],
                                            );
                                            $current = (float) str_replace(
                                                ['₹', ','],
                                                '',
                                                $currentCourse['price_6_month'],
                                            );
                                            $discount = round((($original - $current) / $original) * 100);
                                            $savings = $original - $current;
                                        @endphp
                                        <span
                                            class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $discount }}%
                                            OFF</span>
                                    </div>
                                    <div class="text-green-600 text-sm font-medium mb-1">Save
                                        ₹{{ number_format($savings, 2) }}</div>
                                @endif
                                <div class="flex items-baseline">
                                    @if (isset($currentCourse['original_price_6_month']) && (!isset($currentCourse['offer_end_at']) || strtotime($currentCourse['offer_end_at']) <= time()))
                                        <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                    @else
                                        <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['price_6_month'] }}</span>
                                    @endif
                                    <span class="text-gray-600 ml-1">/one-time</span>
                                    @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                        <span class="ml-2 text-sm text-green-600 font-medium">Best Value!</span>
                                    @endif
                                </div>
                            </div>
                            <ul class="mb-6">
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">24 weeks of comprehensive learning</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Advanced topics and techniques</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">4 comprehensive projects</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">1-on-1 mentorship sessions</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Priority code reviews</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Premium certificate of completion</span>
                                </li>
                                <li class="flex items-start mb-2">
                                    <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-700">Job referral assistance</span>
                                </li>
                            </ul>
                            <button
                                class="razorpay-buy-btn block w-full py-4 px-4 bg-primary text-white text-center rounded-md hover:bg-secondary transition-colors font-bold"
                                data-course="{{ $currentCourse['title'] }}" data-token="{{ $currentCourse['id'] }}"
                                data-duration="{{ Crypt::encrypt('6') }}">
                                @if (isset($currentCourse['original_price_6_month']))
                                @endif
                                Buy Now
                            </button>

                            @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                <div class="mt-3 bg-gray-50 p-2 rounded text-sm">
                                    <div class="flex items-start">
                                        <div class="text-yellow-500 mr-1">★★★★★</div>
                                        <div class="text-gray-600 italic">"Best investment I made for my career! The
                                            6-month plan is incredible value." – Priya M.</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Frequently Asked Questions</h2>
                <p class="text-gray-600">Everything you need to know about our internship program</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="faq-accordion bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Question 1 -->
                    <div class="faq-item active border-b border-gray-200 last:border-b-0">
                        <button
                            class="faq-question flex items-center justify-between w-full p-5 text-left focus:outline-none">
                            <span class="text-lg font-medium">What are the prerequisites for this internship?</span>
                            <svg class="w-5 h-5 transform transition-transform rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer px-5 pb-5">
                            <p class="text-gray-600">While there are no strict prerequisites, basic computer literacy and
                                familiarity with the internet is required. For more technical courses like Web Development
                                or Python, some prior exposure to programming concepts is helpful but not mandatory.</p>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item border-b border-gray-200 last:border-b-0">
                        <button
                            class="faq-question flex items-center justify-between w-full p-5 text-left focus:outline-none">
                            <span class="text-lg font-medium">What is the time commitment required?</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-5 pb-5">
                            <p class="text-gray-600">We recommend dedicating at least 10-15 hours per week to get the most
                                out of the internship. This includes time for watching video lessons, completing
                                assignments, working on projects, and participating in discussions.</p>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item border-b border-gray-200 last:border-b-0">
                        <button
                            class="faq-question flex items-center justify-between w-full p-5 text-left focus:outline-none">
                            <span class="text-lg font-medium">Is this an online or in-person internship?</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-5 pb-5">
                            <p class="text-gray-600">This is a fully online internship program. All materials, lessons,
                                projects, and mentorship sessions are conducted virtually, allowing you to learn from
                                anywhere at your own pace.</p>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item border-b border-gray-200 last:border-b-0">
                        <button
                            class="faq-question flex items-center justify-between w-full p-5 text-left focus:outline-none">
                            <span class="text-lg font-medium">Will I receive a certificate after completion?</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-5 pb-5">
                            <p class="text-gray-600">Yes, upon successful completion of the internship program, you will
                                receive a certificate that validates your skills and can be added to your resume and
                                LinkedIn profile. The 6-month plan includes a premium certificate with additional
                                endorsements.</p>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="faq-item">
                        <button
                            class="faq-question flex items-center justify-between w-full p-5 text-left focus:outline-none">
                            <span class="text-lg font-medium">Do you provide job placement assistance?</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-5 pb-5">
                            <p class="text-gray-600">The 6-month internship plan includes job referral assistance where we
                                connect top-performing interns with our corporate partners. While we cannot guarantee job
                                placement, many of our graduates have successfully secured positions through our network.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
        <!-- Value Comparison Section -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Why This Offer Is Incredible Value</h2>
                    <p class="text-gray-600">Compare what you get with the cost of alternatives</p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="py-3 px-4 text-left text-gray-700">Feature</th>
                                    <th class="py-3 px-4 text-center text-gray-700">Our {{ $currentCourse['title'] }}
                                        Internship</th>
                                    <th class="py-3 px-4 text-center text-gray-700">Typical Online Course</th>
                                    <th class="py-3 px-4 text-center text-gray-700">Offline Training Institute</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t border-gray-200">
                                    <td class="py-3 px-4 text-gray-800">Duration</td>
                                    <td class="py-3 px-4 text-center text-gray-800">3-6 months</td>
                                    <td class="py-3 px-4 text-center text-gray-800">1-3 months</td>
                                    <td class="py-3 px-4 text-center text-gray-800">1-6 months</td>
                                </tr>
                                <tr class="border-t border-gray-200 bg-gray-50">
                                    <td class="py-3 px-4 text-gray-800">Hands-on Projects</td>
                                    <td class="py-3 px-4 text-center text-green-600 font-bold">Yes (4+ real-world projects)
                                    </td>
                                    <td class="py-3 px-4 text-center text-gray-800">Limited (1-2 basic projects)</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Yes (2-3 projects)</td>
                                </tr>
                                <tr class="border-t border-gray-200">
                                    <td class="py-3 px-4 text-gray-800">Certificate</td>
                                    <td class="py-3 px-4 text-center text-green-600 font-bold">Yes (Industry recognized)
                                    </td>
                                    <td class="py-3 px-4 text-center text-gray-800">Sometimes</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Yes</td>
                                </tr>
                                <tr class="border-t border-gray-200 bg-gray-50">
                                    <td class="py-3 px-4 text-gray-800">Job Assistance</td>
                                    <td class="py-3 px-4 text-center text-green-600 font-bold">Yes</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Rarely</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Sometimes</td>
                                </tr>
                                <tr class="border-t border-gray-200">
                                    <td class="py-3 px-4 text-gray-800 font-bold">Cost</td>
                                    <td class="py-3 px-4 text-center">
                                        <div class="mb-1">
                                            <span class="text-sm">3-Month Plan:</span>
                                            @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                                <span
                                                    class="text-red-500 line-through text-sm">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                                            @elseif (isset($currentCourse['original_price_3_month']))
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                            @else
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                                            @endif
                                        </div>
                                        <div>
                                            <span class="text-sm">6-Month Plan:</span>
                                            @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                                                <span
                                                    class="text-red-500 line-through text-sm">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                                            @elseif (isset($currentCourse['original_price_6_month']))
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                            @else
                                                <span
                                                    class="text-green-600 font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-center text-gray-800">₹1,000 - ₹5,000</td>
                                    <td class="py-3 px-4 text-center text-gray-800">₹10,000 - ₹25,000</td>
                                </tr>
                                <tr class="border-t border-gray-200 bg-yellow-50">
                                    <td class="py-3 px-4 text-gray-800 font-bold">Value for Money</td>
                                    <td class="py-3 px-4 text-center text-green-600 font-bold">Excellent</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Average</td>
                                    <td class="py-3 px-4 text-center text-gray-800">Good</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Testimonials -->
    @include('home.includes.testimonials')

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Start Your {{ $currentCourse['title'] }} Journey Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Gain practical skills, build your portfolio, and
                advance your career with our professional internship program.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button
                    class="cta-buy-btn inline-block px-8 py-4 bg-white text-primary font-medium rounded-md hover:bg-gray-100 transition-colors relative overflow-hidden group"
                    data-course="{{ $currentCourse['title'] }}" data-token="{{ $currentCourse['id'] }}"
                    data-duration="{{ Crypt::encrypt('3') }}">
                    @if (isset($currentCourse['original_price_3_month']))
                        @php
                            $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_3_month']);
                            $current = (float) str_replace(['₹', ','], '', $currentCourse['price_3_month']);
                            $discount = round((($original - $current) / $original) * 100);
                        @endphp
                    @endif
                    <span>
                        Buy 3-Month Plan
                        @if (isset($currentCourse['original_price_3_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                            <span class="block mt-1">
                                <span
                                    class="text-sm text-gray-500 line-through">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                <span class="text-primary font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                            </span>
                        @elseif (isset($currentCourse['original_price_3_month']))
                            <span class="block mt-1 text-primary font-bold">₹{{ $currentCourse['original_price_3_month'] }}</span>
                        @else
                            <span class="block mt-1 text-primary font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                        @endif
                    </span>
                </button>
                <button
                    class="cta-buy-btn inline-block px-8 py-4 bg-secondary text-white font-medium rounded-md hover:bg-blue-800 transition-colors relative overflow-hidden shadow-lg"
                    data-course="{{ $currentCourse['title'] }}" data-token="{{ $currentCourse['id'] }}"
                    data-duration="{{ Crypt::encrypt('6') }}">
                    @if (isset($currentCourse['original_price_6_month']))
                        @php
                            $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_6_month']);
                            $current = (float) str_replace(['₹', ','], '', $currentCourse['price_6_month']);
                            $discount = round((($original - $current) / $original) * 100);
                        @endphp
                    @endif
                    <span>
                        Buy 6-Month Plan
                        @if (isset($currentCourse['original_price_6_month']) && isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                            <span class="block mt-1">
                                <span
                                    class="text-sm text-gray-200 line-through">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                <span class="text-white font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                            </span>
                        @elseif (isset($currentCourse['original_price_6_month']))
                            <span class="block mt-1 text-white font-bold">₹{{ $currentCourse['original_price_6_month'] }}</span>
                        @else
                            <span class="block mt-1 text-white font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                        @endif
                    </span>
                </button>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Set up CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });


        function handleRazorpayPurchase(button, course, duration, token) {
            const originalText = button.html(); // Save current button text
            button.data('original-text', originalText); // Store it in data attribute

            // Show loading state
            button.prop('disabled', true).html('<i class="fas fa-spinner fa-spin mr-2"></i> Processing...');

            $.ajax({
                url: "{{ route('payment.create-order') }}",
                method: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    course: course,
                    duration: duration,
                    token: token
                },
                success: function(response) {
                    const options = {
                        key: response.key_id,
                        amount: response.amount,
                        currency: response.currency || 'INR',
                        name: "CodeSprintX",
                        description: `${response.course} - ${response.duration} Month Internship Program`,
                        image: "{{ asset('assets/images/logos/logo_color.webp') }}",
                        order_id: response.order_id,
                        handler: function(paymentResponse) {

                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = "{{ route('payment.verify') }}";

                            const fields = {
                                _token: "{{ csrf_token() }}",
                                razorpay_payment_id: paymentResponse
                                    .razorpay_payment_id,
                                razorpay_order_id: paymentResponse.razorpay_order_id,
                                razorpay_signature: paymentResponse.razorpay_signature
                            };

                            for (const name in fields) {
                                const input = document.createElement('input');
                                input.type = 'hidden';
                                input.name = name;
                                input.value = fields[name];
                                form.appendChild(input);
                            }

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
                            duration: `${duration} months`
                        },
                        theme: {
                            color: "#3B82F6"
                        },
                        modal: {
                            ondismiss: function() {
                                const original = button.data('original-text');
                                button.prop('disabled', false).html(original);
                            }
                        }
                    };

                    initializeRazorpay(options)
                        .then(function() {
                            const original = button.data('original-text');
                            button.prop('disabled', false).html(original);
                        })
                        .catch(function(error) {
                            alert('There was an error with the payment gateway: ' + error
                                .message);
                            const original = button.data('original-text');
                            button.prop('disabled', false).html(original);
                        });
                },
                error: function(xhr, status, error) {
                    let errorMessage =
                        'An error occurred while processing your payment. Please try again.';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.error) {
                            errorMessage = response.error;
                        }
                    } catch (e) {}

                    alert(errorMessage);

                    const original = button.data('original-text');
                    button.prop('disabled', false).html(original);
                }
            });
        }

        // Make sure Razorpay is defined globally
        if (typeof Razorpay === 'undefined') {
            console.log('Razorpay is not defined in scripts section, loading script...');

            // Load Razorpay script
            (function loadRazorpay() {
                var script = document.createElement('script');
                script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                script.async = true;
                script.onload = function() {
                    console.log('Razorpay script loaded successfully in scripts section');
                };
                script.onerror = function() {
                    console.error('Failed to load Razorpay script in scripts section');
                };
                document.head.appendChild(script);
            })();
        }

        // Sale countdown timer
        document.addEventListener('DOMContentLoaded', function() {
            @if (isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
                @if (isset($currentCourse['offer_end_at']) && strtotime($currentCourse['offer_end_at']) > time())
                    // Use the offer end date from course data
                    const countDownDate = new Date("{{ $currentCourse['offer_end_at'] }}").getTime();

                    // Add countdown timer to promo banner if it doesn't exist yet
                    const promoDiv = document.createElement('div');
                    promoDiv.className = 'text-center font-bold text-lg mt-1';
                    promoDiv.innerHTML = 'Offer ends in: <span id="countdown" class="text-yellow-300"></span>';

                    // Check if banner exists and doesn't already have a countdown
                    const promoBanner = document.querySelector('.bg-gradient-to-r.from-yellow-500');
                    if (promoBanner && !document.getElementById('countdown')) {
                        promoBanner.appendChild(promoDiv);
                    }

                    // Update the countdown every 1 second
                    const countdownTimer = setInterval(function() {
                        // Get current date and time
                        const now = new Date().getTime();

                        // Find the distance between now and the countdown date
                        const distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Format the countdown display
                        let countdownText = "";
                        if (days > 0) {
                            countdownText += days + "d ";
                        }
                        countdownText += hours + "h " + minutes + "m " + seconds + "s";

                        // Display the result in the element with id="countdown"
                        const countdownEl = document.getElementById("countdown");
                        if (countdownEl) {
                            countdownEl.innerHTML = countdownText;
                        }

                        // Also update sidebar countdown if it exists
                        const sidebarCountdownEl = document.getElementById("sidebar-countdown");
                        if (sidebarCountdownEl) {
                            sidebarCountdownEl.innerHTML = countdownText;
                        }

                        // If the countdown is finished, clear the interval and reload page
                        if (distance < 0) {
                            clearInterval(countdownTimer);
                            location.reload();
                        }
                    }, 1000);
                @endif
            @endif


            // Handle direct Razorpay buy button
            $('.razorpay-buy-btn').on('click', function(e) {
                e.preventDefault();

                const button = $(this);
                const course = button.data('course');
                const duration = button.data('duration');
                const token = button.data('token');

                handleRazorpayPurchase(button, course, duration, token);
            });

            // Handle CTA buttons that trigger related buy buttons
            $('.cta-buy-btn').on('click', function(e) {
                e.preventDefault();

                const course = $(this).data('course');
                const duration = $(this).data('duration');
                const token = $(this).data('token');

                const button = $(this);

                handleRazorpayPurchase(button, course, duration, token);

            });

            // Program Structure Tab Functionality
            $('.program-tab').on('click', function(e) {
                e.preventDefault();

                // Remove active states from all tabs
                $('.program-tab').removeClass('text-blue-600 border-blue-600 bg-blue-50').addClass('text-gray-500');
                $('.program-tab').removeClass('border-b-2');

                // Hide all content
                $('.program-content').addClass('hidden');

                // Add active state to clicked tab
                $(this).removeClass('text-gray-500').addClass('text-blue-600 border-blue-600 bg-blue-50 border-b-2');

                // Show corresponding content
                const tabId = $(this).attr('id');
                const contentId = tabId.replace('tab-', 'content-');
                $('#' + contentId).removeClass('hidden');
            });

        });
    </script>
@endsection
