@extends('user.layouts.app')

@section('page-title', 'My Certificates')

@section('content')
<div class="px-4 md:container md:mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">My Certificates</h2>
                <p class="text-sm md:text-base text-gray-600">View and download your earned certificates</p>
            </div>
            <div class="mt-4 md:mt-0">
                <div class="relative">
                    <input type="text" placeholder="Search certificates..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 md:p-2.5 pl-10">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificates Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        <!-- Certificate 1 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <div class="h-36 md:h-48 bg-gradient-to-r from-blue-500 to-purple-600 text-white flex items-center justify-center relative">
                <div class="text-center">
                    <i class="fas fa-certificate text-4xl md:text-6xl mb-2 opacity-25"></i>
                    <h3 class="text-lg md:text-xl font-bold">HTML & CSS Fundamentals</h3>
                </div>
                <div class="absolute top-2 right-2 bg-white text-blue-500 text-xs px-2 py-1 rounded-full font-medium">
                    Verified
                </div>
            </div>
            <div class="p-4 md:p-5">
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-xs md:text-sm">Issued On</span>
                        <span class="text-gray-700 text-xs md:text-sm font-medium">March 10, 2023</span>
                    </div>
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-xs md:text-sm">Certificate ID</span>
                        <span class="text-gray-700 text-xs md:text-sm font-medium">CSX-HTML-12345</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700 text-xs md:text-sm">Score</span>
                        <span class="text-green-600 text-xs md:text-sm font-medium">95%</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <a href="#" class="block flex-1 bg-blue-500 text-white text-center py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        <i class="fas fa-download mr-1"></i> Download
                    </a>
                    <a href="#" class="block flex-1 border border-blue-500 text-blue-500 text-center py-2 rounded-lg hover:bg-blue-50 transition-colors">
                        <i class="fas fa-eye mr-1"></i> View
                    </a>
                </div>
            </div>
        </div>

        <!-- Certificate 2 -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <div class="h-48 bg-gradient-to-r from-yellow-500 to-orange-600 text-white flex items-center justify-center relative">
                <div class="text-center">
                    <i class="fas fa-certificate text-6xl mb-2 opacity-25"></i>
                    <h3 class="text-xl font-bold">JavaScript Essentials</h3>
                </div>
                <div class="absolute top-2 right-2 bg-white text-yellow-500 text-xs px-2 py-1 rounded-full font-medium">
                    Verified
                </div>
            </div>
            <div class="p-5">
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-sm">Issued On</span>
                        <span class="text-gray-700 text-sm font-medium">May 22, 2023</span>
                    </div>
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-sm">Certificate ID</span>
                        <span class="text-gray-700 text-sm font-medium">CSX-JS-67890</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700 text-sm">Score</span>
                        <span class="text-green-600 text-sm font-medium">88%</span>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <a href="#" class="block flex-1 bg-yellow-500 text-white text-center py-2 rounded-lg hover:bg-yellow-600 transition-colors">
                        <i class="fas fa-download mr-1"></i> Download
                    </a>
                    <a href="#" class="block flex-1 border border-yellow-500 text-yellow-500 text-center py-2 rounded-lg hover:bg-yellow-50 transition-colors">
                        <i class="fas fa-eye mr-1"></i> View
                    </a>
                </div>
            </div>
        </div>

        <!-- Certificate Coming Soon -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <div class="h-48 bg-gradient-to-r from-gray-400 to-gray-500 text-white flex items-center justify-center relative">
                <div class="text-center">
                    <i class="fas fa-lock text-6xl mb-2 opacity-25"></i>
                    <h3 class="text-xl font-bold">Web Development</h3>
                </div>
                <div class="absolute top-2 right-2 bg-white text-gray-500 text-xs px-2 py-1 rounded-full font-medium">
                    In Progress
                </div>
            </div>
            <div class="p-5">
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-sm">Estimated Completion</span>
                        <span class="text-gray-700 text-sm font-medium">August 15, 2023</span>
                    </div>
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700 text-sm">Course Progress</span>
                        <span class="text-blue-500 text-sm font-medium">65% Complete</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700 text-sm">Remaining Lessons</span>
                        <span class="text-gray-700 text-sm font-medium">10 lessons</span>
                    </div>
                </div>
                <div>
                    <a href="#" class="block w-full bg-gray-500 text-white text-center py-2 rounded-lg hover:bg-gray-600 transition-colors">
                        <i class="fas fa-graduation-cap mr-1"></i> Continue Course
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Certificates -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold mb-4">Future Certifications</h3>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estimated Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Course 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <i class="fas fa-code text-blue-500"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Web Development</div>
                                        <div class="text-sm text-gray-500">Full Stack Certificate</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">August 15, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">65%</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Course 2 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fab fa-react text-gray-500"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">React JS</div>
                                        <div class="text-sm text-gray-500">Front-end Framework Certificate</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Coming Soon
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">October 10, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                        <div class="bg-gray-400 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">0%</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Course 3 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                        <i class="fas fa-database text-gray-500"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Database Design</div>
                                        <div class="text-sm text-gray-500">SQL and NoSQL Certificate</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Coming Soon
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">December 5, 2023</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 w-32 mr-2">
                                        <div class="bg-gray-400 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">0%</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Certificate Verification -->
    <div class="bg-white rounded-lg shadow-sm p-6 mt-6">
        <h3 class="text-xl font-semibold mb-4">Certificate Verification</h3>
        <p class="text-gray-600 mb-4">Share your certificate credentials with employers. Each certificate has a unique ID that can be verified through our system.</p>
        <div class="flex items-center bg-blue-50 text-blue-800 p-4 rounded-lg mb-4">
            <i class="fas fa-info-circle mr-3 text-xl"></i>
            <p class="text-sm">Your certificates include a QR code for easy verification. Employers can scan the code or enter the Certificate ID on our verification page.</p>
        </div>
        <a href="#" class="inline-block bg-primary text-white py-2 px-4 rounded-lg hover:bg-secondary transition-colors">
            Certificate Verification Portal
        </a>
    </div>
</div>
@endsection
