<?php
$page_title = "Get Involved";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative text-white pt-16">
        <div class="absolute inset-0">
            <img src="images/WhatsApp Image 2025-07-31 at 11.31.23 AM.jpeg" alt="Women Empowerment - Get Involved" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Get Involved</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Join us in empowering communities and transforming lives. Every contribution makes a difference.</p>
            </div>
        </div>
    </section>

     <!-- Donation Form Section -->
    <section id="donation-form" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Make a Donation</h2>
                <p class="text-xl text-gray-600">Your contribution directly supports our programs and helps transform lives in Maasai communities.</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-8">
                <form action="process-donation.php" method="POST" class="space-y-6">
                    <!-- Donation Amount Selection -->
                    <div>
                        <label class="block text-lg font-bold text-gray-900 mb-4">Select Donation Amount (USD)</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                            <button type="button" class="amount-btn bg-white border-2 border-maasai-red text-maasai-red hover:bg-maasai-red hover:text-white font-bold py-3 px-4 rounded-lg transition duration-300" data-amount="25">$25</button>
                            <button type="button" class="amount-btn bg-white border-2 border-maasai-red text-maasai-red hover:bg-maasai-red hover:text-white font-bold py-3 px-4 rounded-lg transition duration-300" data-amount="50">$50</button>
                            <button type="button" class="amount-btn bg-white border-2 border-maasai-red text-maasai-red hover:bg-maasai-red hover:text-white font-bold py-3 px-4 rounded-lg transition duration-300" data-amount="100">$100</button>
                            <button type="button" class="amount-btn bg-white border-2 border-maasai-red text-maasai-red hover:bg-maasai-red hover:text-white font-bold py-3 px-4 rounded-lg transition duration-300" data-amount="250">$250</button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-700 font-medium">$</span>
                            <input type="number" id="amount" name="amount" min="1" step="0.01" required class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="Enter custom amount">
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <p><strong>$25</strong> - Provides school supplies for 5 children</p>
                            <p><strong>$50</strong> - Supports a woman's micro-business startup</p>
                            <p><strong>$100</strong> - Funds environmental conservation project</p>
                            <p><strong>$250</strong> - Sponsors vocational training for 10 youth</p>
                        </div>
                    </div>
                    
                    <!-- Donor Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="donor_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="donor_name" name="donor_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="your@email.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="+255 XXX XXX XXX">
                        <p class="mt-1 text-sm text-gray-500">Required for mobile money payments (M-Pesa, Airtel Money)</p>
                    </div>
                    
                    <!-- Optional Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message (Optional)</label>
                        <textarea id="message" name="message" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="Leave a message or specify how you'd like your donation to be used..."></textarea>
                    </div>
                    
                    <!-- Payment Methods Info -->
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <h4 class="font-bold text-blue-900 mb-2">Accepted Payment Methods:</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-sm text-blue-800">
                            <div class="flex items-center">
                                <i class="fas fa-mobile-alt mr-2"></i>
                                M-Pesa
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-mobile-alt mr-2"></i>
                                Airtel Money
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-credit-card mr-2"></i>
                                Visa/Mastercard
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-university mr-2"></i>
                                Bank Transfer
                            </div>
                        </div>
                    </div>
                    
                    <!-- Terms and Privacy -->
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="terms" name="terms" required class="mt-1 h-4 w-4 text-maasai-red focus:ring-maasai-red border-gray-300 rounded">
                        <label for="terms" class="text-sm text-gray-700">
                            I agree to the terms and conditions and understand that my donation will be used to support NALEPO's programs for community empowerment and development.
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="bg-maasai-red hover:bg-red-700 text-white font-bold py-4 px-12 rounded-lg transition duration-300 transform hover:scale-105">
                            <i class="fas fa-heart mr-2"></i>
                            Donate Now via PesaPal
                        </button>
                        <p class="mt-2 text-sm text-gray-600">Secure payment processing by PesaPal</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <div class="overflow-hidden rounded-lg">
                <div class="flex transition-transform duration-500 ease-in-out" id="imageSlider">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (1).jpeg" alt="Community Development" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (2).jpeg" alt="Education Programs" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM (1).jpeg" alt="Environmental Conservation" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM.jpeg" alt="Healthcare Initiatives" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.30.46 AM.jpeg" alt="Economic Empowerment" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.31.23 AM.jpeg" alt="Women Empowerment" class="w-full h-[500px] object-cover flex-shrink-0">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.32.02 AM.jpeg" alt="Youth Development" class="w-full h-[500px] object-cover flex-shrink-0">
                </div>
            </div>
            
            <!-- Navigation buttons -->
            <button onclick="moveSlide(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition duration-300">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button onclick="moveSlide(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition duration-300">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <!-- Slide indicators -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button onclick="currentSlide(1)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(2)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(3)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(4)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(5)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(6)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
                <button onclick="currentSlide(7)" class="w-3 h-3 bg-white bg-opacity-50 rounded-full hover:bg-opacity-100 transition duration-300"></button>
            </div>
        </div>
    </div>
</section>
<script>
let slideIndex = 0;
const totalSlides = 7;

function moveSlide(direction) {
    slideIndex += direction;
    if (slideIndex >= totalSlides) slideIndex = 0;
    if (slideIndex < 0) slideIndex = totalSlides - 1;
    updateSlider();
}

function currentSlide(index) {
    slideIndex = index - 1;
    updateSlider();
}

function updateSlider() {
    const slider = document.getElementById('imageSlider');
    const translateX = -slideIndex * 100;
    slider.style.transform = `translateX(${translateX}%)`;
    
    // Update indicators
    const indicators = document.querySelectorAll('.absolute.bottom-4 button');
    indicators.forEach((indicator, index) => {
        if (index === slideIndex) {
            indicator.classList.remove('bg-opacity-50');
            indicator.classList.add('bg-opacity-100');
        } else {
            indicator.classList.remove('bg-opacity-100');
            indicator.classList.add('bg-opacity-50');
        }
    });
}

// Auto-slide every 5 seconds
setInterval(() => {
    moveSlide(1);
}, 5000);

// Initialize
updateSlider();
</script>

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
                <button onclick="document.getElementById('donation-form').scrollIntoView({behavior: 'smooth'});" class="bg-white text-maasai-red hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300">Donate Now</button>
                <a href="contact.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-maasai-red text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">Contact Us</a>
            </div>
        </div>
    </section>

   
    
    <!-- JavaScript for Amount Selection -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const amountButtons = document.querySelectorAll('.amount-btn');
            const amountInput = document.getElementById('amount');
            
            amountButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    amountButtons.forEach(btn => {
                        btn.classList.remove('bg-maasai-red', 'text-white');
                        btn.classList.add('bg-white', 'text-maasai-red');
                    });
                    
                    // Add active class to clicked button
                    this.classList.remove('bg-white', 'text-maasai-red');
                    this.classList.add('bg-maasai-red', 'text-white');
                    
                    // Set the amount in the input field
                    const amount = this.getAttribute('data-amount');
                    amountInput.value = amount;
                });
            });
            
            // Clear button selection when custom amount is entered
            amountInput.addEventListener('input', function() {
                amountButtons.forEach(btn => {
                    btn.classList.remove('bg-maasai-red', 'text-white');
                    btn.classList.add('bg-white', 'text-maasai-red');
                });
            });
        });
    </script>

   
<?php include 'includes/footer.php'; ?>