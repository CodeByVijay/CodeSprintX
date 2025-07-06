@extends('home.partials.app')
@section('content')

<?php
$pageTitle = "Shipping Policy";
$pageDescription = "Information about CodeSprintX's shipping policy for digital internship programs and virtual delivery of course materials.";
?>

<!-- Page Header -->
<section class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-2">Shipping Policy</h1>
        <p class="text-xl">Last Updated: June 12, 2025</p>
    </div>
</section>

<!-- Shipping Policy Content -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="prose prose-lg max-w-none">
            <h2>Digital Delivery Policy</h2>
            <p>CodeSprintX provides online internship programs and digital educational content. As our offerings are entirely digital in nature, we do not ship physical products or materials. This policy outlines how we deliver our digital services and content to you.</p>

            <h2>Digital Content Delivery</h2>
            <h3>Immediate Access</h3>
            <p>Upon successful payment and enrollment in any of our internship programs:</p>
            <ul>
                <li>You will receive immediate access to your selected program through our online learning platform</li>
                <li>Login credentials will be sent to the email address provided during registration</li>
                <li>All course materials, videos, assignments, and resources are accessible through your personal dashboard</li>
                <li>No physical shipment will occur as all content is delivered digitally</li>
            </ul>

            <h3>Access Duration</h3>
            <p>The duration of access to your internship program materials depends on your selected plan:</p>
            <ul>
                <li>3-Month Plan: Full access to all program materials for 3 months from the date of enrollment</li>
                <li>6-Month Plan: Full access to all program materials for 6 months from the date of enrollment</li>
            </ul>
            <p>After the access period expires, you may no longer be able to access the course materials. However, any certificates earned and completed projects remain your property permanently.</p>

            <h2>System Requirements</h2>
            <p>To access our digital content, you will need:</p>
            <ul>
                <li>A computer, laptop, tablet, or smartphone with internet connectivity</li>
                <li>A modern web browser (Chrome, Firefox, Safari, or Edge - latest or recent versions)</li>
                <li>Stable internet connection with minimum speed of 5 Mbps for optimal video streaming</li>
                <li>PDF reader for accessing downloadable materials</li>
                <li>Specific software requirements may apply depending on the internship program (details provided in the course description)</li>
            </ul>

            <h2>Delivery Timeline</h2>
            <p>Our digital content delivery timelines are as follows:</p>
            <ul>
                <li><strong>Account Access:</strong> Immediate to 1 hour after successful payment</li>
                <li><strong>Welcome Email:</strong> Within 24 hours of enrollment</li>
                <li><strong>Course Materials:</strong> Immediately available upon login</li>
                <li><strong>Weekly Assignments:</strong> Released according to the program schedule</li>
                <li><strong>Feedback and Evaluations:</strong> Typically within 3-5 business days of submission</li>
                <li><strong>Certificate of Completion:</strong> Within 7 days of successfully completing all program requirements</li>
            </ul>

            <h2>Technical Issues</h2>
            <p>If you experience any difficulties accessing your program materials:</p>
            <ol>
                <li>First, check our troubleshooting guide in the Help Center</li>
                <li>If issues persist, contact our technical support team at support@codesprintx.com</li>
                <li>Include details such as your username, program name, device type, browser, and a description of the issue</li>
                <li>Our support team will respond within 24-48 hours with assistance</li>
            </ol>

            <h2>Digital Materials and Copyright</h2>
            <p>All digital materials provided as part of our internship programs are subject to copyright protection:</p>
            <ul>
                <li>Materials are for personal use only and should not be shared, redistributed, or reproduced without permission</li>
                <li>Each account is for individual use only</li>
                <li>Sharing access credentials is prohibited and may result in account termination without refund</li>
            </ul>

            <h2>Updates and Modifications</h2>
            <p>CodeSprintX continuously improves its programs and content. As a result:</p>
            <ul>
                <li>Course materials may be updated or enhanced during your enrollment period</li>
                <li>You will automatically receive access to updated materials relevant to your program</li>
                <li>Major curriculum changes will be communicated via email</li>
            </ul>

            <h2>International Access</h2>
            <p>Our digital internship programs are available internationally:</p>
            <ul>
                <li>All content is delivered in English</li>
                <li>Time zones for live sessions (if applicable) will be communicated in advance</li>
                <li>Access may be restricted in certain countries due to internet restrictions beyond our control</li>
                <li>It is the user's responsibility to ensure our digital services are accessible and legal in their jurisdiction</li>
            </ul>

            <h2>Certificates and Digital Credentials</h2>
            <p>Upon successful completion of an internship program:</p>
            <ul>
                <li>Digital certificates will be issued and delivered to your registered email address</li>
                <li>Digital badges may be available for sharing on professional platforms like LinkedIn</li>
                <li>Physical certificates are not provided</li>
            </ul>

            <h2>Contact Us</h2>
            <p>If you have questions about our Digital Delivery Policy, please contact us at:</p>
            <p>Email: info@codesprintx.com</p>
            <p>Address: 123 Education Lane, Knowledge City</p>
        </div>
    </div>
</section>

@endsection
