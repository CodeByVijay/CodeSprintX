@extends('home.partials.app')
@section('content')


<?php
$pageTitle = "About Us";
$pageDescription = "Learn about CodeSprintX's mission to provide quality internship programs that help students gain practical skills and advance their careers.";

?>

<!-- Page Header -->
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">About CodeSprintX</h1>
        <p class="text-xl max-w-2xl mx-auto">Empowering the next generation of professionals through quality internship programs</p>
    </div>
</section>

<!-- Our Story -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h2>
                <p class="text-gray-600 mb-4">CodeSprintX was founded in 2020 with a vision to bridge the gap between academic education and industry requirements. We recognized that many graduates struggle to find employment due to lack of practical skills and real-world experience.</p>
                <p class="text-gray-600 mb-4">Our team of industry professionals and educators came together to create structured internship programs that provide hands-on experience in various domains, helping students build practical skills and enhance their employability.</p>
                <p class="text-gray-600">Today, CodeSprintX has grown to become a trusted name in professional internship programs, with thousands of successful students who have launched their careers through our platform.</p>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="https://placehold.co/800x400.png?text=CodeSprintX+Team" alt="Group photo of the CodeSprintX team" class="w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Our Mission & Vision</h2>
            <p class="text-gray-600">What drives us and where we're headed</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="inline-block p-4 bg-blue-100 text-primary rounded-full mb-4">
                    <i class="fas fa-bullseye text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                <p class="text-gray-600">To empower students and young professionals with practical skills and industry exposure through high-quality internship programs, bridging the gap between academic learning and professional requirements at CodeSprintX.</p>
            </div>

            <!-- Vision -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="inline-block p-4 bg-blue-100 text-primary rounded-full mb-4">
                    <i class="fas fa-eye text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Our Vision</h3>
                <p class="text-gray-600">To become the global leader in skill-based internship programs, creating a world where every student has access to quality practical training that enhances their employability and career prospects through CodeSprintX.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Our Core Values</h2>
            <p class="text-gray-600">The principles that guide everything we do at CodeSprintX</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Value 1 -->
            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                <div class="text-primary mb-4">
                    <i class="fas fa-star text-3xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                <p class="text-gray-600">We strive for excellence in all our programs, ensuring the highest quality of training and support.</p>
            </div>

            <!-- Value 2 -->
            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                <div class="text-primary mb-4">
                    <i class="fas fa-lightbulb text-3xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Innovation</h3>
                <p class="text-gray-600">We continuously update our curriculum to reflect the latest industry trends and technological advancements.</p>
            </div>

            <!-- Value 3 -->
            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                <div class="text-primary mb-4">
                    <i class="fas fa-users text-3xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Inclusivity</h3>
                <p class="text-gray-600">We believe in creating opportunities for everyone, regardless of their background or previous experience.</p>
            </div>

            <!-- Value 4 -->
            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                <div class="text-primary mb-4">
                    <i class="fas fa-handshake text-3xl" aria-hidden="true"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Integrity</h3>
                <p class="text-gray-600">We operate with honesty, transparency, and ethical practices in all our dealings.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Meet Our Team</h2>
            <p class="text-gray-600">The experts behind our successful CodeSprintX internship programs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placehold.co/600x400.png?text=Rahul+Sharma" alt="Rahul Sharma, Founder & CEO of CodeSprintX" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Rahul Sharma</h3>
                    <p class="text-primary mb-3">Founder & CEO</p>
                    <p class="text-gray-600 mb-4">With over 15 years of experience in the tech industry, Rahul leads our vision and strategic direction.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placehold.co/600x400.png?text=Priya+Patel" alt="Priya Patel, Head of Education at CodeSprintX" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Priya Patel</h3>
                    <p class="text-primary mb-3">Head of Education</p>
                    <p class="text-gray-600 mb-4">Priya oversees our curriculum development and ensures the quality of all our internship programs.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://placehold.co/600x400.png?text=Vikram+Singh" alt="Vikram Singh, Director of Corporate Relations at CodeSprintX" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">Vikram Singh</h3>
                    <p class="text-primary mb-3">Director of Corporate Relations</p>
                    <p class="text-gray-600 mb-4">Vikram manages our partnerships with companies and helps students with placement opportunities.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
@include('home.includes.contact_us')

@endsection
