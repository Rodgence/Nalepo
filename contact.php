<?php
$page_title = "Contact Us";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-savanna-green to-earth-brown text-white pt-16">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Get in touch with us to learn more about our work or to get involved in our mission.</p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We'd love to hear from you. Reach out to us through any of the following channels.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Email -->
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600"><a href="mailto:info@nalepoorga.com" class="hover:text-maasai-red transition">info@nalepoorga.com</a></p>
                </div>

                <!-- Phone -->
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Phone</h3>
                    <p class="text-gray-600"><a href="tel:+255682398053" class="hover:text-savanna-green transition">+255 682 398 053</a></p>
                </div>

                <!-- Website -->
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="bg-sunset-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Website</h3>
                    <p class="text-gray-600"><a href="https://nalepoorga.com" target="_blank" class="hover:text-sunset-orange transition">nalepoorga.com</a></p>
                </div>

                <!-- Leadership -->
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="bg-earth-brown text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">CEO</h3>
                    <p class="text-gray-600">Emanuel Punuka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Send us a Message</h3>
                <form id="contact-form" action="send-contact.php" method="POST" class="space-y-6">
                    <?php if (isset($_GET['status'])): ?>
                        <?php if ($_GET['status'] === 'success'): ?>
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                                <strong>Success!</strong> Your message has been sent successfully. We'll get back to you soon!
                            </div>
                        <?php elseif ($_GET['status'] === 'error'): ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                                <strong>Error!</strong> There was a problem sending your message. Please try again.
                                <?php if (isset($_GET['msg'])): ?>
                                    <br><small><?php echo htmlspecialchars($_GET['msg']); ?></small>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent" required>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="volunteer">Volunteer Opportunities</option>
                            <option value="donation">Donation Information</option>
                            <option value="partnership">Partnership Opportunities</option>
                            <option value="media">Media Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-maasai-red focus:border-transparent" placeholder="Tell us how we can help you..." required></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" name="newsletter" class="h-4 w-4 text-maasai-red focus:ring-maasai-red border-gray-300 rounded">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            Subscribe to our newsletter for updates and impact stories
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-maasai-red text-white font-bold py-3 px-6 rounded-lg hover:bg-red-700 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>