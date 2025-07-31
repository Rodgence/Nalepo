<?php
$page_title = "About Us";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative text-white pt-16">
        <div class="absolute inset-0">
            <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (2).jpeg" alt="NALEPO Community Work" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">About NALEPO</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover our story, mission, and commitment to empowering vulnerable communities.</p>
            </div>
        </div>
    </section>

    <!-- Organization Background -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-6">NALEPO means "spring" in Maasai—symbolizing life, abundance, and sustainability. Founded with a vision to empower the Maasai and other vulnerable communities, we believe in the transformative power of education, economic empowerment, and environmental stewardship.</p>
                    <p class="text-lg text-gray-600 mb-6">Our organization was born from the understanding that sustainable development requires a holistic approach that addresses education, economic opportunities, gender equality, environmental conservation, and social well-being simultaneously.</p>
                    <p class="text-lg text-gray-600">Through community-driven initiatives and partnerships, we work to create lasting change that empowers individuals and strengthens entire communities.</p>
                </div>
                <div class="bg-warm-beige rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Quick Facts</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center"><i class="fas fa-check text-maasai-red mr-3"></i>Founded to serve Maasai communities</li>
                        <li class="flex items-center"><i class="fas fa-check text-maasai-red mr-3"></i>Focus on sustainable development</li>
                        <li class="flex items-center"><i class="fas fa-check text-maasai-red mr-3"></i>Community-driven approach</li>
                        <li class="flex items-center"><i class="fas fa-check text-maasai-red mr-3"></i>Holistic empowerment programs</li>
                        <li class="flex items-center"><i class="fas fa-check text-maasai-red mr-3"></i>Environmental conservation focus</li>
                    </ul>
                </div>
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

    <!-- Mission & Vision -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-center mb-6">
                        <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-bullseye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Our Mission</h3>
                    </div>
                    <p class="text-gray-600 text-center">To empower vulnerable populations by providing education, economic opportunities, environmental stewardship, and gender equality initiatives that create sustainable, thriving communities.</p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-center mb-6">
                        <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Our Vision</h3>
                    </div>
                    <p class="text-gray-600 text-center">A world where every community has access to quality education, economic opportunities, and environmental resources needed to thrive and prosper for generations to come.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">These principles guide everything we do and shape our approach to community empowerment.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hands-helping text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Community-Centered</h3>
                    <p class="text-gray-600">We believe communities know their needs best and should lead their own development.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainability</h3>
                    <p class="text-gray-600">All our programs are designed for long-term impact and environmental responsibility.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-sunset-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-balance-scale text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Equality</h3>
                    <p class="text-gray-600">We promote gender equality and ensure equal opportunities for all community members.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-earth-brown text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600">We embrace creative solutions and adapt to meet evolving community needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Leadership</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Meet the dedicated leader driving our mission forward.</p>
            </div>
            
            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <div class="w-32 h-32 bg-maasai-red rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-user text-white text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Emanuel Punuka</h3>
                    <p class="text-lg text-maasai-red font-semibold mb-4">Chief Executive Officer</p>
                    <p class="text-gray-600 mb-6">Emanuel brings years of experience in community development and a deep understanding of the challenges facing vulnerable populations. His leadership has been instrumental in establishing NALEPO's community-centered approach and sustainable development programs.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="mailto:info@nalepoorga.com" class="text-maasai-red hover:text-red-700 transition">
                            <i class="fas fa-envelope text-xl"></i>
                        </a>
                        <a href="tel:+255682398053" class="text-maasai-red hover:text-red-700 transition">
                            <i class="fas fa-phone text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-maasai-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Our Mission</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Be part of the change. Help us empower communities and transform lives through sustainable development.</p>
            <div class="space-x-4">
                <a href="get-involved.php" class="bg-white text-maasai-red hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">Get Involved</a>
                <a href="programs.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-maasai-red text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">View Programs</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>