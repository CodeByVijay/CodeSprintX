@extends('home.partials.app')
@section('content')

<?php
$pageTitle = "Contact Us";
$pageDescription = "Get in touch with CodeSprintX. We're here to answer your questions and provide support for all your internship and career development needs.";
?>

<!-- Page Header -->
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl max-w-2xl mx-auto">We're here to help and answer any questions you might have</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Get In Touch</h2>
            <p class="text-gray-600">Have questions? We're here to help!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div class="bg-gray-50 rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold mb-6">Contact Information</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-4">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Email</h4>
                            <p class="text-gray-600">info@codesprintx.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-4">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Address</h4>
                            <p class="text-gray-600">New Delhi, India, 110001</p>
                        </div>
                    </div>

                    <!-- <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 text-white mr-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Phone</h4>
                            <p class="text-gray-600">+91 98765 43210</p>
                        </div>
                    </div> -->
                </div>

                <div class="mt-8">
                    <h4 class="font-medium text-gray-800 mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        {{-- <a href="#" class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-blue-400 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a> --}}
                        <a href="#" class="bg-pink-600 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-pink-700 transition-colors">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/codesprintx" target="_blank" class="bg-blue-700 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-800 transition-colors">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-md p-8 border border-gray-100">
                <h3 class="text-xl font-semibold mb-6">Send us a Message</h3>

                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required aria-label="Full Name" aria-required="true" autocomplete="name">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required aria-label="Email Address" aria-required="true" autocomplete="email">
                    </div>

                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" aria-label="Phone Number" autocomplete="tel">
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required aria-label="Message" aria-required="true"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-3 px-4 rounded-md hover:bg-secondary transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" aria-label="Send Message">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Find Us</h2>
            <p class="text-gray-600">Our office location</p>
        </div>

        <div class="rounded-lg overflow-hidden shadow-lg">
            <!-- Replace with actual map embed code if needed -->
            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                {{-- <p class="text-gray-500">Map placeholder - replace with actual Google Maps embed</p> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28017.146327946597!2d77.19302304094629!3d28.62546724275067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2b43a255341%3A0x2b687f3210cdd91d!2sNew%20Delhi%2C%20Delhi%20110001!5e0!3m2!1sen!2sin!4v1749905624217!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map showing CodeSprintX office location in New Delhi, India" aria-label="Map showing CodeSprintX office location in New Delhi, India"></iframe>

            </div>
        </div>
    </div>
</section>

@endsection
