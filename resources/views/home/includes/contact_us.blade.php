<section id="contact" class="py-12 sm:py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Get In Touch</h2>
            <p class="text-gray-600 px-4">Have questions? We're here to help!</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
            <!-- Contact Information -->
            <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                <h3 class="text-lg sm:text-xl font-semibold mb-6">Contact Information</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-3 sm:mr-4 flex-shrink-0">
                            <i class="fas fa-envelope text-sm"></i>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-medium text-gray-800 mb-1">Email</h4>
                            <a href="mailto:info@codesprintx.com" class="text-primary hover:text-secondary text-sm sm:text-base break-all overflow-wrap-anywhere transition-colors duration-300 hover:underline">info@codesprintx.com</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-3 sm:mr-4 flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-sm"></i>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-medium text-gray-800 mb-1">Address</h4>
                            <p class="text-gray-600 text-sm sm:text-base">New Delhi, India, 110001</p>
                        </div>
                    </div>

                    <!-- <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-3 sm:mr-4 flex-shrink-0">
                            <i class="fas fa-phone-alt text-sm"></i>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-medium text-gray-800 mb-1">Phone</h4>
                            <p class="text-gray-600 text-sm sm:text-base">+91 98765 43210</p>
                        </div>
                    </div> -->
                </div>

                <div class="mt-8">
                    <h4 class="font-medium text-gray-800 mb-4">Follow Us</h4>
                    <div class="flex flex-wrap gap-3 sm:gap-4">
                        {{-- <a href="#" class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-700 transition-colors transform hover:scale-105">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="bg-blue-400 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-500 transition-colors transform hover:scale-105">
                            <i class="fab fa-twitter text-sm"></i>
                        </a> --}}
                        <a href="#" class="bg-pink-600 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-pink-700 transition-colors transform hover:scale-105">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/codesprintx" target="_blank" class="bg-blue-700 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-800 transition-colors transform hover:scale-105">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                <h3 class="text-lg sm:text-xl font-semibold mb-6">Send us a Message</h3>

                <form action="#" method="POST" class="space-y-4 sm:space-y-5">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2 text-sm sm:text-base font-medium">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm sm:text-base transition-all duration-300" required>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 mb-2 text-sm sm:text-base font-medium">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm sm:text-base transition-all duration-300" required>
                    </div>

                    <div>
                        <label for="phone" class="block text-gray-700 mb-2 text-sm sm:text-base font-medium">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm sm:text-base transition-all duration-300">
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 mb-2 text-sm sm:text-base font-medium">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm sm:text-base resize-vertical transition-all duration-300" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-3 sm:py-4 px-4 rounded-md hover:bg-secondary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary font-medium text-sm sm:text-base transform hover:scale-[1.02] active:scale-[0.98]">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
