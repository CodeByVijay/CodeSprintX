@extends('user.layouts.app')

@section('page-title', 'Support')

@section('content')
<div class="px-4 md:container md:mx-auto">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">Support Center</h2>
                <p class="text-sm md:text-base text-gray-600">Get help with your courses and account</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="#new-ticket" class="inline-block bg-primary text-white py-2 px-4 rounded-lg hover:bg-secondary transition-colors text-sm md:text-base">
                    <i class="fas fa-plus mr-1"></i> New Support Ticket
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Help Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6">
        <!-- FAQs -->
        <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
            <div class="text-center mb-4">
                <div class="inline-block p-2 md:p-3 bg-blue-100 text-blue-500 rounded-full mb-2">
                    <i class="fas fa-question-circle text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-base md:text-lg font-semibold">Frequently Asked Questions</h3>
                <p class="text-gray-600 text-xs md:text-sm">Find quick answers to common questions</p>
            </div>
            <a href="#faqs" class="block w-full text-center bg-gray-100 text-gray-700 py-2 rounded-lg hover:bg-gray-200 transition-colors text-sm md:text-base">
                Browse FAQs
            </a>
        </div>

        <!-- Knowledge Base -->
        <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
            <div class="text-center mb-4">
                <div class="inline-block p-2 md:p-3 bg-green-100 text-green-500 rounded-full mb-2">
                    <i class="fas fa-book text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-base md:text-lg font-semibold">Knowledge Base</h3>
                <p class="text-gray-600 text-xs md:text-sm">In-depth guides and tutorials</p>
            </div>
            <a href="#knowledge-base" class="block w-full text-center bg-gray-100 text-gray-700 py-2 rounded-lg hover:bg-gray-200 transition-colors text-sm md:text-base">
                View Articles
            </a>
        </div>

        <!-- Live Chat -->
        <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
            <div class="text-center mb-4">
                <div class="inline-block p-2 md:p-3 bg-purple-100 text-purple-500 rounded-full mb-2">
                    <i class="fas fa-comments text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-base md:text-lg font-semibold">Live Chat Support</h3>
                <p class="text-gray-600 text-xs md:text-sm">Chat with our support team</p>
            </div>
            <button class="block w-full text-center bg-purple-500 text-white py-2 rounded-lg hover:bg-purple-600 transition-colors text-sm md:text-base">
                Start Chat
            </button>
        </div>
    </div>

    <!-- Support Tickets -->
    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <h3 class="text-lg md:text-xl font-semibold mb-4">Your Support Tickets</h3>
        <div class="responsive-table">
            <table class="min-w-full divide-y divide-gray-200 responsive-table-card">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ticket ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Ticket 1 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#12345</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Unable to access course materials</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Resolved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jun 2, 2023</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-primary hover:text-secondary">View</a>
                        </td>
                    </tr>

                    <!-- Ticket 2 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#12346</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Question about JavaScript assignment</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                In Progress
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jun 8, 2023</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-primary hover:text-secondary">View</a>
                        </td>
                    </tr>

                    <!-- Ticket 3 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#12347</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Billing inquiry for monthly subscription</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Awaiting Response
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jun 10, 2023</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-primary hover:text-secondary">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- New Support Ticket -->
    <div id="new-ticket" class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Create New Support Ticket</h3>
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <div>
                    <label for="ticket-subject" class="block mb-2 text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="ticket-subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="ticket-category" class="block mb-2 text-sm font-medium text-gray-700">Category</label>
                    <select id="ticket-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select Category</option>
                        <option value="technical">Technical Issue</option>
                        <option value="course">Course Content</option>
                        <option value="billing">Billing & Payments</option>
                        <option value="account">Account Management</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label for="ticket-priority" class="block mb-2 text-sm font-medium text-gray-700">Priority</label>
                <div class="flex space-x-4 radio-group-mobile">
                    <div class="flex items-center">
                        <input type="radio" id="priority-low" name="priority" value="low" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="priority-low" class="ml-2 text-sm font-medium text-gray-700">Low</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="priority-medium" name="priority" value="medium" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" checked>
                        <label for="priority-medium" class="ml-2 text-sm font-medium text-gray-700">Medium</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="priority-high" name="priority" value="high" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="priority-high" class="ml-2 text-sm font-medium text-gray-700">High</label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <label for="ticket-message" class="block mb-2 text-sm font-medium text-gray-700">Message</label>
                <textarea id="ticket-message" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>
            <div class="mt-4">
                <label for="ticket-attachments" class="block mb-2 text-sm font-medium text-gray-700">Attachments (Optional)</label>
                <input type="file" id="ticket-attachments" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2">
                <p class="mt-1 text-xs text-gray-500">Max 3 files. Allowed formats: JPG, PNG, PDF. Max size: 5MB each.</p>
            </div>
            <div class="mt-6 form-buttons-mobile">
                <button type="submit" class="inline-block bg-primary text-white py-2 px-6 rounded-lg hover:bg-secondary transition-colors">
                    Submit Ticket
                </button>
            </div>
        </form>
    </div>

    <!-- FAQs Section -->
    <div id="faqs" class="bg-white rounded-lg shadow-sm p-4 md:p-6 mb-6">
        <div class="text-center mb-6">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">Frequently Asked Questions</h3>
            <p class="text-gray-600 text-sm md:text-base">Find quick answers to common questions about our platform</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="space-y-3 md:space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200">
                    <button class="faq-toggle flex items-center justify-between w-full p-4 md:p-5 text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset transition-all duration-200" data-target="faq-1">
                        <span class="text-gray-800 font-semibold text-sm md:text-base pr-4">How do I reset my password?</span>
                        <div class="flex-shrink-0">
                            <i class="fas fa-plus text-primary text-sm md:text-base transition-transform duration-200"></i>
                        </div>
                    </button>
                    <div id="faq-1" class="faq-content">
                        <div class="p-4 md:p-5 pt-0 bg-gray-50">
                            <div class="border-l-4 border-primary pl-4">
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">You can reset your password by clicking on the "Forgot Password" link on the login page. You will receive an email with instructions to create a new password.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200">
                    <button class="faq-toggle flex items-center justify-between w-full p-4 md:p-5 text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset transition-all duration-200" data-target="faq-2">
                        <span class="text-gray-800 font-semibold text-sm md:text-base pr-4">How long do I have access to course materials?</span>
                        <div class="flex-shrink-0">
                            <i class="fas fa-plus text-primary text-sm md:text-base transition-transform duration-200"></i>
                        </div>
                    </button>
                    <div id="faq-2" class="faq-content">
                        <div class="p-4 md:p-5 pt-0 bg-gray-50">
                            <div class="border-l-4 border-primary pl-4">
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">You have access to course materials for the duration of your internship program plus an additional 6 months after completion. This gives you ample time to review materials even after you've finished the program.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200">
                    <button class="faq-toggle flex items-center justify-between w-full p-4 md:p-5 text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset transition-all duration-200" data-target="faq-3">
                        <span class="text-gray-800 font-semibold text-sm md:text-base pr-4">Can I download course videos for offline viewing?</span>
                        <div class="flex-shrink-0">
                            <i class="fas fa-plus text-primary text-sm md:text-base transition-transform duration-200"></i>
                        </div>
                    </button>
                    <div id="faq-3" class="faq-content">
                        <div class="p-4 md:p-5 pt-0 bg-gray-50">
                            <div class="border-l-4 border-primary pl-4">
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">Yes, most course videos are available for download through the course dashboard. Look for the download icon next to video lectures. Note that some premium content may be streaming-only due to copyright restrictions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200">
                    <button class="faq-toggle flex items-center justify-between w-full p-4 md:p-5 text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset transition-all duration-200" data-target="faq-4">
                        <span class="text-gray-800 font-semibold text-sm md:text-base pr-4">How are assignments graded?</span>
                        <div class="flex-shrink-0">
                            <i class="fas fa-plus text-primary text-sm md:text-base transition-transform duration-200"></i>
                        </div>
                    </button>
                    <div id="faq-4" class="faq-content">
                        <div class="p-4 md:p-5 pt-0 bg-gray-50">
                            <div class="border-l-4 border-primary pl-4">
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">Assignments are graded by our mentors within 48-72 hours of submission. For coding assignments, we evaluate code quality, functionality, and adherence to requirements. You'll receive detailed feedback along with your grade.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-200">
                    <button class="faq-toggle flex items-center justify-between w-full p-4 md:p-5 text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset transition-all duration-200" data-target="faq-5">
                        <span class="text-gray-800 font-semibold text-sm md:text-base pr-4">What happens if I miss an assignment deadline?</span>
                        <div class="flex-shrink-0">
                            <i class="fas fa-plus text-primary text-sm md:text-base transition-transform duration-200"></i>
                        </div>
                    </button>
                    <div id="faq-5" class="faq-content">
                        <div class="p-4 md:p-5 pt-0 bg-gray-50">
                            <div class="border-l-4 border-primary pl-4">
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">We understand that sometimes life gets in the way. If you need an extension, please contact your mentor before the deadline. Late submissions without prior approval may incur a grade penalty, but we're generally flexible with reasonable requests.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="#" class="inline-flex items-center text-primary hover:text-secondary font-medium text-sm md:text-base transition-colors duration-200">
                <span>View all FAQs</span>
                <i class="fas fa-arrow-right ml-2 text-xs"></i>
            </a>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="inline-block p-3 bg-blue-100 text-blue-500 rounded-full mb-2">
                    <i class="fas fa-envelope text-2xl"></i>
                </div>
                <h4 class="font-medium mb-1">Email Support</h4>
                <p class="text-gray-600 text-sm">support@codesprintx.com</p>
                <p class="text-gray-500 text-xs mt-1">Response within 24 hours</p>
            </div>

            <div class="text-center">
                <div class="inline-block p-3 bg-green-100 text-green-500 rounded-full mb-2">
                    <i class="fas fa-phone text-2xl"></i>
                </div>
                <h4 class="font-medium mb-1">Phone Support</h4>
                <p class="text-gray-600 text-sm">+91 987-654-3210</p>
                <p class="text-gray-500 text-xs mt-1">Mon-Fri, 9AM-6PM IST</p>
            </div>

            <div class="text-center">
                <div class="inline-block p-3 bg-purple-100 text-purple-500 rounded-full mb-2">
                    <i class="fas fa-comment-alt text-2xl"></i>
                </div>
                <h4 class="font-medium mb-1">Live Chat</h4>
                <p class="text-gray-600 text-sm">Available on website</p>
                <p class="text-gray-500 text-xs mt-1">24/7 Support</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion functionality
    const faqToggles = document.querySelectorAll('.faq-toggle');

    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('data-target');
            const content = document.getElementById(targetId);
            const icon = this.querySelector('i');
            const faqItem = this.closest('.faq-item');

            // Check if this FAQ is currently open by checking if it has the 'open' class
            const isCurrentlyOpen = faqItem.classList.contains('faq-open');

            // Close all FAQs first
            faqToggles.forEach(otherToggle => {
                const otherTargetId = otherToggle.getAttribute('data-target');
                const otherContent = document.getElementById(otherTargetId);
                const otherIcon = otherToggle.querySelector('i');
                const otherFaqItem = otherToggle.closest('.faq-item');

                // Reset all FAQs to closed state
                otherFaqItem.classList.remove('faq-open');
                otherContent.style.maxHeight = '0px';
                otherContent.style.opacity = '0';
                otherIcon.classList.remove('fa-minus', 'rotate-180');
                otherIcon.classList.add('fa-plus');
                otherFaqItem.classList.remove('ring-2', 'ring-primary');
                otherToggle.classList.remove('bg-primary', 'text-white');
                otherToggle.classList.add('bg-white', 'hover:bg-gray-50');
                const otherSpan = otherToggle.querySelector('span');
                if (otherSpan) {
                    otherSpan.classList.remove('text-white');
                    otherSpan.classList.add('text-gray-800');
                }
            });

            // If the clicked FAQ wasn't open, open it
            if (!isCurrentlyOpen) {
                // Mark this FAQ as open
                faqItem.classList.add('faq-open');

                // Open the clicked FAQ
                setTimeout(() => {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                }, 10);

                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus', 'rotate-180');
                faqItem.classList.add('ring-2', 'ring-primary');
                this.classList.remove('bg-white', 'hover:bg-gray-50');
                this.classList.add('bg-primary', 'text-white');
                const span = this.querySelector('span');
                if (span) {
                    span.classList.remove('text-gray-800');
                    span.classList.add('text-white');
                }

                // Smooth scroll to FAQ item after animation
                setTimeout(() => {
                    faqItem.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });
                }, 400);
            }
        });
    });

    // Add smooth hover effects
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!this.classList.contains('ring-2')) {
                this.classList.add('shadow-md');
            }
        });

        item.addEventListener('mouseleave', function() {
            if (!this.classList.contains('ring-2')) {
                this.classList.remove('shadow-md');
            }
        });
    });

    // Handle URL hash for direct FAQ linking
    if (window.location.hash) {
        const hash = window.location.hash.substring(1);
        const targetFaq = document.querySelector(`[data-target="${hash}"]`);
        if (targetFaq) {
            setTimeout(() => {
                targetFaq.click();
            }, 500);
        }
    }
});
</script>

<style>
/* FAQ Accordion Styles */
.faq-content {
    transition: max-height 0.4s ease-in-out, opacity 0.3s ease-in-out;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
}

.faq-open .faq-content {
    opacity: 1;
}

.faq-toggle i {
    transition: transform 0.3s ease-in-out, color 0.2s ease-in-out;
}

.faq-item {
    transition: all 0.2s ease-in-out;
}

.faq-toggle {
    transition: all 0.2s ease-in-out;
}

.rotate-180 {
    transform: rotate(180deg);
}

/* Mobile responsive improvements */
@media (max-width: 768px) {
    .faq-toggle {
        padding: 1rem;
    }

    .faq-toggle span {
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .faq-content .border-l-4 {
        border-left-width: 3px;
        padding-left: 0.75rem;
    }
}

/* Focus states for accessibility */
.faq-toggle:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Ensure proper hover states */
.faq-toggle:not(.bg-primary):hover {
    background-color: #f9fafb;
}

.faq-toggle.bg-primary:hover {
    background-color: var(--primary-dark, #1d4ed8);
}

/* Debugging helper */
.faq-content:not([style*="max-height: 0"]) {
    border: 2px solid red !important;
}
</style>
@endpush
