@extends('user.layouts.app')

@section('page-title', 'My Progress')

@section('content')
<div class="px-4 md:container md:mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">My Progress</h2>
                <p class="text-sm md:text-base text-gray-600">Track your learning journey and achievements</p>
            </div>
            <div class="mt-4 md:mt-0">
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 md:p-2.5">
                    <option value="all-time">All Time</option>
                    <option value="this-month">This Month</option>
                    <option value="last-month">Last Month</option>
                    <option value="this-year">This Year</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Progress Overview -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6">
        <!-- Overall Progress -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-md transition-all duration-300 group">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg md:text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors">Overall Progress</h3>
                <div class="flex items-center space-x-1 text-green-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-xs font-medium">On Track</span>
                </div>
            </div>

            <div class="flex items-center justify-center mb-6">
                <!-- Enhanced Circular Progress Bar -->
                <div class="relative w-36 h-36 md:w-40 md:h-40">
                    <!-- Outer glow ring -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 opacity-20 blur-sm"></div>

                    <!-- Main progress container -->
                    <div class="relative w-full h-full">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 120 120">
                            <!-- Background circle -->
                            <circle cx="60" cy="60" r="50" class="stroke-gray-200" stroke-width="8" fill="none"></circle>

                            <!-- Progress circle with gradient -->
                            <defs>
                                <linearGradient id="progressGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#8B5CF6;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <circle
                                cx="60"
                                cy="60"
                                r="50"
                                stroke="url(#progressGradient)"
                                stroke-width="8"
                                stroke-linecap="round"
                                stroke-dasharray="204.2, 314.16"
                                stroke-dashoffset="0"
                                fill="none"
                                class="transition-all duration-1000 ease-out">
                            </circle>
                        </svg>

                        <!-- Center content -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="text-center">
                                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">
                                    65%
                                </div>
                                <div class="text-xs text-gray-500 mt-1 font-medium">Complete</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Info -->
            <div class="text-center space-y-3">
                <div class="flex items-center justify-center space-x-2">
                    <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full"></div>
                    <h4 class="text-base md:text-lg font-semibold text-gray-800">Web Development</h4>
                </div>

                <div class="flex items-center justify-center space-x-4 text-sm">
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600 font-medium">18 completed</span>
                    </div>
                    <div class="w-1 h-1 bg-gray-300 rounded-full"></div>
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-500">10 remaining</span>
                    </div>
                </div>

                <!-- Progress bar -->
                <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 64.3%"></div>
                </div>

                <!-- Next lesson info -->
                <div class="mt-4 p-3 bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg border border-blue-100">
                    <p class="text-xs text-gray-600 mb-1">Next Lesson</p>
                    <p class="text-sm font-medium text-gray-800">JavaScript Functions & Scope</p>
                </div>
            </div>
        </div>

        <!-- Time Spent -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-md transition-all duration-300 h-full flex flex-col">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg md:text-xl font-bold text-gray-800">Time Spent</h3>
                <div class="flex items-center space-x-1 text-blue-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-xs font-medium">Active</span>
                </div>
            </div>

            <div class="flex-1 space-y-6">
                <div>
                    <div class="flex justify-between mb-2 text-sm">
                        <span class="text-gray-700 font-medium">This Week</span>
                        <span class="text-gray-900 font-bold">12h 30m</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-green-400 to-green-600 h-3 rounded-full transition-all duration-500" style="width: 70%"></div>
                    </div>
                    <div class="flex justify-between mt-1 text-xs text-gray-500">
                        <span>Goal: 18h</span>
                        <span>70% complete</span>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2 text-sm">
                        <span class="text-gray-700 font-medium">This Month</span>
                        <span class="text-gray-900 font-bold">42h 15m</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-3 rounded-full transition-all duration-500" style="width: 85%"></div>
                    </div>
                    <div class="flex justify-between mt-1 text-xs text-gray-500">
                        <span>Goal: 50h</span>
                        <span>85% complete</span>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2 text-sm">
                        <span class="text-gray-700 font-medium">Total Time</span>
                        <span class="text-gray-900 font-bold">126h 45m</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-purple-400 to-purple-600 h-3 rounded-full transition-all duration-500" style="width: 100%"></div>
                    </div>
                    <div class="flex justify-between mt-1 text-xs text-gray-500">
                        <span>All courses</span>
                        <span>Excellent!</span>
                    </div>
                </div>
            </div>

            <!-- Footer stats -->
            <div class="mt-6 pt-4 border-t border-gray-100">
                <div class="flex items-center justify-center space-x-4 text-xs">
                    <div class="text-center">
                        <div class="font-bold text-green-600">+2.5h</div>
                        <div class="text-gray-500">vs last week</div>
                    </div>
                    <div class="w-1 h-8 bg-gray-200 rounded-full"></div>
                    <div class="text-center">
                        <div class="font-bold text-blue-600">6.3h</div>
                        <div class="text-gray-500">daily avg</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Achievements -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-md transition-all duration-300 h-full flex flex-col">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg md:text-xl font-bold text-gray-800">Achievements</h3>
                <div class="flex items-center space-x-1 text-yellow-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-xs font-medium">5 Earned</span>
                </div>
            </div>

            <div class="flex-1 space-y-4">
                <div class="flex items-center group hover:bg-gradient-to-r hover:from-yellow-50 hover:to-orange-50 rounded-lg p-3 transition-all duration-200">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-3 rounded-full mr-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15v-3a2 2 0 014 0v3H8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-sm text-gray-900">Course Master</h4>
                        <p class="text-gray-600 text-xs">2 courses completed</p>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-2">
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-1.5 rounded-full" style="width: 67%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center group hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 rounded-lg p-3 transition-all duration-200">
                    <div class="bg-gradient-to-r from-blue-400 to-cyan-500 p-3 rounded-full mr-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-sm text-gray-900">Streak Champion</h4>
                        <p class="text-gray-600 text-xs">15 days in a row</p>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-2">
                            <div class="bg-gradient-to-r from-blue-400 to-cyan-500 h-1.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center group hover:bg-gradient-to-r hover:from-green-50 hover:to-emerald-50 rounded-lg p-3 transition-all duration-200">
                    <div class="bg-gradient-to-r from-green-400 to-emerald-500 p-3 rounded-full mr-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-sm text-gray-900">Perfect Performer</h4>
                        <p class="text-gray-600 text-xs">3 assignments with 100%</p>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-2">
                            <div class="bg-gradient-to-r from-green-400 to-emerald-500 h-1.5 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer with next achievement -->
            <div class="mt-6 pt-4 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-xs text-gray-600 mb-1">Next Achievement</p>
                    <div class="flex items-center justify-center space-x-2">
                        <div class="w-6 h-6 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700">Speed Learner (2/5 fast completions)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Progress -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Course Progress</h3>
        <div class="responsive-table">
            <table class="min-w-full divide-y divide-gray-200 responsive-table-card">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time Spent</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Activity</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Course 1 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-code text-blue-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Web Development</div>
                                    <div class="text-sm text-gray-500">HTML, CSS, JavaScript, PHP, Laravel</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Progress">
                            <div class="flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                                </div>
                                <span class="text-sm text-gray-900">65%</span>
                            </div>
                            <div class="text-xs text-gray-500">18/28 lessons</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Time Spent">
                            <div class="text-sm text-gray-900">78h 30m</div>
                            <div class="text-xs text-gray-500">Avg. 6h/week</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Last Activity">
                            <div class="text-sm text-gray-900">Today</div>
                            <div class="text-xs text-gray-500">2 hours ago</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">Continue</a>
                        </td>
                    </tr>

                    <!-- Course 2 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                    <i class="fab fa-html5 text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">HTML & CSS Basics</div>
                                    <div class="text-sm text-gray-500">Introduction to HTML and CSS</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Progress">
                            <div class="flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                                <span class="text-sm text-gray-900">100%</span>
                            </div>
                            <div class="text-xs text-gray-500">12/12 lessons</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Time Spent">
                            <div class="text-sm text-gray-900">24h 45m</div>
                            <div class="text-xs text-gray-500">Completed</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Last Activity">
                            <div class="text-sm text-gray-900">Mar 10, 2023</div>
                            <div class="text-xs text-gray-500">Completed</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">Review</a>
                        </td>
                    </tr>

                    <!-- Course 3 (Coming Soon) -->
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                    <i class="fab fa-react text-gray-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">React JS</div>
                                    <div class="text-sm text-gray-500">Modern web applications with React</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Progress">
                            <div class="flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                    <div class="bg-gray-400 h-2.5 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-sm text-gray-900">0%</span>
                            </div>
                            <div class="text-xs text-gray-500">0/24 lessons</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Time Spent">
                            <div class="text-sm text-gray-900">0h 0m</div>
                            <div class="text-xs text-gray-500">Not started</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Last Activity">
                            <div class="text-sm text-gray-900">Coming Soon</div>
                            <div class="text-xs text-gray-500">Starts: Jul 10, 2023</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <span class="text-gray-400">Locked</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Weekly Activity Chart -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-md transition-all duration-300">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800">Weekly Activity</h3>
                <p class="text-sm text-gray-600 mt-1">Your daily study pattern</p>
            </div>
            <div class="flex items-center space-x-1 text-purple-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                </svg>
                <span class="text-sm font-medium">Trending Up</span>
            </div>
        </div>

        <!-- Chart Container -->
        <div class="relative">
            <!-- Background Grid -->
            <div class="absolute inset-0 flex flex-col justify-between opacity-20">
                <div class="border-t border-gray-200"></div>
                <div class="border-t border-gray-200"></div>
                <div class="border-t border-gray-200"></div>
                <div class="border-t border-gray-200"></div>
            </div>

            <!-- Chart -->
            <div class="relative h-64 md:h-72 px-4">
                <div class="flex items-end justify-between w-full h-full space-x-2 md:space-x-4">
                    <!-- Monday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-blue-500 to-blue-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 30%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                1.5h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-blue-600 transition-colors">Mon</div>
                        <div class="text-xs text-gray-500 font-medium">1.5h</div>
                        <div class="w-2 h-1 bg-blue-200 rounded-full mt-1 group-hover:bg-blue-400 transition-colors"></div>
                    </div>

                    <!-- Tuesday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-green-500 to-green-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 60%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                3.0h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-green-600 transition-colors">Tue</div>
                        <div class="text-xs text-gray-500 font-medium">3.0h</div>
                        <div class="w-2 h-1 bg-green-200 rounded-full mt-1 group-hover:bg-green-400 transition-colors"></div>
                    </div>

                    <!-- Wednesday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-purple-500 to-purple-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 80%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                4.0h
                            </div>
                            <!-- Peak indicator -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-purple-600 transition-colors">Wed</div>
                        <div class="text-xs text-gray-500 font-medium">4.0h</div>
                        <div class="w-2 h-1 bg-purple-200 rounded-full mt-1 group-hover:bg-purple-400 transition-colors"></div>
                    </div>

                    <!-- Thursday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-orange-500 to-orange-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 40%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                2.0h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-orange-600 transition-colors">Thu</div>
                        <div class="text-xs text-gray-500 font-medium">2.0h</div>
                        <div class="w-2 h-1 bg-orange-200 rounded-full mt-1 group-hover:bg-orange-400 transition-colors"></div>
                    </div>

                    <!-- Friday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-red-500 to-red-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 20%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                1.0h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-red-600 transition-colors">Fri</div>
                        <div class="text-xs text-gray-500 font-medium">1.0h</div>
                        <div class="w-2 h-1 bg-red-200 rounded-full mt-1 group-hover:bg-red-400 transition-colors"></div>
                    </div>

                    <!-- Saturday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-teal-500 to-teal-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 70%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                3.5h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-teal-600 transition-colors">Sat</div>
                        <div class="text-xs text-gray-500 font-medium">3.5h</div>
                        <div class="w-2 h-1 bg-teal-200 rounded-full mt-1 group-hover:bg-teal-400 transition-colors"></div>
                    </div>

                    <!-- Sunday -->
                    <div class="flex flex-col items-center group cursor-pointer">
                        <div class="relative w-8 md:w-12 bg-gradient-to-t from-indigo-500 to-indigo-400 rounded-t-lg shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105"
                             style="height: 50%">
                            <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                2.5h
                            </div>
                        </div>
                        <div class="mt-3 text-xs font-semibold text-gray-700 group-hover:text-indigo-600 transition-colors">Sun</div>
                        <div class="text-xs text-gray-500 font-medium">2.5h</div>
                        <div class="w-2 h-1 bg-indigo-200 rounded-full mt-1 group-hover:bg-indigo-400 transition-colors"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Footer -->
        <div class="mt-8 pt-6 border-t border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Total Time -->
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-2">
                        <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-600">Total Time</span>
                    </div>
                    <div class="text-2xl font-bold text-gray-800">17.5h</div>
                    <div class="text-xs text-green-500 font-medium">+2.5h vs last week</div>
                </div>

                <!-- Average -->
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-2">
                        <div class="w-3 h-3 bg-gradient-to-r from-green-500 to-teal-500 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-600">Daily Average</span>
                    </div>
                    <div class="text-2xl font-bold text-gray-800">2.5h</div>
                    <div class="text-xs text-blue-500 font-medium">Consistent pace</div>
                </div>

                <!-- Best Day -->
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-2">
                        <div class="w-3 h-3 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-600">Best Day</span>
                    </div>
                    <div class="text-2xl font-bold text-gray-800">Wed</div>
                    <div class="text-xs text-purple-500 font-medium">4.0 hours</div>
                </div>
            </div>

            <!-- Progress toward weekly goal -->
            <div class="mt-6 p-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg border border-blue-100">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Weekly Goal Progress</span>
                    <span class="text-sm font-bold text-blue-600">87.5%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-3 rounded-full transition-all duration-1000" style="width: 87.5%"></div>
                </div>
                <div class="flex justify-between mt-2 text-xs text-gray-600">
                    <span>17.5h completed</span>
                    <span>Goal: 20h</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
