@extends('home.partials.app')
@section('content')
    <!-- Promo Banner -->
    @if((isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month'])) && isset($currentCourse['offer_end_at']))
    <div class="bg-gradient-to-r from-yellow-500 via-red-500 to-pink-500 text-white py-2 px-4 text-center relative">
        <div class="container mx-auto">
            <div class="flex items-center justify-center">
                <span class="animate-pulse mr-2">🔥</span>
                <p class="font-bold">
                    SPECIAL OFFER: Up to
                    @php
                        $discounts = [];
                        if(isset($currentCourse['original_price_3_month'])) {
                            $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_3_month']);
                            $current = (float) str_replace(['₹', ','], '', $currentCourse['price_3_month']);
                            $discounts[] = round(($original - $current) / $original * 100);
                        }
                        if(isset($currentCourse['original_price_6_month'])) {
                            $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_6_month']);
                            $current = (float) str_replace(['₹', ','], '', $currentCourse['price_6_month']);
                            $discounts[] = round(($original - $current) / $original * 100);
                        }
                        echo max($discounts);
                    @endphp% OFF! Limited Time Discount on {{ $currentCourse['title'] }} Program
                </p>
                <span class="animate-pulse ml-2">🔥</span>
            </div>
            <div class="text-xs mt-1">
                Offer ends on {{ date('F j, Y', strtotime($currentCourse['offer_end_at'])) }}! Don't miss this opportunity to kickstart your career.
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
                        <h3 class="text-2xl font-semibold mb-4">What You'll Learn</h3>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach ($currentCourse['what_you_learn'] as $learn)
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    <span class="text-gray-700">{{ $learn }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- {{ dd($currentCourse['projects']) }} --}}

                    <div class="mb-12">
                        <h3 class="text-2xl font-semibold mb-4">Projects You'll Work On</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($currentCourse['projects'] as $index => $project)
                                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                            {{ $index + 1 }}
                                        </div>
                                        <h4 class="text-lg font-medium">{{ $project['name'] }}</h4>
                                    </div>
                                    <p class="text-gray-600 text-sm ml-11">{{ $project['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Program Structure</h3>
                        <div class="faq-accordion-category border border-gray-200 rounded-lg overflow-hidden">
                            <!-- Week 1-2 -->
                            <div class="faq-item border-b border-gray-200 last:border-b-0">
                                <button
                                    class="faq-question flex items-center justify-between w-full p-4 text-left focus:outline-none">
                                    <span class="text-lg font-medium">Weeks 1-2: Fundamentals</span>
                                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div class="faq-answer hidden px-4 pb-4">
                                    <p class="text-gray-700 mb-2">Introduction to core concepts and setting up your
                                        development environment.</p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm">
                                        <li>Environment setup and tools installation</li>
                                        <li>Introduction to programming fundamentals</li>
                                        <li>Basic syntax and concepts</li>
                                        <li>First simple project</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Week 3-4 -->
                            <div class="faq-item border-b border-gray-200 last:border-b-0">
                                <button
                                    class="faq-question flex items-center justify-between w-full p-4 text-left focus:outline-none">
                                    <span class="text-lg font-medium">Weeks 3-4: Core Concepts</span>
                                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div class="faq-answer hidden px-4 pb-4">
                                    <p class="text-gray-700 mb-2">Diving deeper into the core concepts and building your
                                        knowledge base.</p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm">
                                        <li>Advanced syntax and patterns</li>
                                        <li>Working with data structures</li>
                                        <li>Understanding key frameworks</li>
                                        <li>Small practice projects</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Week 5-8 -->
                            <div class="faq-item border-b border-gray-200 last:border-b-0">
                                <button
                                    class="faq-question flex items-center justify-between w-full p-4 text-left focus:outline-none">
                                    <span class="text-lg font-medium">Weeks 5-8: Practical Applications</span>
                                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div class="faq-answer hidden px-4 pb-4">
                                    <p class="text-gray-700 mb-2">Applying your knowledge to real-world scenarios and
                                        building larger projects.</p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm">
                                        <li>Working with APIs and integrations</li>
                                        <li>Best practices and design patterns</li>
                                        <li>Mid-term project development</li>
                                        <li>Code reviews and feedback</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Weeks 9-12 -->
                            <div class="faq-item">
                                <button
                                    class="faq-question flex items-center justify-between w-full p-4 text-left focus:outline-none">
                                    <span class="text-lg font-medium">Weeks 9-12: Advanced Topics & Final Project</span>
                                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div class="faq-answer hidden px-4 pb-4">
                                    <p class="text-gray-700 mb-2">Mastering advanced topics and completing your final
                                        capstone project.</p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm">
                                        <li>Advanced frameworks and libraries</li>
                                        <li>Performance optimization</li>
                                        <li>Final project development</li>
                                        <li>Deployment and portfolio building</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 sticky top-24">
                        <h3 class="text-2xl font-bold mb-6">Program Options</h3>

                        @if(isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
                        @if(isset($currentCourse['offer_end_at']))
                        <div class="mb-4 bg-yellow-50 border border-yellow-200 p-3 rounded-lg">
                            <div class="flex items-center">
                                <div class="text-yellow-600 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-700">Limited Time Offer</p>
                                    <p class="text-xs text-gray-600">Offer ends on {{ date('F j', strtotime($currentCourse['offer_end_at'])) }} (<span id="sidebar-countdown" class="font-bold text-red-600"></span> left)</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="mt-6 grid grid-cols-3 gap-3">
                            <div class="text-center">
                                <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs font-medium text-gray-700">Quality Guaranteed</p>
                            </div>
                            <div class="text-center">
                                <div class="mx-auto w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs font-medium text-gray-700">Best Price Promise</p>
                            </div>
                            <div class="text-center">
                                <div class="mx-auto w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs font-medium text-gray-700">Limited Time Offer</p>
                            </div>
                        </div>
                        @endif

                        <!-- 3 Month Plan -->
                        <div class="border border-gray-200 rounded-lg bg-white p-6 mb-6 hover:shadow-md transition-shadow relative">
                            @if(isset($currentCourse['original_price_3_month']))
                            <div class="absolute -top-4 -right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform rotate-12">SALE!</div>
                            @endif
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-xl font-semibold">3 Month Plan</h4>
                                <span class="bg-blue-100 text-blue-800 py-1 px-3 rounded-full text-sm">Basic</span>
                            </div>
                            <div class="mb-4">
                                @if(isset($currentCourse['original_price_3_month']))
                                <div class="flex items-center mb-1">
                                    <span class="text-sm text-gray-500 line-through mr-2">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                    @php
                                        $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_3_month']);
                                        $current = (float) str_replace(['₹', ','], '', $currentCourse['price_3_month']);
                                        $discount = round(($original - $current) / $original * 100);
                                        $savings = $original - $current;
                                    @endphp
                                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $discount }}% OFF</span>
                                </div>
                                <div class="text-green-600 text-sm font-medium mb-1">Save ₹{{ number_format($savings, 2) }}</div>
                                @endif
                                <div class="flex items-baseline">
                                    <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['price_3_month'] }}</span>
                                    <span class="text-gray-600 ml-1">/one-time</span>
                                    @if(isset($currentCourse['original_price_3_month']))
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
                                data-course="{{ $currentCourse['title'] }}"
                                data-duration="3"
                                data-amount="{{ str_replace(['₹', ','], '', $currentCourse['price_3_month']) * 100 }}">
                                @if(isset($currentCourse['original_price_3_month']))
                                @endif
                                Buy Now
                            </button>

                            @if(isset($currentCourse['original_price_3_month']))
                            <div class="mt-3 bg-gray-50 p-2 rounded text-sm">
                                <div class="flex items-start">
                                    <div class="text-yellow-500 mr-1">★★★★★</div>
                                    <div class="text-gray-600 italic">"Amazing value for money! I couldn't believe the quality at this price." – Rahul S.</div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- 6 Month Plan -->
                        <div class="border-2 border-primary rounded-lg bg-white p-6 relative">
                            <div class="absolute top-0 right-0 bg-primary text-white py-1 px-4 text-sm rounded-bl-lg">
                                RECOMMENDED
                            </div>
                            @if(isset($currentCourse['original_price_6_month']))
                            <div class="absolute -top-4 -left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform -rotate-12">BEST DEAL!</div>
                            @endif
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-xl font-semibold">6 Month Plan</h4>
                                <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-sm">Advanced</span>
                            </div>
                            <div class="mb-4">
                                @if(isset($currentCourse['original_price_6_month']))
                                <div class="flex items-center mb-1">
                                    <span class="text-sm text-gray-500 line-through mr-2">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                    @php
                                        $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_6_month']);
                                        $current = (float) str_replace(['₹', ','], '', $currentCourse['price_6_month']);
                                        $discount = round(($original - $current) / $original * 100);
                                        $savings = $original - $current;
                                    @endphp
                                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $discount }}% OFF</span>
                                </div>
                                <div class="text-green-600 text-sm font-medium mb-1">Save ₹{{ number_format($savings, 2) }}</div>
                                @endif
                                <div class="flex items-baseline">
                                    <span class="text-3xl font-bold text-gray-800">₹{{ $currentCourse['price_6_month'] }}</span>
                                    <span class="text-gray-600 ml-1">/one-time</span>
                                    @if(isset($currentCourse['original_price_6_month']))
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
                                data-course="{{ $currentCourse['title'] }}"
                                data-duration="6"
                                data-amount="{{ str_replace(['₹', ','], '', $currentCourse['price_6_month']) * 100 }}">
                                @if(isset($currentCourse['original_price_6_month']))
                                @endif
                                Buy Now
                            </button>

                            @if(isset($currentCourse['original_price_6_month']))
                            <div class="mt-3 bg-gray-50 p-2 rounded text-sm">
                                <div class="flex items-start">
                                    <div class="text-yellow-500 mr-1">★★★★★</div>
                                    <div class="text-gray-600 italic">"Best investment I made for my career! The 6-month plan is incredible value." – Priya M.</div>
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

    @if(isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
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
                                <th class="py-3 px-4 text-center text-gray-700">Our {{ $currentCourse['title'] }} Internship</th>
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
                                <td class="py-3 px-4 text-center text-green-600 font-bold">Yes (4+ real-world projects)</td>
                                <td class="py-3 px-4 text-center text-gray-800">Limited (1-2 basic projects)</td>
                                <td class="py-3 px-4 text-center text-gray-800">Yes (2-3 projects)</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="py-3 px-4 text-gray-800">Certificate</td>
                                <td class="py-3 px-4 text-center text-green-600 font-bold">Yes (Industry recognized)</td>
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
                                        @if(isset($currentCourse['original_price_3_month']))
                                        <span class="text-red-500 line-through text-sm">₹{{ $currentCourse['original_price_3_month'] }}</span>
                                        <span class="text-green-600 font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                                        @else
                                        <span class="text-green-600 font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <span class="text-sm">6-Month Plan:</span>
                                        @if(isset($currentCourse['original_price_6_month']))
                                        <span class="text-red-500 line-through text-sm">₹{{ $currentCourse['original_price_6_month'] }}</span>
                                        <span class="text-green-600 font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                                        @else
                                        <span class="text-green-600 font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
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
                    data-course="{{ $currentCourse['title'] }}"
                    data-duration="3"
                    data-amount="{{ str_replace(['₹', ','], '', $currentCourse['price_3_month']) * 100 }}">
                    @if(isset($currentCourse['original_price_3_month']))
                    @php
                        $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_3_month']);
                        $current = (float) str_replace(['₹', ','], '', $currentCourse['price_3_month']);
                        $discount = round(($original - $current) / $original * 100);
                    @endphp
                    @endif
                    <span>
                        Buy 3-Month Plan
                        @if(isset($currentCourse['original_price_3_month']))
                        <span class="block mt-1">
                            <span class="text-sm text-gray-500 line-through">₹{{ $currentCourse['original_price_3_month'] }}</span>
                            <span class="text-primary font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                        </span>
                        @else
                        <span class="block mt-1 text-primary font-bold">₹{{ $currentCourse['price_3_month'] }}</span>
                        @endif
                    </span>
                </button>
                <button
                    class="cta-buy-btn inline-block px-8 py-4 bg-secondary text-white font-medium rounded-md hover:bg-blue-800 transition-colors relative overflow-hidden shadow-lg"
                    data-course="{{ $currentCourse['title'] }}"
                    data-duration="6"
                    data-amount="{{ str_replace(['₹', ','], '', $currentCourse['price_6_month']) * 100 }}">
                    @if(isset($currentCourse['original_price_6_month']))
                    @php
                        $original = (float) str_replace(['₹', ','], '', $currentCourse['original_price_6_month']);
                        $current = (float) str_replace(['₹', ','], '', $currentCourse['price_6_month']);
                        $discount = round(($original - $current) / $original * 100);
                    @endphp
                    @endif
                    <span>
                        Buy 6-Month Plan
                        @if(isset($currentCourse['original_price_6_month']))
                        <span class="block mt-1">
                            <span class="text-sm text-gray-200 line-through">₹{{ $currentCourse['original_price_6_month'] }}</span>
                            <span class="text-white font-bold">₹{{ $currentCourse['price_6_month'] }}</span>
                        </span>
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
        // Function to properly initialize Razorpay
        function initializeRazorpay(response, amount, course, duration) {
            const options = {
                key: response.key_id,
                amount: amount,
                currency: "INR",
                name: "CodeSprintX",
                description: course + " Internship - " + duration + " months",
                image: "{{ asset('assets/images/logo.png') }}",
                order_id: response.order_id,
                handler: function(response) {
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
                    paymentField.value = response.razorpay_payment_id;
                    form.appendChild(paymentField);

                    var orderField = document.createElement('input');
                    orderField.type = 'hidden';
                    orderField.name = 'razorpay_order_id';
                    orderField.value = response.razorpay_order_id;
                    form.appendChild(orderField);

                    var signatureField = document.createElement('input');
                    signatureField.type = 'hidden';
                    signatureField.name = 'razorpay_signature';
                    signatureField.value = response.razorpay_signature;
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
                    }
                }
            };

            // Initialize Razorpay
            const razorpay = new Razorpay(options);
            razorpay.open();
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
            @if(isset($currentCourse['original_price_3_month']) || isset($currentCourse['original_price_6_month']))
            @if(isset($currentCourse['offer_end_at']))
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

                // If the countdown is finished, clear the interval
                if (distance < 0) {
                    clearInterval(countdownTimer);
                    if (countdownEl) countdownEl.innerHTML = "EXPIRED";
                    if (sidebarCountdownEl) sidebarCountdownEl.innerHTML = "EXPIRED";
                }
            }, 1000);
            @endif
            @endif

            // Wait for document to be ready
            $('.razorpay-buy-btn, .cta-buy-btn').on('click', function(e) {
                e.preventDefault();

                const course = $(this).data('course');
                const duration = $(this).data('duration');
                const amount = $(this).data('amount');

                console.log('Buy button clicked:', { course, duration, amount });

                // Create Razorpay order
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

                        // Ensure we have the key and order_id from the response
                        if (!response.key_id || !response.order_id) {
                            console.error('Missing required fields in response:', response);
                            alert('Payment initialization failed. Missing required data from server.');
                            return;
                        }
                        // Load Razorpay dynamically if needed
                        if (typeof Razorpay === 'undefined') {
                            console.log('Razorpay not loaded, loading script dynamically...');
                            // Create script element
                            var script = document.createElement('script');
                            script.src = 'https://checkout.razorpay.com/v1/checkout.js';
                            script.async = true;
                            script.onload = function() {
                                console.log('Razorpay script loaded successfully');
                                // Initialize Razorpay after script is loaded
                                initializeRazorpay(response, amount, course, duration);
                            };
                            script.onerror = function() {
                                console.error('Failed to load Razorpay script');
                                alert('Failed to load payment gateway. Please refresh the page and try again.');
                            };
                            document.head.appendChild(script);
                        } else {
                            console.log('Razorpay already available');
                            // Razorpay already loaded, initialize directly
                            initializeRazorpay(response, amount, course, duration);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating order:', error);
                        console.error('Status:', status);
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
        });
    </script>
@endsection
