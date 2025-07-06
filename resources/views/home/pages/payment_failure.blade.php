@extends('home.partials.app')

@section('content')
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-100 text-red-500 mb-6">
                        <i class="fas fa-times-circle text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Payment Failed</h1>
                    <p class="text-lg text-gray-600 mb-6">We're sorry, but there was an issue processing your payment.</p>

                    @if(isset($error))
                    <div class="bg-red-50 text-red-700 p-4 rounded-lg mb-6">
                        <p>{{ $error }}</p>
                    </div>
                    @endif

                    <p class="text-gray-600 mb-8">Please try again or contact our support team if the problem persists.</p>

                    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="javascript:history.back()" class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-md hover:bg-secondary transition-colors">
                            Try Again
                        </a>
                        <a href="mailto:support@codesprintx.com" class="inline-block px-6 py-3 bg-white border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-50 transition-colors">
                            Contact Support
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Common Issues</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <ul class="text-left space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Insufficient funds in your account</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Bank declined the transaction</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Payment timeout due to network issues</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Incorrect card details entered</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
