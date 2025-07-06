<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;


// Authentication Routes
Route::get('/login', function () {
    return view('home.pages.login');
})->name('login');

Route::get('/register', function () {
    return view('home.pages.register');
})->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('home.pages.about_us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('home.pages.contact_us');
})->name('contact-us');


// Legal Routes
Route::get('/privacy-policy', function () {
    return view('home.pages.privacy_policy');
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('home.pages.terms_conditions');
})->name('terms-conditions');

Route::get('/refund-policy', function () {
    return view('home.pages.refund_policy');
})->name('refund-policy');

Route::get('/shipping-policy', function () {
    return view('home.pages.shipping_policy');
})->name('shipping-policy');

// SEO-friendly route for course descriptions with proper constraints
Route::get('/internship-program/{slug}', [CourseController::class, 'show'])
    ->where('slug', '[a-z0-9-]+')  // Ensure slug contains only lowercase letters, numbers, and hyphens
    ->name('course.description');

// Payment Routes
Route::post('/payment/create-order', [PaymentController::class, 'createOrder'])->name('payment.create-order');
Route::post('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.verify');
Route::get('/payment/success', [PaymentController::class, 'showSuccessPage'])->name('payment.success');
Route::get('/payment/failure', [PaymentController::class, 'showFailurePage'])->name('payment.failure');

// Student Dashboard Routes
Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::get('/settings', [StudentController::class, 'settings'])->name('student.settings');

    Route::get('/courses', function () {
        return view('user.courses');
    })->name('student.courses');

    Route::get('/assignments', function () {
        return view('user.assignments');
    })->name('student.assignments');

    Route::get('/progress', function () {
        return view('user.progress');
    })->name('student.progress');

    Route::get('/certificates', function () {
        return view('user.certificates');
    })->name('student.certificates');

    Route::get('/support', function () {
        return view('user.support');
    })->name('student.support');
});

// Student API Routes
Route::prefix('api/student')->group(function () {
    Route::post('/upload-profile-image', [StudentController::class, 'uploadProfileImage'])->name('api.student.upload-profile-image');
    Route::delete('/remove-profile-image', [StudentController::class, 'removeProfileImage'])->name('api.student.remove-profile-image');
    Route::put('/update-profile', [StudentController::class, 'updateProfile'])->name('api.student.update-profile');
    Route::put('/update-password', [StudentController::class, 'updatePassword'])->name('api.student.update-password');
    Route::put('/update-notification-settings', [StudentController::class, 'updateNotificationSettings'])->name('api.student.update-notification-settings');
});

Route::get('/logout', function () {
    return view('home.pages.login');
})->name('logout');
