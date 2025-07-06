@extends('home.partials.app')

@section('content')
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 text-green-500 mb-6">
                        <i class="fas fa-check-circle text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Payment Successful!</h1>
                    <p class="text-lg text-gray-600 mb-6">Thank you for enrolling in our internship program. Your payment has been successfully processed.</p>

                    <div class="bg-gray-50 rounded-lg p-4 mb-6">
                        <div class="flex justify-between border-b pb-3 mb-3">
                            <span class="text-gray-600">Payment ID:</span>
                            <span class="font-medium">{{ $payment_id }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Order ID:</span>
                            <span class="font-medium">{{ $order_id }}</span>
                        </div>
                    </div>

                    <p class="text-gray-600 mb-8">You will receive an email confirmation shortly with details about your internship program and next steps.</p>

                    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('home') }}" class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-md hover:bg-secondary transition-colors">
                            Return to Home
                        </a>
                        <a href="#" class="inline-block px-6 py-3 bg-white border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-50 transition-colors">
                            View My Courses
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">What's Next?</h2>
                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="p-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3 class="font-medium text-gray-800 mb-2">Check Your Email</h3>
                            <p class="text-gray-600">Look for our welcome email with important information</p>
                        </div>
                        <div class="p-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3 class="font-medium text-gray-800 mb-2">Mark Your Calendar</h3>
                            <p class="text-gray-600">Your program starts in the next 48 hours</p>
                        </div>
                        <div class="p-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-primary flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3 class="font-medium text-gray-800 mb-2">Prepare Your Setup</h3>
                            <p class="text-gray-600">Follow our guide to set up your development environment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
