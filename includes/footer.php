<!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="images/logo.jpeg" alt="NALEPO Logo" class="h-8 w-auto mr-2">
                        <h3 class="text-2xl font-bold">NALEPO</h3>
                    </div>
                    <p class="text-gray-300 mb-4">Natural Livelihood Empowerment and Progress Organization - Empowering communities, transforming lives through sustainable development.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-sunset-orange transition duration-300">Home</a></li>
                        <li><a href="/about" class="hover:text-sunset-orange transition duration-300">About</a></li>
                        <li><a href="/programs" class="hover:text-sunset-orange transition duration-300">Programs</a></li>
                        <li><a href="get-involved.php" class="hover:text-sunset-orange transition duration-300">Get Involved</a></li>
                        <li><a href="/impact" class="hover:text-sunset-orange transition duration-300">Impact</a></li>
                        <li><a href="/contact" class="hover:text-sunset-orange transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-envelope mr-2"></i><a href="mailto:info@nalepoorga.com" class="hover:text-white transition">info@nalepoorga.com</a></p>
                        <p><i class="fas fa-phone mr-2"></i><a href="tel:+255682398053" class="hover:text-white transition">+255 682 398 053</a></p>
                        <p><i class="fas fa-globe mr-2"></i><a href="https://nalepoorga.com" target="_blank" class="hover:text-white transition">nalepoorga.com</a></p>
                        <p><i class="fas fa-user mr-2"></i>Emanuel Punuka, CEO</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2025 NALEPO. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Form submission (for contact page only)
        const form = document.querySelector('#contact-form');
        if (form) {
            // Remove the preventDefault - let form submit normally
            form.addEventListener('submit', function(e) {
                // Form will submit to send-contact.php
            });
        }
        
        // Allow donation forms to submit normally
        const donationForm = document.querySelector('form[action="process-donation.php"]');
        if (donationForm) {
            // Remove any existing event listeners that might prevent submission
            donationForm.addEventListener('submit', function(e) {
                // Let the form submit normally to process-donation.php
                // No e.preventDefault() here!
            });
        }
    </script>
</body>
</html>