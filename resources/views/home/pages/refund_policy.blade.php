@extends('home.partials.app')
@section('content')

<?php
$pageTitle = "Refund Policy";
$pageDescription = "Learn about CodeSprintX's refund policy for internship programs and how to request a refund if eligible.";
?>

<!-- Page Header -->
<section class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-2">Refund Policy</h1>
        <p class="text-xl">Last Updated: June 10, 2025</p>
    </div>
</section>

<!-- Refund Policy Content -->
<main id="main-content" class="py-12 bg-white" aria-labelledby="refund-policy-title" tabindex="0">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="prose prose-lg max-w-none">
            <h2 id="refund-policy-title">Refund Policy Overview</h2>
            <p>At CodeSprintX, we are committed to providing high-quality internship programs. We understand that circumstances may arise where you need to request a refund. This policy outlines our refund terms and procedures.</p>

            <h2>Eligibility for Refunds</h2>
            <h3>7-Day Satisfaction Guarantee</h3>
            <p>We offer a 7-day satisfaction guarantee for all our internship programs. If you are not satisfied with the program, you may request a refund within 7 days of your enrollment date, subject to the following conditions:</p>
            <ul>
                <li>You have completed no more than 15% of the program content</li>
                <li>You provide specific feedback about why the program did not meet your expectations</li>
                <li>You have not downloaded more than 25% of the course materials</li>
            </ul>
            <p>If these conditions are met, you will receive a full refund of your program fee.</p>

            <h3>Partial Refunds</h3>
            <p>After the initial 7-day period but within 30 days of enrollment, you may be eligible for a partial refund under the following circumstances:</p>
            <ul>
                <li>You have completed no more than 30% of the program content</li>
                <li>You provide documentation of extenuating circumstances (e.g., medical emergency, natural disaster)</li>
            </ul>
            <p>Partial refunds are calculated as follows:</p>
            <ul>
                <li>8-14 days from enrollment: 75% of the program fee</li>
                <li>15-30 days from enrollment: 50% of the program fee</li>
            </ul>

            <h3>Non-Refundable Circumstances</h3>
            <p>Refunds will not be issued in the following situations:</p>
            <ul>
                <li>More than 30 days have passed since enrollment</li>
                <li>You have completed more than 30% of the program content</li>
                <li>You have violated our Terms and Conditions</li>
                <li>You have received a certificate of completion</li>
                <li>You have utilized mentorship hours or received personalized feedback</li>
            </ul>

            <h2>How to Request a Refund</h2>
            <p>To request a refund, please follow these steps:</p>
            <ol>
                <li>Email our support team at refunds@codesprintx.com with the subject line "Refund Request - [Your Name]"</li>
                <li>Include your full name, email address used for registration, program name, and enrollment date</li>
                <li>Provide a detailed explanation for your refund request</li>
                <li>Attach any relevant documentation (if applicable)</li>
            </ol>
            <p>We will process your request within 5-7 business days and notify you of our decision via email.</p>

            <h2>Refund Processing</h2>
            <p>If your refund request is approved:</p>
            <ul>
                <li>Refunds will be processed using the original payment method</li>
                <li>Credit/debit card refunds typically take 5-10 business days to appear on your statement</li>
                <li>Bank transfers may take 7-14 business days to process</li>
                <li>Payment gateway fees and foreign exchange conversion fees (if any) are non-refundable</li>
            </ul>

            <h2>Special Circumstances</h2>
            <h3>Technical Issues</h3>
            <p>If you experience persistent technical issues that significantly impact your ability to access the program content, and our support team is unable to resolve these issues within a reasonable timeframe, you may be eligible for a full refund regardless of the timeframe, provided you have reported the issues to our support team in a timely manner.</p>

            <h3>Program Cancellation</h3>
            <p>In the rare event that CodeSprintX cancels an internship program, all enrolled students will receive a full refund, or they may choose to transfer to another available program of equal or lesser value (with a partial refund for any price difference).</p>

            <h3>Program Changes</h3>
            <p>If we make significant changes to a program's curriculum or structure after your enrollment, and these changes substantially alter the nature of what was advertised, you may be eligible for a full or partial refund based on the extent of the changes and your progress in the program.</p>

            <h2>Exceptions</h2>
            <p>CodeSprintX reserves the right to review refund requests on a case-by-case basis and may make exceptions to this policy at our discretion, particularly in cases involving extenuating circumstances not explicitly covered in this policy.</p>

            <h2>Policy Changes</h2>
            <p>We may update this Refund Policy from time to time. The updated version will be indicated by an updated "Last Updated" date and will be effective as soon as it is accessible. We encourage you to review this policy periodically for any changes.</p>

            <h2>Contact Us</h2>
            <p>If you have questions about our Refund Policy, please contact us at:</p>
            <p>Email: info@codesprintx.com</p>
            <p>Address: New Delhi, India, 110001</p>
        </div>
    </div>
</section>




@endsection
