@extends('user.layouts.app')

@section('page-title', 'My Courses')

@section('content')
<div class="px-4 md:container md:mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">My Courses</h2>
                <p class="text-sm md:text-base text-gray-600">Manage and access all your enrolled courses</p>
            </div>
            <div class="mt-4 md:mt-0">
                <div class="relative">
                    <input type="text" placeholder="Search courses..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pl-10" aria-label="Search courses">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-400" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Current Courses -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">Current Courses</h3>
        <div class="responsive-card-grid" style="display: grid !important;">
            <!-- Course 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 course-card transition-all hover:shadow-md">
                <div class="h-32 md:h-40 bg-blue-500 text-white flex items-center justify-center relative">
                    <i class="fas fa-code text-4xl md:text-6xl course-card-icon" aria-hidden="true"></i>
                    <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">In Progress</div>
                </div>
                <div class="p-4 md:p-5 course-card-content">
                    <h4 class="text-lg font-semibold mb-2">Web Development</h4>
                    <p class="text-gray-600 text-sm mb-4">Master HTML, CSS, JavaScript, PHP, and Laravel</p>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1 text-sm">
                            <span>Progress</span>
                            <span class="text-blue-500">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Started: Jan 15, 2023</span>
                        <span>18/28 lessons</span>
                    </div>
                    <a href="#" class="block w-full bg-blue-500 text-white text-center py-2.5 rounded-lg hover:bg-blue-600 transition-colors touch-target-size">Continue Learning</a>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 course-card transition-all hover:shadow-md">
                <div class="h-32 md:h-40 bg-purple-500 text-white flex items-center justify-center relative">
                    <i class="fas fa-mobile-alt text-4xl md:text-6xl course-card-icon" aria-hidden="true"></i>
                    <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">In Progress</div>
                </div>
                <div class="p-4 md:p-5 course-card-content">
                    <h4 class="text-lg font-semibold mb-2">Mobile App Development</h4>
                    <p class="text-gray-600 text-sm mb-4">Build native mobile apps with React Native and Flutter</p>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1 text-sm">
                            <span>Progress</span>
                            <span class="text-purple-500">30%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-500 h-2.5 rounded-full" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Started: May 1, 2023</span>
                        <span>8/25 lessons</span>
                    </div>
                    <a href="#" class="block w-full bg-purple-500 text-white text-center py-2.5 rounded-lg hover:bg-purple-600 transition-colors touch-target-size">Continue Learning</a>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 course-card transition-all hover:shadow-md">
                <div class="h-32 md:h-40 bg-indigo-500 text-white flex items-center justify-center relative">
                    <i class="fas fa-database text-4xl md:text-6xl course-card-icon" aria-hidden="true"></i>
                    <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">In Progress</div>
                </div>
                <div class="p-4 md:p-5 course-card-content">
                    <h4 class="text-lg font-semibold mb-2">Database Management</h4>
                    <p class="text-gray-600 text-sm mb-4">Learn MySQL, PostgreSQL, and MongoDB fundamentals</p>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1 text-sm">
                            <span>Progress</span>
                            <span class="text-indigo-500">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-500 h-2.5 rounded-full" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Started: Feb 15, 2023</span>
                        <span>20/24 lessons</span>
                    </div>
                    <a href="#" class="block w-full bg-indigo-500 text-white text-center py-2.5 rounded-lg hover:bg-indigo-600 transition-colors touch-target-size">Continue Learning</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Courses -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">Upcoming Courses</h3>
        <div class="responsive-card-grid" style="display: grid !important;">
            <!-- Course 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 course-card transition-all hover:shadow-md">
                <div class="h-32 md:h-40 bg-gray-500 text-white flex items-center justify-center relative">
                    <i class="fab fa-react text-4xl md:text-6xl course-card-icon" aria-hidden="true"></i>
                    <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">Coming Soon</div>
                </div>
                <div class="p-4 md:p-5 course-card-content">
                    <h4 class="text-lg font-semibold mb-2">React JS</h4>
                    <p class="text-gray-600 text-sm mb-4">Learn React and build modern web applications</p>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1 text-sm">
                            <span>Progress</span>
                            <span class="text-gray-500">0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-gray-500 h-2.5 rounded-full" style="width: 0%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Starts: July 10, 2023</span>
                        <span>0/24 lessons</span>
                    </div>
                    <button class="block w-full bg-gray-500 text-white text-center py-2.5 rounded-lg cursor-not-allowed touch-target-size" disabled aria-disabled="true">
                        Starts in 27 days
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Completed Courses -->
    <div>
        <h3 class="text-xl font-semibold mb-4">Completed Courses</h3>
        <div class="responsive-card-grid" style="display: grid !important;">
            <!-- Course 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 course-card transition-all hover:shadow-md">
                <div class="h-32 md:h-40 bg-green-600 text-white flex items-center justify-center relative">
                    <i class="fab fa-html5 text-4xl md:text-6xl course-card-icon" aria-hidden="true"></i>
                    <div class="absolute top-2 right-2 bg-green-700 text-white text-xs px-2 py-1 rounded-full">Completed</div>
                </div>
                <div class="p-4 md:p-5 course-card-content">
                    <h4 class="text-lg font-semibold mb-2">HTML & CSS Basics</h4>
                    <p class="text-gray-600 text-sm mb-4">Introduction to HTML and CSS fundamentals</p>
                    <div class="mb-3">
                        <div class="flex justify-between mb-1 text-sm">
                            <span>Progress</span>
                            <span class="text-green-600">100%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Completed: Mar 10, 2023</span>
                        <span>12/12 lessons</span>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 course-card-buttons">
                        <a href="#" class="block flex-1 bg-green-600 text-white text-center py-2.5 rounded-lg hover:bg-green-700 transition-colors touch-target-size">View Certificate</a>
                        <a href="#" class="block flex-1 border border-green-600 text-green-600 text-center py-2.5 rounded-lg hover:bg-green-50 transition-colors touch-target-size">Review Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
