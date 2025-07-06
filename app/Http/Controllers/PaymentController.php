<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;
use Exception;

class PaymentController extends Controller
{
    /**
     * Create a new payment order
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createOrder(Request $request)
    {
        // Validate request
        $request->validate([
            'course' => 'required|string',
            'duration' => 'required|in:3,6',
            'amount' => 'required|numeric',
        ]);

        try {
            // Initialize Razorpay API
            $api = new Api(config('razorpay.key_id'), config('razorpay.key_secret'));

            // Create order
            $orderData = [
                'receipt' => 'order_' . time(),
                'amount' => $request->amount, // Amount in paisa
                'currency' => config('razorpay.currency', 'INR'),
                'notes' => [
                    'course' => $request->course,
                    'duration' => $request->duration . ' months',
                ]
            ];

            $order = $api->order->create($orderData);

            // Store order ID in session
            Session::put('razorpay_order_id', $order->id);

            return response()->json([
                'order_id' => $order->id,
                'amount' => $request->amount,
                'currency' => config('razorpay.currency', 'INR'),
                'course' => $request->course,
                'duration' => $request->duration,
                'key_id' => config('razorpay.key_id'), // Send key ID to frontend
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Handle payment success
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function paymentSuccess(Request $request)
    {
        // Validate payment details
        $request->validate([
            'razorpay_payment_id' => 'required',
            'razorpay_order_id' => 'required',
            'razorpay_signature' => 'required',
        ]);

        try {
            // Initialize Razorpay API
            $api = new Api(config('razorpay.key_id'), config('razorpay.key_secret'));

            // Verify signature
            $attributes = [
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_signature' => $request->razorpay_signature,
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Store payment details in session (in a real app, you would save this to database)
            Session::put('payment_success', true);
            Session::put('payment_id', $request->razorpay_payment_id);
            Session::put('order_id', $request->razorpay_order_id);

            // Redirect to payment success page
            return redirect()->route('payment.success');
        } catch (Exception $e) {
            return redirect()->route('payment.failure')->with('error', $e->getMessage());
        }
    }

    /**
     * Show payment success page
     *
     * @return \Illuminate\View\View
     */
    public function showSuccessPage()
    {
        if (!Session::has('payment_success')) {
            return redirect()->route('home');
        }

        return view('home.pages.payment_success', [
            'payment_id' => Session::get('payment_id'),
            'order_id' => Session::get('order_id'),
            'pageTitle' => 'Payment Successful | CodeSprintX',
            'pageDescription' => 'Your payment has been successfully processed. Thank you for enrolling in our internship program.',
        ]);
    }

    /**
     * Show payment failure page
     *
     * @return \Illuminate\View\View
     */
    public function showFailurePage()
    {
        return view('home.pages.payment_failure', [
            'error' => Session::get('error'),
            'pageTitle' => 'Payment Failed | CodeSprintX',
            'pageDescription' => 'There was an issue processing your payment. Please try again.',
        ]);
    }
}
