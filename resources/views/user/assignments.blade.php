@extends('user.layouts.app')

@section('page-title', 'My Assignments')

@section('content')
<div class="px-4 md:container md:mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">My Assignments</h2>
                <p class="text-sm md:text-base text-gray-600">View and manage all your course assignments</p>
            </div>
            <div class="mt-4 md:mt-0 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                <div class="relative">
                    <input type="text" placeholder="Search assignments..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 md:p-2.5 pl-10">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    <option value="">All Courses</option>
                    <option value="web-dev">Web Development</option>
                    <option value="react">React JS</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-lg shadow-sm mb-6">
        <div class="border-b">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-primary text-primary active">
                        Pending (3)
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        Submitted (2)
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        Graded (5)
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        All (10)
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Assignments List -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
        <div class="responsive-table">
            <table class="min-w-full divide-y divide-gray-200 responsive-table-card" id="assignments-table">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assignment</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Assignment 1 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Assignment">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-red-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Portfolio Project</div>
                                    <div class="text-sm text-gray-500">Create a personal portfolio website using HTML/CSS</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="text-sm text-gray-900">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Due Date">
                            <div class="text-sm text-gray-900">Jun 15, 2023</div>
                            <div class="text-xs text-red-600">Due in 2 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Status">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">Start</a>
                        </td>
                    </tr>

                    <!-- Assignment 2 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Assignment">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-yellow-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">JavaScript Quiz</div>
                                    <div class="text-sm text-gray-500">20 multiple choice questions on JavaScript fundamentals</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="text-sm text-gray-900">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Due Date">
                            <div class="text-sm text-gray-900">Jun 18, 2023</div>
                            <div class="text-xs text-yellow-600">Due in 5 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Status">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">Start</a>
                        </td>
                    </tr>

                    <!-- Assignment 3 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Assignment">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">PHP Blog Project</div>
                                    <div class="text-sm text-gray-500">Build a simple blog with PHP and MySQL</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="text-sm text-gray-900">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Due Date">
                            <div class="text-sm text-gray-900">Jun 23, 2023</div>
                            <div class="text-xs text-green-600">Due in 10 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Status">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">Start</a>
                        </td>
                    </tr>

                    <!-- Assignment 4 (Submitted) -->
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Assignment">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-blue-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">CSS Animation Project</div>
                                    <div class="text-sm text-gray-500">Create interactive animations using CSS</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="text-sm text-gray-900">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Due Date">
                            <div class="text-sm text-gray-900">Jun 5, 2023</div>
                            <div class="text-xs text-gray-500">Submitted on Jun 4</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Status">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Submitted
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">View</a>
                        </td>
                    </tr>

                    <!-- Assignment 5 (Graded) -->
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Assignment">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                    <i class="fas fa-file-alt text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">HTML Basics Quiz</div>
                                    <div class="text-sm text-gray-500">15 questions on HTML fundamentals</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Course">
                            <div class="text-sm text-gray-900">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Due Date">
                            <div class="text-sm text-gray-900">May 25, 2023</div>
                            <div class="text-xs text-gray-500">Submitted on May 24</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" data-label="Status">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Graded: 92%
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" data-label="Actions">
                            <a href="#" class="text-primary hover:text-secondary">View Feedback</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6 mt-4">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">10</span> results
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-primary border-primary text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            1
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            2
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            3
                        </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all assignment rows
    const assignmentRows = document.querySelectorAll('#assignments-table tbody tr');

    // Add tab-link class and data attributes to existing tabs
    const tabLinks = document.querySelectorAll('ul.flex.flex-wrap.-mb-px a[href="#"]');
    tabLinks.forEach(link => {
        const text = link.textContent.trim();
        if (text.includes('Pending')) {
            link.classList.add('tab-link');
            link.setAttribute('data-status', 'pending');
        } else if (text.includes('Submitted')) {
            link.classList.add('tab-link');
            link.setAttribute('data-status', 'submitted');
        } else if (text.includes('Graded')) {
            link.classList.add('tab-link');
            link.setAttribute('data-status', 'graded');
        } else if (text.includes('All')) {
            link.classList.add('tab-link');
            link.setAttribute('data-status', 'all');
        }
    });

    // Add data-status attributes to table rows based on their status
    assignmentRows.forEach(row => {
        const statusElement = row.querySelector('td[data-label="Status"] span');
        if (statusElement) {
            const statusText = statusElement.textContent.trim().toLowerCase();
            if (statusText.includes('pending')) {
                row.setAttribute('data-status', 'pending');
            } else if (statusText.includes('submitted')) {
                row.setAttribute('data-status', 'submitted');
            } else if (statusText.includes('graded')) {
                row.setAttribute('data-status', 'graded');
            }
        }
    });

    // Tab click handler
    document.querySelectorAll('.tab-link').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            const targetStatus = this.getAttribute('data-status');

            // Remove active class from all tabs
            document.querySelectorAll('.tab-link').forEach(t => {
                t.classList.remove('border-primary', 'text-primary', 'active');
                t.classList.add('border-transparent');
            });

            // Add active class to clicked tab
            this.classList.add('border-primary', 'text-primary', 'active');
            this.classList.remove('border-transparent');

            // Show/hide assignments based on status
            assignmentRows.forEach(row => {
                if (targetStatus === 'all') {
                    row.style.display = '';
                } else {
                    const rowStatus = row.getAttribute('data-status');
                    if (rowStatus === targetStatus) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });

            // Update counts in tabs
            updateTabCounts();
        });
    });

    // Function to update tab counts
    function updateTabCounts() {
        const visibleRows = Array.from(assignmentRows).filter(row => row.style.display !== 'none');
        const pendingCount = visibleRows.filter(row => row.getAttribute('data-status') === 'pending').length;
        const submittedCount = visibleRows.filter(row => row.getAttribute('data-status') === 'submitted').length;
        const gradedCount = visibleRows.filter(row => row.getAttribute('data-status') === 'graded').length;
        const totalCount = assignmentRows.length;

        // Update tab text with counts
        document.querySelectorAll('.tab-link').forEach(tab => {
            const status = tab.getAttribute('data-status');
            let originalText = tab.textContent.replace(/\(\d+\)/, '').trim();

            switch(status) {
                case 'pending':
                    tab.textContent = `Pending (${pendingCount})`;
                    break;
                case 'submitted':
                    tab.textContent = `Submitted (${submittedCount})`;
                    break;
                case 'graded':
                    tab.textContent = `Graded (${gradedCount})`;
                    break;
                case 'all':
                    tab.textContent = `All (${totalCount})`;
                    break;
            }
        });
    }

    // Search functionality
    const searchInput = document.querySelector('input[placeholder="Search assignments..."]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            assignmentRows.forEach(row => {
                const assignmentName = row.querySelector('td[data-label="Assignment"] .text-sm.font-medium');
                const assignmentDescription = row.querySelector('td[data-label="Assignment"] .text-sm.text-gray-500');
                const courseName = row.querySelector('td[data-label="Course"] .text-sm');

                if (assignmentName || assignmentDescription || courseName) {
                    const text = (
                        (assignmentName ? assignmentName.textContent : '') + ' ' +
                        (assignmentDescription ? assignmentDescription.textContent : '') + ' ' +
                        (courseName ? courseName.textContent : '')
                    ).toLowerCase();

                    if (searchTerm === '' || text.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });

            // If search is cleared, apply current tab filter
            if (searchTerm.trim() === '') {
                const activeTab = document.querySelector('.tab-link.active');
                if (activeTab) {
                    activeTab.click();
                }
            }
        });
    }

    // Course filter functionality
    const courseSelect = document.querySelector('select');
    if (courseSelect) {
        courseSelect.addEventListener('change', function() {
            const selectedCourse = this.value.toLowerCase();

            assignmentRows.forEach(row => {
                const courseElement = row.querySelector('td[data-label="Course"] .text-sm');
                if (courseElement) {
                    const courseName = courseElement.textContent.toLowerCase();

                    if (selectedCourse === '' || courseName.includes(selectedCourse.replace('-', ' '))) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });

            // Apply current tab filter after course filter
            if (selectedCourse === '') {
                const activeTab = document.querySelector('.tab-link.active');
                if (activeTab) {
                    activeTab.click();
                }
            }
        });
    }

    // Initialize with correct counts and set first tab as active
    updateTabCounts();

    // Activate the first tab (Pending) by default
    const firstTab = document.querySelector('.tab-link[data-status="pending"]');
    if (firstTab) {
        firstTab.click();
    }
});
</script>
@endsection
