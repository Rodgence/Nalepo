<!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">NALEPO</h3>
                    <p class="text-gray-300 mb-4">Natural Livelihood Empowerment and Progress Organization - Empowering communities, transforming lives through sustainable development.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="about.php" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="programs.php" class="text-gray-300 hover:text-white">Programs</a></li>
                        <li><a href="get-involved.php" class="text-gray-300 hover:text-white">Get Involved</a></li>
                        <li><a href="impact.php" class="text-gray-300 hover:text-white">Impact</a></li>
                        <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
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

        // Form submission (for contact page)
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            });
        }
    </script>
</body>
</html>