@extends('user.layouts.app')

@section('page-title', 'My Profile')

@section('content')
<!-- Modern Gradient Background -->
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50">
    <!-- Header Section with Cover -->
    <div class="relative bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 h-56 md:h-72">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative z-10 px-4 md:container md:mx-auto h-full flex items-center justify-start pt-8">
            <div class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6 w-full">
                <div class="relative flex-shrink-0">
                    <div class="w-28 h-28 md:w-36 md:h-36 rounded-full overflow-hidden ring-4 ring-white shadow-xl">
                        <img src="https://placehold.co/200x200.png?text=User" alt="User Profile" class="w-full h-full object-cover">
                    </div>
                    <button class="absolute bottom-2 right-2 bg-white text-gray-700 rounded-full p-2 shadow-lg hover:bg-gray-50 transition-all duration-200 hover:scale-110">
                        <i class="fas fa-camera text-sm"></i>
                    </button>
                </div>
                <div class="text-white text-center sm:text-left flex-1">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">John Doe</h1>
                    <p class="text-blue-100 text-xl mb-4">Web Development Student</p>
                    <div class="flex flex-col sm:flex-row items-center sm:items-start space-y-2 sm:space-y-0 sm:space-x-6">
                        <span class="flex items-center text-blue-100 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Mumbai, India
                        </span>
                        <span class="flex items-center text-blue-100 text-sm">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Joined Jan 2023
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content with proper spacing -->
    <div class="px-4 md:container md:mx-auto  relative z-20 pb-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Left Column: Profile Overview -->
            <div class="lg:col-span-1">
                <!-- Contact Info Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 mb-6 hover:shadow-xl transition-all duration-300 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-address-card text-indigo-600 mr-2"></i>
                        Contact Information
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-center p-3 rounded-xl bg-gradient-to-r from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 transition-all duration-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-white text-sm"></i>
                            </div>
                            <span class="ml-4 text-gray-700 font-medium">johndoe@example.com</span>
                        </li>
                        <li class="flex items-center p-3 rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100 transition-all duration-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-white text-sm"></i>
                            </div>
                            <span class="ml-4 text-gray-700 font-medium">+91 98765 43210</span>
                        </li>
                        <li class="flex items-center p-3 rounded-xl bg-gradient-to-r from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 transition-all duration-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-sm"></i>
                            </div>
                            <span class="ml-4 text-gray-700 font-medium">Computer Science</span>
                        </li>
                    </ul>

                    <div class="mt-6">
                        <a href="{{ route('student.settings') }}" class="block w-full text-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-edit mr-2"></i>
                            Edit Profile
                        </a>
                    </div>
                </div>

                <!-- Skills Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 mb-6 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center justify-between">
                        <span class="flex items-center">
                            <i class="fas fa-code text-indigo-600 mr-2"></i>
                            Skills & Expertise
                        </span>
                        <button class="text-indigo-600 hover:text-indigo-800 p-2 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                            <i class="fas fa-pencil-alt text-sm"></i>
                        </button>
                    </h3>
                    <div class="space-y-4">
                        <div class="group">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-semibold text-gray-800">HTML/CSS</span>
                                <span class="text-sm text-indigo-600 font-medium">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-2.5 rounded-full transition-all duration-1000 ease-out group-hover:from-blue-600 group-hover:to-indigo-700" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-semibold text-gray-800">JavaScript</span>
                                <span class="text-sm text-indigo-600 font-medium">70%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-600 h-2.5 rounded-full transition-all duration-1000 ease-out group-hover:from-green-600 group-hover:to-emerald-700" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-semibold text-gray-800">PHP</span>
                                <span class="text-sm text-indigo-600 font-medium">60%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-purple-500 to-pink-600 h-2.5 rounded-full transition-all duration-1000 ease-out group-hover:from-purple-600 group-hover:to-pink-700" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-semibold text-gray-800">Laravel</span>
                                <span class="text-sm text-indigo-600 font-medium">45%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-orange-500 to-red-600 h-2.5 rounded-full transition-all duration-1000 ease-out group-hover:from-orange-600 group-hover:to-red-700" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center justify-between">
                        <span class="flex items-center">
                            <i class="fas fa-share-alt text-indigo-600 mr-2"></i>
                            Social Profiles
                        </span>
                        <button class="text-indigo-600 hover:text-indigo-800 p-2 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                            <i class="fas fa-pencil-alt text-sm"></i>
                        </button>
                    </h3>
                    <ul class="space-y-3">
                        <li class="group">
                            <div class="flex items-center p-3 rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-200 cursor-pointer">
                                <div class="bg-blue-500 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-200">
                                    <i class="fab fa-linkedin-in text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">LinkedIn</h4>
                                    <a href="#" class="text-xs text-blue-600 hover:text-blue-800 font-medium">linkedin.com/in/johndoe</a>
                                </div>
                            </div>
                        </li>
                        <li class="group">
                            <div class="flex items-center p-3 rounded-xl bg-gradient-to-r from-gray-50 to-gray-100 hover:from-gray-100 hover:to-gray-200 transition-all duration-200 cursor-pointer">
                                <div class="bg-gray-800 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-200">
                                    <i class="fab fa-github text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">GitHub</h4>
                                    <a href="#" class="text-xs text-gray-600 hover:text-gray-800 font-medium">github.com/johndoe</a>
                                </div>
                            </div>
                        </li>
                        <li class="group">
                            <div class="flex items-center p-3 rounded-xl bg-gradient-to-r from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 transition-all duration-200 cursor-pointer">
                                <div class="bg-red-500 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-200">
                                    <i class="fab fa-youtube text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-semibold text-gray-800">YouTube</h4>
                                    <a href="#" class="text-xs text-red-600 hover:text-red-800 font-medium">youtube.com/@johndoe</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>

            <!-- Right Column: Profile Content -->
            <div class="lg:col-span-2">
                <!-- About Me -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 mb-6 hover:shadow-xl transition-all duration-300 mt-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center justify-between">
                        <span class="flex items-center">
                            <i class="fas fa-user text-indigo-600 mr-2"></i>
                            About Me
                        </span>
                        <button class="text-indigo-600 hover:text-indigo-800 p-2 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                            <i class="fas fa-pencil-alt text-sm"></i>
                        </button>
                    </h3>
                    <div class="prose prose-lg text-gray-700 space-y-4">
                        <p class="leading-relaxed">
                            I'm a Computer Science student passionate about web development and software engineering. Currently enrolled in the Web Development internship program at <span class="font-semibold text-indigo-600">CodeSprintX</span> to enhance my skills and build real-world projects.
                        </p>
                        <p class="leading-relaxed">
                            I have experience working with HTML, CSS, JavaScript, and basic PHP. I'm also learning modern frameworks like React and Laravel. I'm looking forward to building a career in full-stack development after completing my studies.
                        </p>
                    </div>
                </div>

                <!-- Courses Enrolled -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 mb-6 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-graduation-cap text-indigo-600 mr-2"></i>
                        Courses Enrolled
                    </h3>
                    <div class="space-y-6">
                        <div class="group bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start">
                                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-2xl p-4 mr-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-code text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-3">
                                        <h4 class="text-xl font-bold text-gray-800">Web Development</h4>
                                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">In Progress</span>
                                    </div>
                                    <p class="text-gray-600 mb-4 text-lg">Master HTML, CSS, JavaScript, PHP, and Laravel</p>
                                    <div class="w-full bg-gray-200 rounded-full h-3 mb-3 overflow-hidden">
                                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-3 rounded-full transition-all duration-1000 ease-out" style="width: 65%"></div>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600 font-medium">Progress: 65%</span>
                                        <span class="text-gray-600">Started: Jan 15, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group bg-gradient-to-r from-gray-50 to-slate-50 rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start">
                                <div class="bg-gradient-to-r from-gray-500 to-gray-600 text-white rounded-2xl p-4 mr-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-react text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-3">
                                        <h4 class="text-xl font-bold text-gray-800">React JS</h4>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">Coming Soon</span>
                                    </div>
                                    <p class="text-gray-600 mb-4 text-lg">Learn React and build modern web applications</p>
                                    <div class="w-full bg-gray-200 rounded-full h-3 mb-3 overflow-hidden">
                                        <div class="bg-gradient-to-r from-gray-400 to-gray-500 h-3 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600 font-medium">Progress: 0%</span>
                                        <span class="text-gray-600">Starting: July 10, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Achievements -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 mb-6 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-trophy text-yellow-500 mr-2"></i>
                        Achievements & Certificates
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="group bg-gradient-to-br from-yellow-50 to-orange-50 border border-yellow-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-certificate text-white text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">HTML & CSS Fundamentals</h4>
                            </div>
                            <p class="text-gray-600 mb-3 leading-relaxed">Successfully completed the HTML & CSS module with 95% score</p>
                            <div class="text-sm text-gray-500 mb-3">Issued: March 2023</div>
                            <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 font-semibold text-sm transition-colors duration-200">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                View Certificate
                            </a>
                        </div>

                        <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-gradient-to-r from-blue-400 to-indigo-500 p-3 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-certificate text-white text-lg"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg">JavaScript Essentials</h4>
                            </div>
                            <p class="text-gray-600 mb-3 leading-relaxed">Completed JavaScript fundamentals with 88% score</p>
                            <div class="text-sm text-gray-500 mb-3">Issued: May 2023</div>
                            <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold text-sm transition-colors duration-200">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                View Certificate
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projects -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 p-6 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center justify-between">
                        <span class="flex items-center">
                            <i class="fas fa-laptop-code text-indigo-600 mr-2"></i>
                            Projects
                        </span>
                        <button class="bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white px-4 py-2 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i>
                            Add Project
                        </button>
                    </h3>
                    <div class="space-y-6">
                        <div class="group bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                            <h4 class="font-bold text-gray-800 text-lg mb-3">Personal Portfolio Website</h4>
                            <p class="text-gray-600 mb-4 leading-relaxed">A responsive portfolio website built with HTML, CSS, and JavaScript showcasing my skills and projects.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full font-medium">HTML</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full font-medium">CSS</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-sm rounded-full font-medium">JavaScript</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full font-medium">Responsive</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-500 font-medium">Completed: April 2023</div>
                                <div class="flex space-x-3">
                                    <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold text-sm transition-colors duration-200">
                                        <i class="fas fa-link mr-1"></i>
                                        Live Demo
                                    </a>
                                    <a href="#" class="inline-flex items-center text-gray-600 hover:text-gray-800 font-semibold text-sm transition-colors duration-200">
                                        <i class="fab fa-github mr-1"></i>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="group bg-gradient-to-r from-green-50 to-emerald-50 border border-green-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                            <h4 class="font-bold text-gray-800 text-lg mb-3">Task Tracker App</h4>
                            <p class="text-gray-600 mb-4 leading-relaxed">A simple task management application built with JavaScript and local storage.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full font-medium">HTML</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full font-medium">CSS</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-sm rounded-full font-medium">JavaScript</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full font-medium">LocalStorage</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-500 font-medium">Completed: June 2023</div>
                                <div class="flex space-x-3">
                                    <a href="#" class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold text-sm transition-colors duration-200">
                                        <i class="fas fa-link mr-1"></i>
                                        Live Demo
                                    </a>
                                    <a href="#" class="inline-flex items-center text-gray-600 hover:text-gray-800 font-semibold text-sm transition-colors duration-200">
                                        <i class="fab fa-github mr-1"></i>
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
