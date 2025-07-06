<div class="sidebar bg-white border-r shadow-sm overflow-y-auto">
    <!-- Logo and Sidebar Toggle -->
    <div class="flex items-center p-4 border-b">
        <button id="sidebar-toggle" class="text-gray-500 hover:text-primary mr-3 p-1 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 rounded-md transition-colors duration-200" aria-label="Toggle sidebar" title="Toggle sidebar">
            <i class="fas fa-bars text-lg"></i>
        </button>
        <a href="{{ route('student.dashboard') }}" class="sidebar-logo flex items-center">
            <img src="{{ asset('assets/images/logos/logo_color.png') }}" alt="CodeSprintX Logo" class="h-8">
            <span class="ml-2 font-semibold text-gray-800"></span>
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="py-4">
        <ul class="sidebar-nav space-y-1">
            <li>
                <a href="{{ route('student.dashboard') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.dashboard') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.dashboard') ? 'page' : 'false' }}">
                    <i class="fas fa-home w-5 text-center"></i>
                    <span class="nav-text ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.courses') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.courses') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.courses') ? 'page' : 'false' }}">
                    <i class="fas fa-book w-5 text-center"></i>
                    <span class="nav-text ml-3">My Courses</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.assignments') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.assignments') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.assignments') ? 'page' : 'false' }}">
                    <i class="fas fa-tasks w-5 text-center"></i>
                    <span class="nav-text ml-3">Assignments</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.progress') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.progress') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.progress') ? 'page' : 'false' }}">
                    <i class="fas fa-chart-line w-5 text-center"></i>
                    <span class="nav-text ml-3">My Progress</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.certificates') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.certificates') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.certificates') ? 'page' : 'false' }}">
                    <i class="fas fa-certificate w-5 text-center"></i>
                    <span class="nav-text ml-3">Certificates</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.support') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.support') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.support') ? 'page' : 'false' }}">
                    <i class="fas fa-headset w-5 text-center"></i>
                    <span class="nav-text ml-3">Support</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.profile') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.profile') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.profile') ? 'page' : 'false' }}">
                    <i class="fas fa-user w-5 text-center"></i>
                    <span class="nav-text ml-3">My Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('student.settings') }}" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-100 hover:text-primary transition-colors rounded-r-md {{ request()->routeIs('student.settings') ? 'bg-blue-50 text-primary border-r-4 border-primary' : '' }}" aria-current="{{ request()->routeIs('student.settings') ? 'page' : 'false' }}">
                    <i class="fas fa-cog w-5 text-center"></i>
                    <span class="nav-text ml-3">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
