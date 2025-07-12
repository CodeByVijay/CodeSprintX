 <!-- Footer -->
 <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white pt-16 pb-8 relative overflow-hidden">
     <!-- Background Pattern -->
     <div class="absolute inset-0 opacity-10">
         <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.1&quot;%3E%3Ccircle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;1&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
     </div>

     <div class="container mx-auto px-4 relative z-10">
         <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">            <!-- Company Info -->
            <div class="animate-on-scroll">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 gradient-text" id="footer-org">CodeSprintX</h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary rounded-full"></div>
                </div>
                 <p class="text-gray-300 mb-6 leading-relaxed">Providing professional internship programs to help students and professionals advance their careers through practical skills development and industry expertise.</p>
                 <div class="flex space-x-4" aria-label="Social media links">
                     <a href="https://www.instagram.com/codesprintx_official/" target="_blank" rel="noopener" class="w-12 h-12 bg-gradient-to-br from-pink-600 to-purple-600 rounded-xl flex items-center justify-center text-white hover:from-pink-500 hover:to-purple-500 transition-all duration-300 transform hover:scale-110 hover:shadow-lg" aria-label="Instagram">
                         <i class="fab fa-instagram text-lg" aria-hidden="true"></i>
                     </a>
                     <a href="https://www.linkedin.com/company/codesprintx" target="_blank" rel="noopener" class="w-12 h-12 bg-gradient-to-br from-blue-700 to-blue-800 rounded-xl flex items-center justify-center text-white hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-110 hover:shadow-lg" aria-label="LinkedIn">
                         <i class="fab fa-linkedin-in text-lg" aria-hidden="true"></i>
                     </a>
                 </div>
             </div>

             <!-- Quick Links -->
             <div class="animate-on-scroll">
                 <div class="mb-6">
                     <h3 class="text-xl font-bold mb-4 text-white" id="footer-quick-links">Quick Links</h3>
                     <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary rounded-full"></div>
                 </div>
                 <ul class="space-y-3" aria-labelledby="footer-quick-links">
                     <li>
                         <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Home</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('about-us') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">About Us</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('home') }}#courses" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Courses</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('contact-us') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Contact</span>
                         </a>
                     </li>
                 </ul>
             </div>

             <!-- Legal Links -->
             <div class="animate-on-scroll">
                 <div class="mb-6">
                     <h3 class="text-xl font-bold mb-4 text-white">Legal</h3>
                     <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary rounded-full"></div>
                 </div>
                 <ul class="space-y-3">
                     <li>
                         <a href="{{ route('privacy-policy') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Privacy Policy</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('terms-conditions') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Terms & Conditions</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('refund-policy') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Refund Policy</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('shipping-policy') }}" class="text-gray-300 hover:text-white transition-all duration-300 flex items-center group">
                             <i class="fas fa-chevron-right mr-3 text-primary transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             <span class="group-hover:text-primary transition-colors duration-300">Shipping Policy</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>

         <div class="border-t border-gray-700 pt-8 text-center">
             <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-2xl p-6 backdrop-blur-sm border border-gray-600">
                 <p class="text-sm text-gray-300">
                     &copy; 2021 - {{ date('Y') }}
                     <a href="https://codesprintx.com/" target="_blank" class="text-primary hover:text-secondary transition-colors duration-300 font-semibold">
                         CodeSprintX
                     </a>.
                     All rights reserved. Built with ❤️ for future developers.
                 </p>
             </div>
         </div>
     </div>
 </footer>
