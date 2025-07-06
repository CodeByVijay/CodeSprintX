<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Show the student dashboard
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }

    /**
     * Show the student profile
     */
    public function profile()
    {
        return view('user.profile');
    }

    /**
     * Show the student settings page
     */
    public function settings()
    {
        return view('user.settings');
    }

    /**
     * Upload profile image
     */
    public function uploadProfileImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid file. Please upload a valid image (JPEG, PNG, JPG, GIF) under 5MB.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $file = $request->file('profile_image');

            // Generate unique filename
            $filename = 'profile_' . time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Store in public/storage/profile_images directory
            $path = $file->storeAs('profile_images', $filename, 'public');

            // Get the full URL
            $imageUrl = Storage::url($path);

            // Here you would typically save the image path to the user's record in the database
            // Example: auth()->user()->update(['profile_image' => $path]);

            return response()->json([
                'success' => true,
                'message' => 'Profile image uploaded successfully!',
                'image_url' => $imageUrl,
                'image_path' => $path
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to upload image. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove profile image
     */
    public function removeProfileImage(Request $request)
    {
        try {
            // Here you would typically remove the image path from the user's record
            // and delete the file from storage
            // Example:
            // $user = auth()->user();
            // if ($user->profile_image) {
            //     Storage::disk('public')->delete($user->profile_image);
            //     $user->update(['profile_image' => null]);
            // }

            return response()->json([
                'success' => true,
                'message' => 'Profile image removed successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to remove image. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update profile information
     */
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other,prefer-not-to-say',
            'address' => 'nullable|string|max:500',
            'bio' => 'nullable|string|max:1000',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'skills' => 'nullable|array',
            'skills.*' => 'string|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fix the validation errors.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Here you would update the user's profile in the database
            // Example: auth()->user()->update($validator->validated());

            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update profile. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fix the validation errors.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Here you would verify the current password and update to the new one
            // Example:
            // if (!Hash::check($request->current_password, auth()->user()->password)) {
            //     return response()->json(['success' => false, 'message' => 'Current password is incorrect'], 422);
            // }
            // auth()->user()->update(['password' => Hash::make($request->new_password)]);

            return response()->json([
                'success' => true,
                'message' => 'Password updated successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update password. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update notification settings
     */
    public function updateNotificationSettings(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_course_updates' => 'boolean',
            'email_assignments' => 'boolean',
            'email_feedback' => 'boolean',
            'email_promotions' => 'boolean',
            'push_course_updates' => 'boolean',
            'push_assignments' => 'boolean',
            'push_messages' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid notification settings.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Here you would update the user's notification preferences
            // Example: auth()->user()->notificationSettings()->updateOrCreate([], $validator->validated());

            return response()->json([
                'success' => true,
                'message' => 'Notification settings updated successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update notification settings. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
