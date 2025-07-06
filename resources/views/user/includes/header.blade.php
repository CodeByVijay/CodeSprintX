<header class="bg-white border-b shadow-sm sticky top-0 z-20">
    <div class="px-4 py-3 md:container md:mx-auto">
        <div class="flex justify-between items-center">
            <!-- Left side: Page title -->
            <div>
                <h1 class="text-lg md:text-xl font-semibold text-gray-800">
                    @yield('page-title', 'Dashboard')
                </h1>
            </div>

            <!-- Right side: User profile & notifications -->
            <div class="flex items-center space-x-3 md:space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button id="notification-button" class="text-gray-600 hover:text-primary p-1 relative focus:outline-none" aria-expanded="false" aria-haspopup="true">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                    </button>

                    <!-- Notification Dropdown -->
                    <div id="notification-dropdown" class="dropdown-menu absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg z-50 border hidden" style="display: none;">
                        <div class="py-3 px-4 border-b bg-gray-50">
                            <div class="flex justify-between items-center">
                                <h3 class="text-sm font-semibold text-gray-800">Notifications</h3>
                                <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">3 New</span>
                            </div>
                        </div>

                        <div class="max-h-96 overflow-y-auto">
                            <!-- Notification Item 1 -->
                            <div class="px-4 py-3 border-b hover:bg-gray-50 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-user-plus text-blue-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm text-gray-800 font-medium">New user registration</p>
                                        <p class="text-xs text-gray-500 mt-1">A new user has registered to your platform</p>
                                        <p class="text-xs text-gray-400 mt-1">5 minutes ago</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full inline-block"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Notification Item 2 -->
                            <div class="px-4 py-3 border-b hover:bg-gray-50 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check-circle text-green-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm text-gray-800 font-medium">Assignment submitted</p>
                                        <p class="text-xs text-gray-500 mt-1">Your assignment has been successfully submitted</p>
                                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="w-2 h-2 bg-green-500 rounded-full inline-block"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Notification Item 3 -->
                            <div class="px-4 py-3 border-b hover:bg-gray-50 cursor-pointer">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-exclamation-triangle text-yellow-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm text-gray-800 font-medium">Deadline reminder</p>
                                        <p class="text-xs text-gray-500 mt-1">Assignment deadline is approaching in 2 days</p>
                                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="w-2 h-2 bg-yellow-500 rounded-full inline-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View All Button -->
                        <div class="py-3 px-4 border-t bg-gray-50">
                            <a href="#" class="block text-center text-sm text-blue-600 hover:text-blue-800 font-medium">
                                View All Notifications
                            </a>
                        </div>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="relative">
                    <button id="profile-button" class="flex items-center space-x-1 md:space-x-2 focus:outline-none" aria-expanded="false" aria-haspopup="true">
                        <div class="w-8 h-8 md:w-10 md:h-10 rounded-full overflow-hidden border-2 border-gray-200">
                            <img src="https://placehold.co/200x200.png?text=User" alt="User Profile" class="w-full h-full object-cover">
                        </div>
                        <span class="hidden md:block text-gray-700">John Doe</span>
                        <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                    </button>

                    <!-- Profile Dropdown -->
                    <div id="profile-dropdown" class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 border hidden" style="display: none;">
                        <div class="py-2 px-4 border-b">
                            <p class="text-sm font-medium text-gray-700">John Doe</p>
                            <p class="text-xs text-gray-500">johndoe@example.com</p>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="{{ route('student.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user mr-2 text-gray-500"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('student.settings') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-cog mr-2 text-gray-500"></i> Settings
                                </a>
                            </li>
                            <li class="border-t">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
// Simple and robust header dropdown functionality
(function() {
    // Wait for DOM to be ready
    function initDropdowns() {
        console.log('Initializing header dropdowns...');

        // Get elements
        const notificationButton = document.getElementById('notification-button');
        const notificationDropdown = document.getElementById('notification-dropdown');
        const profileButton = document.getElementById('profile-button');
        const profileDropdown = document.getElementById('profile-dropdown');

        console.log('Elements found:', {
            notificationButton: !!notificationButton,
            notificationDropdown: !!notificationDropdown,
            profileButton: !!profileButton,
            profileDropdown: !!profileDropdown
        });

        // Check if all elements exist
        if (!notificationButton || !notificationDropdown || !profileButton || !profileDropdown) {
            console.error('Header dropdown elements not found!');
            return;
        }

        // Function to hide dropdown
        function hideDropdown(dropdown, button) {
            dropdown.classList.add('hidden');
            dropdown.style.display = 'none';
            button.setAttribute('aria-expanded', 'false');
        }

        // Function to show dropdown
        function showDropdown(dropdown, button) {
            dropdown.classList.remove('hidden');
            dropdown.style.display = 'block';
            button.setAttribute('aria-expanded', 'true');
        }

        // Function to check if dropdown is visible
        function isDropdownVisible(dropdown) {
            return !dropdown.classList.contains('hidden') && dropdown.style.display !== 'none';
        }

        // Notification button click handler
        notificationButton.onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Notification button clicked!');

            // Close profile dropdown
            hideDropdown(profileDropdown, profileButton);

            // Toggle notification dropdown
            if (isDropdownVisible(notificationDropdown)) {
                hideDropdown(notificationDropdown, notificationButton);
                console.log('Notification dropdown closed');
            } else {
                showDropdown(notificationDropdown, notificationButton);
                console.log('Notification dropdown opened');
            }
        };

        // Profile button click handler
        profileButton.onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Profile button clicked!');

            // Close notification dropdown
            hideDropdown(notificationDropdown, notificationButton);

            // Toggle profile dropdown
            if (isDropdownVisible(profileDropdown)) {
                hideDropdown(profileDropdown, profileButton);
                console.log('Profile dropdown closed');
            } else {
                showDropdown(profileDropdown, profileButton);
                console.log('Profile dropdown opened');
            }
        };

        // Close dropdowns when clicking outside
        document.onclick = function(e) {
            if (!notificationButton.contains(e.target) && !notificationDropdown.contains(e.target)) {
                hideDropdown(notificationDropdown, notificationButton);
            }

            if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                hideDropdown(profileDropdown, profileButton);
            }
        };

        // Close dropdowns on Escape key
        document.onkeydown = function(e) {
            if (e.key === 'Escape') {
                hideDropdown(notificationDropdown, notificationButton);
                hideDropdown(profileDropdown, profileButton);
            }
        };

        console.log('Header dropdowns initialized successfully!');
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDropdowns);
    } else {
        initDropdowns();
    }

    // Also try after a short delay to ensure all elements are loaded
    setTimeout(initDropdowns, 100);
})();
</script>
