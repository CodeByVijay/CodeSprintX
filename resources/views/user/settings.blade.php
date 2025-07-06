@extends('user.layouts.app')

@section('page-title', 'Account Settings')

@section('content')
<div class="container mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Account Settings</h2>
                <p class="text-gray-600">Manage your account preferences and profile information</p>
            </div>
        </div>
    </div>

    <!-- Settings Tabs and Content -->
    <div class="bg-white rounded-lg shadow-sm mb-6">
        <div class="border-b">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#profile" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-primary text-primary active">
                        Profile Information
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#password" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        Change Password
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#notifications" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        Notification Settings
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#billing" class="inline-block py-4 px-5 text-sm font-medium text-center border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300">
                        Billing & Payments
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Profile Information -->
    <div id="profile" class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Profile Information</h3>
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Profile Picture -->
                <div class="md:col-span-2 flex flex-col items-center">
                    <div class="relative mb-4 group profile-upload-container">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-200 cursor-pointer transition-all duration-200 group-hover:border-blue-300 profile-image-container">
                            <img src="https://placehold.co/200x200.png?text=User" alt="User Profile" class="w-full h-full object-cover">
                        </div>
                        <button type="button" class="absolute bottom-0 right-0 bg-gray-700 text-white rounded-full p-2 shadow-md hover:bg-gray-600 transition-colors duration-200 camera-upload-btn" title="Upload new photo">
                            <i class="fas fa-camera"></i>
                        </button>
                        <!-- Drag & Drop overlay -->
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                            <div class="text-white text-center">
                                <i class="fas fa-upload text-2xl mb-1"></i>
                                <p class="text-xs">Click or drag</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="text-primary hover:text-secondary text-sm font-medium transition-colors duration-200 change-photo-btn">Change Photo</button>
                        <span class="text-gray-400 mx-2">|</span>
                        <button type="button" class="text-red-500 hover:text-red-600 text-sm font-medium transition-colors duration-200 remove-photo-btn">Remove</button>
                    </div>
                    <p class="text-xs text-gray-500 mt-2 text-center max-w-xs">
                        Supported formats: JPG, PNG, GIF. Max size: 5MB.
                        <br>Recommended: 400x400px square image
                    </p>
                </div>

                <!-- First Name -->
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="first-name" value="John" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Last Name -->
                <div>
                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="last-name" value="Doe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" value="johndoe@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" value="+91 98765 43210" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="dob" value="1995-08-15" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer-not-to-say">Prefer not to say</option>
                    </select>
                </div>

                <!-- Address -->
                <div class="md:col-span-2">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">123 Main Street, Apartment 4B, Mumbai, Maharashtra, 400001, India</textarea>
                </div>

                <!-- Bio -->
                <div class="md:col-span-2">
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-700">Bio</label>
                    <textarea id="bio" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">I'm a Computer Science student passionate about web development and software engineering. Currently enrolled in the Web Development internship program at CodeSprintX to enhance my skills and build real-world projects.</textarea>
                </div>
            </div>

            <!-- Social Media Links -->
            <h4 class="font-semibold text-gray-800 mb-3">Social Media Links</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- LinkedIn -->
                <div class="flex items-center">
                    <div class="bg-blue-100 p-2 rounded-l-lg">
                        <i class="fab fa-linkedin-in text-blue-500"></i>
                    </div>
                    <input type="text" placeholder="LinkedIn Profile URL" value="linkedin.com/in/johndoe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- GitHub -->
                <div class="flex items-center">
                    <div class="bg-gray-800 p-2 rounded-l-lg">
                        <i class="fab fa-github text-white"></i>
                    </div>
                    <input type="text" placeholder="GitHub Profile URL" value="github.com/johndoe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- Twitter -->
                <div class="flex items-center">
                    <div class="bg-blue-400 p-2 rounded-l-lg">
                        <i class="fab fa-twitter text-white"></i>
                    </div>
                    <input type="text" placeholder="Twitter Profile URL" value="twitter.com/johndoe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>

                <!-- YouTube -->
                <div class="flex items-center">
                    <div class="bg-red-600 p-2 rounded-l-lg">
                        <i class="fab fa-youtube text-white"></i>
                    </div>
                    <input type="text" placeholder="YouTube Channel URL" value="youtube.com/@johndoe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>

            <!-- Skills -->
            <h4 class="font-semibold text-gray-800 mb-3">Skills</h4>
            <div class="mb-6">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center">
                        HTML
                        <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center">
                        CSS
                        <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center">
                        JavaScript
                        <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center">
                        PHP
                        <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center">
                        Laravel
                        <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                </div>
                <div class="flex">
                    <input type="text" placeholder="Add a skill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <button type="button" class="bg-blue-500 text-white px-4 rounded-r-lg hover:bg-blue-600">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Save Button -->
            <div class="flex justify-end">
                <button type="submit" class="inline-block bg-primary text-white py-2 px-6 rounded-lg hover:bg-secondary transition-colors">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Change Password Section -->
    <div id="password" class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Change Password</h3>
        <form>
            <div class="space-y-4 max-w-md">
                <!-- Current Password -->
                <div>
                    <label for="current-password" class="block mb-2 text-sm font-medium text-gray-700">Current Password</label>
                    <div class="relative">
                        <input type="password" id="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle" data-target="current-password">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                        </button>
                    </div>
                </div>

                <!-- New Password -->
                <div>
                    <label for="new-password" class="block mb-2 text-sm font-medium text-gray-700">New Password</label>
                    <div class="relative">
                        <input type="password" id="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle" data-target="new-password">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                        </button>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Password must be at least 8 characters and include a mix of letters, numbers, and special characters.</p>
                </div>

                <!-- Confirm New Password -->
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-700">Confirm New Password</label>
                    <div class="relative">
                        <input type="password" id="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle" data-target="confirm-password">
                            <i class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                        </button>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="pt-4">
                    <button type="submit" class="inline-block bg-primary text-white py-2 px-6 rounded-lg hover:bg-secondary transition-colors">
                        Update Password
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Notification Settings -->
    <div id="notifications" class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Notification Settings</h3>
        <form>
            <div class="space-y-6">
                <!-- Email Notifications -->
                <div>
                    <h4 class="font-medium text-gray-800 mb-3">Email Notifications</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="email-course-updates" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="email-course-updates" class="text-sm font-medium text-gray-700">Course Updates</label>
                                <p class="text-xs text-gray-500">Receive emails about new lessons, materials, and updates to your enrolled courses.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="email-assignments" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="email-assignments" class="text-sm font-medium text-gray-700">Assignment Reminders</label>
                                <p class="text-xs text-gray-500">Receive reminders about upcoming and pending assignments.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="email-feedback" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="email-feedback" class="text-sm font-medium text-gray-700">Feedback Notifications</label>
                                <p class="text-xs text-gray-500">Receive emails when you get feedback on assignments or projects.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="email-promotions" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="email-promotions" class="text-sm font-medium text-gray-700">Promotional Emails</label>
                                <p class="text-xs text-gray-500">Receive emails about new courses, special offers, and promotions.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Push Notifications -->
                <div>
                    <h4 class="font-medium text-gray-800 mb-3">Push Notifications</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="push-course-updates" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="push-course-updates" class="text-sm font-medium text-gray-700">Course Updates</label>
                                <p class="text-xs text-gray-500">Receive notifications about new lessons and materials.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="push-assignments" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="push-assignments" class="text-sm font-medium text-gray-700">Assignment Deadlines</label>
                                <p class="text-xs text-gray-500">Receive notifications about assignment deadlines.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex items-center h-6 mt-0.5">
                                <input id="push-messages" type="checkbox" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                            <div class="ml-3">
                                <label for="push-messages" class="text-sm font-medium text-gray-700">Messages</label>
                                <p class="text-xs text-gray-500">Receive notifications when you get new messages from mentors or support.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Save Button -->
                <div>
                    <button type="submit" class="inline-block bg-primary text-white py-2 px-6 rounded-lg hover:bg-secondary transition-colors">
                        Save Preferences
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Billing & Payments -->
    <div id="billing" class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-xl font-semibold mb-4">Billing & Payments</h3>

        <!-- Subscription Info -->
        <div class="mb-8">
            <h4 class="font-medium text-gray-800 mb-3">Current Plan</h4>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="font-semibold text-lg">Web Development - 6 Month Plan</h5>
                        <p class="text-gray-600 text-sm">Premium internship program with certificate</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Active</span>
                </div>
                <div class="mt-3 border-t border-gray-200 pt-3">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Start Date:</span>
                        <span class="font-medium">January 15, 2023</span>
                    </div>
                    <div class="flex justify-between items-center text-sm mt-1">
                        <span class="text-gray-600">End Date:</span>
                        <span class="font-medium">July 15, 2023</span>
                    </div>
                    <div class="flex justify-between items-center text-sm mt-1">
                        <span class="text-gray-600">Amount Paid:</span>
                        <span class="font-medium">₹24,999</span>
                    </div>
                    <div class="flex justify-between items-center text-sm mt-1">
                        <span class="text-gray-600">Payment Method:</span>
                        <span class="font-medium">Credit Card (ending in 4242)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment History -->
        <div class="mb-8">
            <h4 class="font-medium text-gray-800 mb-3">Payment History</h4>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jan 15, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Web Development - 6 Month Plan</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹24,999</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Paid
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary hover:text-secondary">
                                <a href="#"><i class="fas fa-download mr-1"></i> Download</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mar 10, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">HTML & CSS Certificate Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹1,499</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Paid
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary hover:text-secondary">
                                <a href="#"><i class="fas fa-download mr-1"></i> Download</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Payment Methods -->
        <div>
            <div class="flex justify-between items-center mb-3">
                <h4 class="font-medium text-gray-800">Payment Methods</h4>
                <button type="button" class="text-primary hover:text-secondary text-sm">
                    <i class="fas fa-plus mr-1"></i> Add New
                </button>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="bg-blue-100 p-2 rounded-lg mr-3">
                            <i class="far fa-credit-card text-blue-500"></i>
                        </div>
                        <div>
                            <h5 class="font-medium">Credit Card</h5>
                            <p class="text-gray-600 text-sm">Visa ending in 4242</p>
                        </div>
                    </div>
                    <div>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs mr-2">Default</span>
                        <button type="button" class="text-gray-500 hover:text-gray-700 text-sm">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="text-red-500 hover:text-red-700 text-sm ml-2">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Profile image functionality - Use more reliable selectors
    const profileImageContainer = document.querySelector('.profile-image-container');
    const profileImage = profileImageContainer ? profileImageContainer.querySelector('img') : null;
    const cameraButton = document.querySelector('.camera-upload-btn');
    const changePhotoBtn = document.querySelector('.change-photo-btn');
    const removePhotoBtn = document.querySelector('.remove-photo-btn');
    const profileUploadContainer = document.querySelector('.profile-upload-container');

    // Create hidden file input
    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';
    fileInput.style.display = 'none';
    document.body.appendChild(fileInput);

    // Function to handle image preview
    function previewImage(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                if (profileImage) {
                    profileImage.src = e.target.result;
                    console.log('Profile image updated');
                }
            };
            reader.readAsDataURL(file);
        }
    }

    // Function to reset image to default
    function resetToDefaultImage() {
        if (profileImage) {
            profileImage.src = 'https://placehold.co/200x200.png?text=User';
            console.log('Profile image reset to default');
        }
    }

    // Add event listeners using direct element references
    if (changePhotoBtn) {
        changePhotoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Change Photo button clicked');
            fileInput.click();
        });
    }

    if (removePhotoBtn) {
        removePhotoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Remove Photo button clicked');

            // Show confirmation dialog
            if (confirm('Are you sure you want to remove your profile photo?')) {
                resetToDefaultImage();
                showNotification('Profile photo removed successfully', 'success');
            }
        });
    }

    if (cameraButton) {
        cameraButton.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Camera button clicked');
            fileInput.click();
        });
    }

    if (profileImageContainer) {
        profileImageContainer.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Profile image container clicked');
            fileInput.click();
        });
    }

    // Keep the fallback event delegation
    document.addEventListener('click', function(e) {
        // Handle Change Photo button click - look for button containing "Change Photo" text
        if (e.target.closest('button') && e.target.closest('button').textContent.trim() === 'Change Photo') {
            e.preventDefault();
            console.log('Change Photo button clicked (fallback)');
            fileInput.click();
        }

        // Handle Remove button click - look for button containing "Remove" text
        if (e.target.closest('button') && e.target.closest('button').textContent.trim() === 'Remove') {
            e.preventDefault();
            console.log('Remove Photo button clicked (fallback)');

            // Show confirmation dialog
            if (confirm('Are you sure you want to remove your profile photo?')) {
                resetToDefaultImage();
                showNotification('Profile photo removed successfully', 'success');
            }
        }

        // Handle camera button click - look for camera icon button
        if (e.target.closest('button') && e.target.closest('button').querySelector('.fa-camera')) {
            e.preventDefault();
            console.log('Camera button clicked (fallback)');
            fileInput.click();
        }
    });

    // Handle file selection
    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            console.log('File selected:', file.name, file.type, file.size);

            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                showNotification('File size must be less than 5MB', 'error');
                return;
            }

            // Validate file type
            if (!file.type.startsWith('image/')) {
                showNotification('Please select a valid image file', 'error');
                return;
            }

            previewImage(file);
            showNotification('Photo updated successfully! Don\'t forget to save your changes.', 'success');

            // Here you would typically upload the file to the server
            // uploadProfileImage(file);
        }
    });

    // Drag and drop functionality
    if (profileUploadContainer) {
        profileUploadContainer.addEventListener('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.style.opacity = '0.7';
            this.style.transform = 'scale(1.02)';
            profileImageContainer.classList.add('border-blue-400');
        });

        profileUploadContainer.addEventListener('dragleave', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.style.opacity = '1';
            this.style.transform = 'scale(1)';
            profileImageContainer.classList.remove('border-blue-400');
        });

        profileUploadContainer.addEventListener('drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.style.opacity = '1';
            this.style.transform = 'scale(1)';
            profileImageContainer.classList.remove('border-blue-400');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                const file = files[0];
                console.log('File dropped:', file.name);

                // Validate file
                if (file.size > 5 * 1024 * 1024) {
                    showNotification('File size must be less than 5MB', 'error');
                    return;
                }

                if (!file.type.startsWith('image/')) {
                    showNotification('Please select a valid image file', 'error');
                    return;
                }

                previewImage(file);
                showNotification('Photo updated successfully! Don\'t forget to save your changes.', 'success');
            }
        });
    }

    // Skills functionality
    initializeSkillsManagement();

    // Tab functionality
    initializeTabSwitching();

    // Form validation
    initializeFormValidation();

    // Password toggle functionality
    initializePasswordToggle();
});

// Password toggle functionality
function initializePasswordToggle() {
    const passwordToggleBtns = document.querySelectorAll('.password-toggle');

    passwordToggleBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('data-target');
            const passwordInput = document.getElementById(targetId);
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
}

// Skills management functionality
function initializeSkillsManagement() {
    const addSkillBtn = document.querySelector('button:has(i.fa-plus)');
    const skillInput = document.querySelector('input[placeholder="Add a skill"]');
    const skillsContainer = document.querySelector('.flex.flex-wrap.gap-2.mb-3');

    if (addSkillBtn && skillInput && skillsContainer) {
        // Add skill functionality
        function addSkill() {
            const skillName = skillInput.value.trim();
            if (skillName && skillName.length > 0) {
                // Check if skill already exists
                const existingSkills = Array.from(skillsContainer.querySelectorAll('span')).map(span =>
                    span.textContent.replace('×', '').trim()
                );

                if (existingSkills.includes(skillName)) {
                    showNotification('This skill already exists', 'warning');
                    return;
                }

                // Create skill badge
                const skillBadge = document.createElement('span');
                skillBadge.className = 'px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm flex items-center';
                skillBadge.innerHTML = `
                    ${skillName}
                    <button type="button" class="ml-2 text-blue-500 hover:text-blue-700">
                        <i class="fas fa-times"></i>
                    </button>
                `;

                skillsContainer.appendChild(skillBadge);
                skillInput.value = '';
                showNotification('Skill added successfully!', 'success');
            }
        }

        // Add skill on button click
        addSkillBtn.addEventListener('click', addSkill);

        // Add skill on Enter key press
        skillInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addSkill();
            }
        });

        // Remove skill functionality
        skillsContainer.addEventListener('click', function(e) {
            if (e.target.closest('button') && e.target.closest('button').querySelector('i.fa-times')) {
                e.target.closest('span').remove();
                showNotification('Skill removed successfully!', 'success');
            }
        });
    }
}

// Tab switching functionality
function initializeTabSwitching() {
    const tabLinks = document.querySelectorAll('a[href^="#"]');
    const tabContents = document.querySelectorAll('[id]');

    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetContent = document.getElementById(targetId);

            if (targetContent) {
                // Remove active classes from all tabs
                tabLinks.forEach(tab => {
                    tab.classList.remove('border-primary', 'text-primary', 'active');
                    tab.classList.add('border-transparent');
                });

                // Add active classes to clicked tab
                this.classList.add('border-primary', 'text-primary', 'active');
                this.classList.remove('border-transparent');

                // Hide all tab contents
                tabContents.forEach(content => {
                    if (content.id && ['profile', 'password', 'notifications', 'billing'].includes(content.id)) {
                        content.style.display = 'none';
                    }
                });

                // Show target content
                targetContent.style.display = 'block';

                // Smooth scroll to content
                targetContent.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Initialize first tab as active
    const firstTab = tabLinks[0];
    const firstContent = document.getElementById('profile');
    if (firstTab && firstContent) {
        firstTab.classList.add('border-primary', 'text-primary', 'active');
        firstTab.classList.remove('border-transparent');

        // Hide other contents initially
        tabContents.forEach(content => {
            if (content.id && ['password', 'notifications', 'billing'].includes(content.id)) {
                content.style.display = 'none';
            }
        });
    }
}

// Form validation
function initializeFormValidation() {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic validation
            const requiredFields = form.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    field.classList.remove('border-gray-300');
                } else {
                    field.classList.remove('border-red-500');
                    field.classList.add('border-gray-300');
                }
            });

            // Email validation
            const emailFields = form.querySelectorAll('input[type="email"]');
            emailFields.forEach(field => {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (field.value && !emailRegex.test(field.value)) {
                    isValid = false;
                    field.classList.add('border-red-500');
                }
            });

            // Password validation for change password form
            if (form.querySelector('#new-password')) {
                const newPassword = form.querySelector('#new-password');
                const confirmPassword = form.querySelector('#confirm-password');

                if (newPassword.value && newPassword.value.length < 8) {
                    isValid = false;
                    newPassword.classList.add('border-red-500');
                    showNotification('Password must be at least 8 characters long', 'error');
                }

                if (newPassword.value !== confirmPassword.value) {
                    isValid = false;
                    confirmPassword.classList.add('border-red-500');
                    showNotification('Passwords do not match', 'error');
                }
            }

            if (isValid) {
                // Here you would submit the form data to the server
                showNotification('Settings saved successfully!', 'success');
                console.log('Form would be submitted:', new FormData(form));
            } else {
                showNotification('Please fix the errors before submitting', 'error');
            }
        });
    });
}

// Notification system
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification-toast');
    existingNotifications.forEach(notif => notif.remove());

    // Create notification element
    const notification = document.createElement('div');
    notification.className = 'notification-toast fixed top-4 right-4 z-50 max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg p-4 transition-all duration-300 transform translate-x-full';

    // Set color based on type
    let bgColor = 'bg-blue-50';
    let borderColor = 'border-blue-200';
    let textColor = 'text-blue-800';
    let iconClass = 'fa-info-circle';

    switch (type) {
        case 'success':
            bgColor = 'bg-green-50';
            borderColor = 'border-green-200';
            textColor = 'text-green-800';
            iconClass = 'fa-check-circle';
            break;
        case 'error':
            bgColor = 'bg-red-50';
            borderColor = 'border-red-200';
            textColor = 'text-red-800';
            iconClass = 'fa-exclamation-circle';
            break;
        case 'warning':
            bgColor = 'bg-yellow-50';
            borderColor = 'border-yellow-200';
            textColor = 'text-yellow-800';
            iconClass = 'fa-exclamation-triangle';
            break;
    }

    notification.innerHTML = `
        <div class="flex items-center ${bgColor} ${borderColor} ${textColor} p-3 rounded">
            <i class="fas ${iconClass} mr-3"></i>
            <span class="flex-1 text-sm font-medium">${message}</span>
            <button type="button" class="ml-4 text-gray-400 hover:text-gray-600" onclick="this.closest('.notification-toast').remove()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;

    document.body.appendChild(notification);

    // Show animation
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);

    // Auto hide after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => notification.remove(), 300);
    }, 5000);
}

// Upload profile image function (to be implemented with your backend)
function uploadProfileImage(file) {
    const formData = new FormData();
    formData.append('profile_image', file);

    // Example implementation - replace with your actual endpoint
    /*
    fetch('/api/upload-profile-image', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification('Profile image uploaded successfully!', 'success');
        } else {
            showNotification('Failed to upload image. Please try again.', 'error');
        }
    })
    .catch(error => {
        console.error('Upload error:', error);
        showNotification('Upload failed. Please try again.', 'error');
    });
    */
}
</script>
@endsection
