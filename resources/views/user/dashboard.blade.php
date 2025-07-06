@extends('user.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="px-4 md:container md:mx-auto py-6">
        <!-- Welcome Banner -->
        <div class="relative bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 rounded-2xl shadow-2xl p-6 md:p-8 mb-8 text-white overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white/20 to-transparent"></div>
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-white/10 rounded-full"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-white/5 rounded-full"></div>
                <div class="absolute top-1/2 right-1/4 w-16 h-16 bg-white/10 rounded-full transform rotate-45"></div>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-4 mb-4 md:mb-0">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-user-graduate text-2xl text-white"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Welcome back, John! 👋</h2>
                        <p class="text-blue-100 text-sm md:text-base">Continue your learning journey. You've completed 65% of your current course.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('student.courses') }}" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-xl font-semibold hover:bg-blue-50 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <i class="fas fa-play mr-2"></i>
                        Continue Learning
                    </a>
                    <button class="inline-flex items-center px-6 py-3 bg-white/20 text-white rounded-xl font-semibold hover:bg-white/30 backdrop-blur-sm transition-all duration-200">
                        <i class="fas fa-trophy mr-2"></i>
                        View Achievements
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Course Progress -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl p-6 border-l-4 border-blue-500 transform hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center">
                    <div class="rounded-full bg-gradient-to-r from-blue-500 to-blue-600 p-4 mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-book text-white text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-700 mb-1">Course Progress</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-bold text-gray-800">65%</div>
                            <div class="flex items-center text-green-600 bg-green-100 px-2 py-1 rounded-full">
                                <i class="fas fa-arrow-up text-xs mr-1"></i>
                                <span class="text-xs font-medium">+5%</span>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full transition-all duration-1000" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assignments -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl p-6 border-l-4 border-amber-500 transform hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center">
                    <div class="rounded-full bg-gradient-to-r from-amber-500 to-orange-500 p-4 mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-tasks text-white text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-700 mb-1">Assignments</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-bold text-gray-800">3</div>
                            <div class="text-amber-600 bg-amber-100 px-2 py-1 rounded-full">
                                <span class="text-xs font-medium">pending</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Due this week</p>
                    </div>
                </div>
            </div>

            <!-- Time Spent -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl p-6 border-l-4 border-purple-500 transform hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center">
                    <div class="rounded-full bg-gradient-to-r from-purple-500 to-pink-500 p-4 mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clock text-white text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-700 mb-1">Time Spent</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-bold text-gray-800">42h</div>
                            <div class="text-purple-600 bg-purple-100 px-2 py-1 rounded-full">
                                <span class="text-xs font-medium">this month</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">+8h from last month</p>
                    </div>
                </div>
            </div>

            <!-- Certificates -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl p-6 border-l-4 border-emerald-500 transform hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center">
                    <div class="rounded-full bg-gradient-to-r from-emerald-500 to-green-500 p-4 mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-certificate text-white text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-700 mb-1">Certificates</h3>
                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-bold text-gray-800">2</div>
                            <div class="text-emerald-600 bg-emerald-100 px-2 py-1 rounded-full">
                                <span class="text-xs font-medium">earned</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Next goal: 5 certificates</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Current Course -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-6 border border-gray-100">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-6">
                        <div class="flex items-center space-x-3 mb-4 sm:mb-0">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-sm"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Current Course</h3>
                        </div>
                        <a href="{{ route('student.courses') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors">
                            <span>View All Courses</span>
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>

                    <!-- Course Card -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 mb-6 border border-blue-100">
                        <div class="flex flex-col sm:flex-row sm:items-start">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl p-4 mb-4 sm:mb-0 sm:mr-6 inline-flex items-center justify-center self-center sm:self-auto shadow-lg">
                                <i class="fas fa-code text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Web Development Mastery</h4>
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">In Progress</span>
                                </div>
                                <p class="text-gray-600 mb-4">Master HTML, CSS, JavaScript, PHP, and Laravel framework</p>

                                <!-- Progress Bar -->
                                <div class="mb-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-medium text-gray-700">Overall Progress</span>
                                        <span class="text-sm font-bold text-blue-600">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-3 rounded-full shadow-sm transition-all duration-1000" style="width: 65%"></div>
                                    </div>
                                </div>

                                <!-- Stats -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center bg-white rounded-lg p-3 shadow-sm">
                                        <div class="text-2xl font-bold text-gray-800">18</div>
                                        <div class="text-sm text-gray-600">Completed</div>
                                    </div>
                                    <div class="text-center bg-white rounded-lg p-3 shadow-sm">
                                        <div class="text-2xl font-bold text-gray-800">10</div>
                                        <div class="text-sm text-gray-600">Remaining</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Next Lessons -->
                    <div class="mb-4">
                        <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-play-circle text-blue-500 mr-2"></i>
                            Next Lessons
                        </h4>
                        <div class="space-y-3">
                            <div class="group flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:from-green-100 hover:to-emerald-100 transition-all duration-300 border border-green-200">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-full p-3 mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-play text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-gray-800 mb-1">Introduction to Laravel</h5>
                                    <div class="flex items-center space-x-4 text-sm text-gray-600">
                                        <span><i class="fas fa-clock mr-1"></i>30 min</span>
                                        <span><i class="fas fa-bookmark mr-1"></i>Lesson 19</span>
                                    </div>
                                </div>
                                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-600 transition-colors">
                                    Continue
                                </a>
                            </div>

                            <div class="flex items-center p-4 bg-gray-50 rounded-xl opacity-75">
                                <div class="bg-gray-300 text-gray-500 rounded-full p-3 mr-4">
                                    <i class="fas fa-lock text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-gray-600 mb-1">Laravel Routing and Controllers</h5>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fas fa-clock mr-1"></i>45 min</span>
                                        <span><i class="fas fa-bookmark mr-1"></i>Lesson 20</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 px-4 py-2 rounded-lg font-medium">
                                    <i class="fas fa-lock mr-1"></i>Locked
                                </span>
                            </div>

                            <div class="flex items-center p-4 bg-gray-50 rounded-xl opacity-75">
                                <div class="bg-gray-300 text-gray-500 rounded-full p-3 mr-4">
                                    <i class="fas fa-lock text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-gray-600 mb-1">Laravel Blade Templates</h5>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span><i class="fas fa-clock mr-1"></i>50 min</span>
                                        <span><i class="fas fa-bookmark mr-1"></i>Lesson 21</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 px-4 py-2 rounded-lg font-medium">
                                    <i class="fas fa-lock mr-1"></i>Locked
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Upcoming & Announcements -->
            <div class="space-y-6">
                <!-- Upcoming Assignments -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-tasks text-white text-sm"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Upcoming Assignments</h3>
                        </div>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">3 Due</span>
                    </div>

                    <div class="space-y-4">
                        <div class="group p-4 bg-gradient-to-r from-red-50 to-pink-50 rounded-xl border-l-4 border-red-400 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="bg-red-500 text-white rounded-full p-2 mr-3 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-exclamation text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold text-gray-800">Portfolio Project</h5>
                                        <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                                            <i class="fas fa-clock mr-1"></i>2 days
                                        </span>
                                    </div>
                                    <p class="text-gray-600 text-sm">Create a personal portfolio website using HTML/CSS</p>
                                    <div class="mt-2 flex items-center text-xs text-gray-500">
                                        <i class="fas fa-user mr-1"></i>
                                        <span>Individual Assignment</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group p-4 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-xl border-l-4 border-yellow-400 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="bg-yellow-500 text-white rounded-full p-2 mr-3 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-question-circle text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold text-gray-800">JavaScript Quiz</h5>
                                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                                            <i class="fas fa-clock mr-1"></i>5 days
                                        </span>
                                    </div>
                                    <p class="text-gray-600 text-sm">20 multiple choice questions on JavaScript fundamentals</p>
                                    <div class="mt-2 flex items-center text-xs text-gray-500">
                                        <i class="fas fa-stopwatch mr-1"></i>
                                        <span>Time limit: 45 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-400 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="bg-green-500 text-white rounded-full p-2 mr-3 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-code text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold text-gray-800">PHP Blog Project</h5>
                                        <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                                            <i class="fas fa-clock mr-1"></i>10 days
                                        </span>
                                    </div>
                                    <p class="text-gray-600 text-sm">Build a simple blog with PHP and MySQL</p>
                                    <div class="mt-2 flex items-center text-xs text-gray-500">
                                        <i class="fas fa-users mr-1"></i>
                                        <span>Group Assignment (2-3 members)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <a href="{{ route('student.assignments') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors">
                            <span>View all assignments</span>
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Announcements -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-bullhorn text-white text-sm"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Recent Announcements</h3>
                    </div>

                    <div class="space-y-4">
                        <div class="group p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 hover:shadow-md transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                    <h5 class="font-semibold text-gray-800">System Maintenance</h5>
                                </div>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">1 day ago</span>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">The platform will be unavailable this Saturday from 2AM to 5AM (UTC) for scheduled maintenance.</p>
                        </div>

                        <div class="group p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-200 hover:shadow-md transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <h5 class="font-semibold text-gray-800">New Course Added</h5>
                                </div>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">3 days ago</span>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">We've added a new React Native course for mobile app development. Enroll now!</p>
                        </div>

                        <div class="group p-4 bg-gradient-to-r from-orange-50 to-yellow-50 rounded-xl border border-orange-200 hover:shadow-md transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                    <h5 class="font-semibold text-gray-800">Holiday Schedule</h5>
                                </div>
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">1 week ago</span>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">Check out the updated mentor availability during the upcoming holiday season.</p>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium transition-colors">
                            <span>View all announcements</span>
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl shadow-lg p-6 text-white">
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-bolt text-yellow-400 mr-2"></i>
                        Quick Actions
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="bg-white/10 hover:bg-white/20 rounded-lg p-3 text-center transition-all duration-300 backdrop-blur-sm">
                            <i class="fas fa-calendar-plus text-lg mb-2 text-blue-400"></i>
                            <div class="text-sm font-medium">Schedule Study</div>
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 rounded-lg p-3 text-center transition-all duration-300 backdrop-blur-sm">
                            <i class="fas fa-question-circle text-lg mb-2 text-green-400"></i>
                            <div class="text-sm font-medium">Get Help</div>
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 rounded-lg p-3 text-center transition-all duration-300 backdrop-blur-sm">
                            <i class="fas fa-download text-lg mb-2 text-purple-400"></i>
                            <div class="text-sm font-medium">Resources</div>
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 rounded-lg p-3 text-center transition-all duration-300 backdrop-blur-sm">
                            <i class="fas fa-user-friends text-lg mb-2 text-pink-400"></i>
                            <div class="text-sm font-medium">Study Group</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
