<?php
$page_title = "Home";
include 'includes/header.php';
?>

    <!-- Hero Section with Image Slider -->
    <section class="relative h-screen overflow-hidden">
        <!-- Image Slider Container -->
        <div class="absolute inset-0 slider-container">
            <!-- Slide 1 -->
            <div class="slide active absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000" 
                 style="background-image: url('images/WhatsApp Image 2025-07-31 at 11.03.59 AM (2).jpeg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" 
                 style="background-image: url('images/WhatsApp Image 2025-07-31 at 11.03.59 AM (1).jpeg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            
        
            <!-- Slide 4 -->
            <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" 
                 style="background-image: url('images/WhatsApp Image 2025-07-31 at 11.04.00 AM.jpeg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            
            <!-- Slide 5 -->
            <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0" 
                 style="background-image: url('images/WhatsApp Image 2025-07-31 at 11.04.00 AM (1).jpeg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">Empowering Communities, Transforming Lives</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-slide-up">NALEPO means \"spring\" in Maasai—symbolizing life, abundance, and sustainability for vulnerable communities.</p>
                <div class="space-x-4 animate-slide-up">
                    <a href="get-involved.php" class="bg-savanna-green hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">Donate Now</a>
                    <a href="/about" class="bg-transparent border-2 border-white hover:bg-white hover:text-maasai-red text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">Learn More</a>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
            <div class="flex space-x-3">
                <button class="slider-dot active w-3 h-3 rounded-full bg-white opacity-75 hover:opacity-100 transition-opacity duration-300" data-slide="0"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300" data-slide="1"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300" data-slide="2"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300" data-slide="3"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300" data-slide="4"></button>
            </div>
        </div>
        
        <!-- Slider Arrow Navigation -->
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 text-white hover:text-sunset-orange transition-colors duration-300" id="prevSlide">
            <i class="fas fa-chevron-left text-3xl"></i>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 text-white hover:text-sunset-orange transition-colors duration-300" id="nextSlide">
            <i class="fas fa-chevron-right text-3xl"></i>
        </button>
    </section>

    <!-- Add this JavaScript before the closing body tag -->
    <script>
        // Image Slider Functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        const totalSlides = slides.length;
        
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            });
            
            // Show current slide
            slides[index].classList.remove('opacity-0');
            slides[index].classList.add('opacity-100');
            
            // Update dots
            dots.forEach(dot => {
                dot.classList.remove('active', 'opacity-75');
                dot.classList.add('opacity-50');
            });
            dots[index].classList.add('active', 'opacity-75');
            dots[index].classList.remove('opacity-50');
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Auto-advance slides every 6 seconds (increased for 5 slides)
        setInterval(nextSlide, 6000);
        
        // Navigation event listeners
        document.getElementById('nextSlide').addEventListener('click', nextSlide);
        document.getElementById('prevSlide').addEventListener('click', prevSlide);
        
        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });
    </script>

    <!-- Mission Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Empower vulnerable populations by providing education, economic opportunities, environmental stewardship, and gender equality.</p>
            </div>
        </div>
    </section>

    <!-- Organization Background -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About NALEPO</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Established in 2023, NALEPO is a registered non-profit organization serving the Maasai and other marginalized communities globally. Based in the Ngorongoro District, we are committed to improving livelihoods through community-centered programs.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        The Maasai people face numerous challenges, including limited access to education, healthcare, and economic opportunities. In our region, literacy rates are below 40%, and income-generating opportunities are scarce, particularly for women and youth.
                    </p>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-maasai-red mb-3">Our Approach</h3>
                        <p class="text-gray-600">We integrate local knowledge, prioritize cultural relevance, and design sustainable, scalable solutions that strengthen social cohesion and foster community-led development.</p>
                    </div>
                </div>
                <div class="relative w-full h-96 overflow-hidden">
                    <!-- Full-width Image Slider -->
                    <div class="challenges-slider relative w-full h-full">
                        <div class="slides-container w-full h-full">
                            <div class="slide active absolute inset-0">
                                <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (2).jpeg" alt="Challenge 1" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="slide opacity-0 absolute inset-0">
                                <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (1).jpeg" alt="Challenge 2" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="slide opacity-0 absolute inset-0">
                                <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM.jpeg" alt="Challenge 3" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="slide opacity-0 absolute inset-0">
                                <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM (1).jpeg" alt="Challenge 4" class="w-full h-full object-cover">
                            </div>
                        </div>
                        
                        <!-- Navigation Dots -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                            <button class="challenge-dot active w-3 h-3 rounded-full bg-white opacity-75"></button>
                            <button class="challenge-dot w-3 h-3 rounded-full bg-white opacity-50"></button>
                            <button class="challenge-dot w-3 h-3 rounded-full bg-white opacity-50"></button>
                            <button class="challenge-dot w-3 h-3 rounded-full bg-white opacity-50"></button>
                        </div>
                    </div>

                    <script>
                        // Auto-slide functionality
                        const challengeSlides = document.querySelectorAll('.challenges-slider .slide');
                        const challengeDots = document.querySelectorAll('.challenge-dot');
                        let currentChallengeSlide = 0;

                        function showChallengeSlide(index) {
                            challengeSlides.forEach(slide => {
                                slide.classList.remove('opacity-100');
                                slide.classList.add('opacity-0');
                            });
                            challengeDots.forEach(dot => {
                                dot.classList.remove('active', 'opacity-75');
                                dot.classList.add('opacity-50');
                            });

                            challengeSlides[index].classList.remove('opacity-0');
                            challengeSlides[index].classList.add('opacity-100');
                            challengeDots[index].classList.add('active', 'opacity-75');
                        }

                        function nextChallengeSlide() {
                            currentChallengeSlide = (currentChallengeSlide + 1) % challengeSlides.length;
                            showChallengeSlide(currentChallengeSlide);
                        }

                        // Change slides every 4 seconds
                        setInterval(nextChallengeSlide, 4000);

                        // Add click handlers for dots
                        challengeDots.forEach((dot, index) => {
                            dot.addEventListener('click', () => {
                                currentChallengeSlide = index;
                                showChallengeSlide(currentChallengeSlide);
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Core Focus Areas -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Focus Areas</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive programs designed to address the root causes of poverty and empower communities for sustainable development.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="text-center">
                        <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Education & Skills Development</h3>
                        <p class="text-gray-600 mb-4">Scholarships, learning materials, and vocational training focused on life skills, entrepreneurship, and trades.</p>
                        <ul class="text-sm text-gray-500 text-left space-y-1">
                            <li>• Educational scholarships</li>
                            <li>• Vocational training programs</li>
                            <li>• Life skills workshops</li>
                            <li>• Entrepreneurship training</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="text-center">
                        <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-coins text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Economic Empowerment</h3>
                        <p class="text-gray-600 mb-4">Micro-loans, business development workshops, agricultural cooperatives, and market linkages for local artisans.</p>
                        <ul class="text-sm text-gray-500 text-left space-y-1">
                            <li>• Micro-loan programs</li>
                            <li>• Business development workshops</li>
                            <li>• Agricultural cooperatives</li>
                            <li>• Market linkage support</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="text-center">
                        <div class="bg-sunset-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-venus text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gender Equality</h3>
                        <p class="text-gray-600 mb-4">Women-focused training, mentorship, access to capital, and awareness campaigns.</p>
                        <ul class="text-sm text-gray-500 text-left space-y-1">
                            <li>• Women empowerment programs</li>
                            <li>• Mentorship initiatives</li>
                            <li>• Capital access support</li>
                            <li>• Awareness campaigns</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="text-center">
                        <div class="bg-green-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-leaf text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Environmental Conservation</h3>
                        <p class="text-gray-600 mb-4">Tree planting, sustainable farming training, and community-led conservation projects.</p>
                        <ul class="text-sm text-gray-500 text-left space-y-1">
                            <li>• Tree planting initiatives</li>
                            <li>• Sustainable farming training</li>
                            <li>• Conservation projects</li>
                            <li>• Environmental awareness</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="text-center">
                        <div class="bg-earth-brown text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-heart text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Social Well-being</h3>
                        <p class="text-gray-600 mb-4">Counseling, addiction recovery, mental health education, and disease prevention initiatives.</p>
                        <ul class="text-sm text-gray-500 text-left space-y-1">
                            <li>• Mental health education</li>
                            <li>• Counseling services</li>
                            <li>• Addiction recovery support</li>
                            <li>• Disease prevention programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section class="py-16 bg-maasai-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact</h2>
                <p class="text-xl mb-8">Measurable results from our community-centered approach</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">500+</div>
                    <p class="text-xl">School children received supplies</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">20+</div>
                    <p class="text-xl">Women-led businesses created</p>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">85%</div>
                    <p class="text-xl">Community literacy rate improvement</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Partner with NALEPO -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Partner with NALEPO?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-maasai-red text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Community-Led Development</h3>
                    <p class="text-gray-600">Strong foundation in grassroots, community-driven solutions</p>
                </div>
                <div class="text-center">
                    <div class="bg-savanna-green text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Proven Track Record</h3>
                    <p class="text-gray-600">Demonstrated impact with measurable results and sustainable outcomes</p>
                </div>
                <div class="text-center">
                    <div class="bg-sunset-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">UN SDG Alignment</h3>
                    <p class="text-gray-600">Contributing to Sustainable Development Goals in poverty reduction, education, and gender equality</p>
                </div>
                <div class="text-center">
                    <div class="bg-earth-brown text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Cultural Relevance</h3>
                    <p class="text-gray-600">Integrating local knowledge with sustainable, scalable solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-savanna-green text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Us in Making a Difference</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Your support can transform lives and build sustainable communities. Let us create a ripple of change that echoes across generations.</p>
            <div class="space-x-4">
                <a href="get-involved.php" class="bg-white text-savanna-green hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300">Get Involved Today</a>
                <a href="/contact" class="bg-transparent border-2 border-white hover:bg-white hover:text-savanna-green text-white font-bold py-3 px-8 rounded-lg transition duration-300">Contact Us</a>
            </div>
        </div>
    </section>

     <!-- Gallery Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Impact in Action</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">See the communities we serve and the positive changes happening through your support.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Gallery Images -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (1).jpeg" alt="Community Impact" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.03.59 AM (2).jpeg" alt="Community Development" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM (1).jpeg" alt="Education Programs" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.04.00 AM.jpeg" alt="Environmental Conservation" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.23.25 AM.jpeg" alt="Healthcare Initiatives" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.30.46 AM.jpeg" alt="Economic Empowerment" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.31.23 AM.jpeg" alt="Women Empowerment" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/WhatsApp Image 2025-07-31 at 11.32.02 AM.jpeg" alt="Youth Development" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-300"></i>
                    </div>
                </div>
            </div>
            
            <!-- Gallery CTA -->
            <div class="text-center mt-12">
                <p class="text-lg text-gray-600 mb-6">Every image tells a story of transformation and hope.</p>
                <a href="get-involved.php" class="bg-maasai-red hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">
                    <i class="fas fa-chart-line mr-2"></i>
                    Donate Now
                </a>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php'; ?>