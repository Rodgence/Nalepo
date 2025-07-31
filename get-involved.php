<?php
$page_title = "Get Involved";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-savanna-green to-green-700 text-white pt-16">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Get Involved</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Join us in empowering communities and transforming lives. Every contribution makes a difference.</p>
            </div>
        </div>
    </section>

    <!-- Funding Goals Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Funding Goals</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Help us reach our $100,000 goal to transform communities across the region.</p>
            </div>
            
            <!-- Progress Bar -->
            <div class="max-w-4xl mx-auto mb-12">
                <div class="bg-gray-200 rounded-full h-6 mb-4">
                    <div class="bg-savanna-green h-6 rounded-full" style="width: 35%"></div>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span>$35,000 raised</span>
                    <span>$100,000 goal</span>
                </div>
            </div>

            <!-- Funding Breakdown -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-maasai-red text-white rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold mb-2">$45K</div>
                    <p class="text-sm">Programs</p>
                </div>
                <div class="bg-savanna-green text-white rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold mb-2">$25K</div>
                    <p class="text-sm">Staffing</p>
                </div>
                <div class="bg-sunset-orange text-white rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold mb-2">$15K</div>
                    <p class="text-sm">Administration</p>
                </div>
                <div class="bg-earth-brown text-white rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold mb-2">$10K</div>
                    <p class="text-sm">Monitoring & Evaluation</p>
                </div>
                <div class="bg-gray-600 text-white rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold mb-2">$5K</div>
                    <p class="text-sm">Contingency</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ways to Get Involved -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Ways to Get Involved</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Donate -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-maasai-red text-white p-6 text-center">
                        <i class="fas fa-heart text-4xl mb-4"></i>
                        <h3 class="text-2xl font-bold">Donate</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">Your financial support directly impacts communities through our programs.</p>
                        <div class="space-y-3 mb-6">
                            <button class="w-full bg-maasai-red text-white py-3 px-4 rounded-lg hover:bg-red-700 transition">$25 - School Supplies</button>
                            <button class="w-full bg-maasai-red text-white py-3 px-4 rounded-lg hover:bg-red-700 transition">$50 - Micro-loan Support</button>
                            <button class="w-full bg-maasai-red text-white py-3 px-4 rounded-lg hover:bg-red-700 transition">$100 - Tree Planting</button>
                            <button class="w-full bg-maasai-red text-white py-3 px-4 rounded-lg hover:bg-red-700 transition">Custom Amount</button>
                        </div>
                        <p class="text-sm text-gray-500">Secure payment processing through PayPal</p>
                    </div>
                </div>

                <!-- Volunteer -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-savanna-green text-white p-6 text-center">
                        <i class="fas fa-hands-helping text-4xl mb-4"></i>
                        <h3 class="text-2xl font-bold">Volunteer</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">Share your skills and time to make a direct impact in communities.</p>
                        <ul class="space-y-3 mb-6 text-gray-700">
                            <li class="flex items-center"><i class="fas fa-check text-savanna-green mr-2"></i>Teaching & Education</li>
                            <li class="flex items-center"><i class="fas fa-check text-savanna-green mr-2"></i>Business Mentorship</li>
                            <li class="flex items-center"><i class="fas fa-check text-savanna-green mr-2"></i>Environmental Projects</li>
                            <li class="flex items-center"><i class="fas fa-check text-savanna-green mr-2"></i>Healthcare Support</li>
                            <li class="flex items-center"><i class="fas fa-check text-savanna-green mr-2"></i>Administrative Help</li>
                        </ul>
                        <a href="contact.php" class="block w-full bg-savanna-green text-white text-center py-3 px-4 rounded-lg hover:bg-green-700 transition">Apply to Volunteer</a>
                    </div>
                </div>

                <!-- Partner -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-sunset-orange text-white p-6 text-center">
                        <i class="fas fa-handshake text-4xl mb-4"></i>
                        <h3 class="text-2xl font-bold">Partner</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">Join us as a corporate partner or institutional collaborator.</p>
                        <ul class="space-y-3 mb-6 text-gray-700">
                            <li class="flex items-center"><i class="fas fa-check text-sunset-orange mr-2"></i>Corporate Sponsorship</li>
                            <li class="flex items-center"><i class="fas fa-check text-sunset-orange mr-2"></i>Employee Engagement</li>
                            <li class="flex items-center"><i class="fas fa-check text-sunset-orange mr-2"></i>Resource Sharing</li>
                            <li class="flex items-center"><i class="fas fa-check text-sunset-orange mr-2"></i>Technical Expertise</li>
                            <li class="flex items-center"><i class="fas fa-check text-sunset-orange mr-2"></i>Grant Opportunities</li>
                        </ul>
                        <a href="contact.php" class="block w-full bg-sunset-orange text-white text-center py-3 px-4 rounded-lg hover:bg-orange-700 transition">Become a Partner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Ways to Help -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Other Ways to Help</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-share-alt text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Share Our Story</h3>
                    <p class="text-gray-600">Spread awareness about our mission on social media</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Host an Event</h3>
                    <p class="text-gray-600">Organize fundraising events in your community</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-sunset-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gift text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">In-Kind Donations</h3>
                    <p class="text-gray-600">Donate supplies, equipment, or professional services</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-earth-brown text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Stay Connected</h3>
                    <p class="text-gray-600">Subscribe to our newsletter for updates and stories</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-maasai-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Every action, no matter how small, contributes to transforming lives and building sustainable communities.</p>
            <div class="space-x-4">
                <button class="bg-white text-maasai-red hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300">Donate Now</button>
                <a href="contact.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-maasai-red text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">Contact Us</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>