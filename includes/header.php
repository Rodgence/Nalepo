<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - NALEPO' : 'NALEPO - Natural Livelihood Empowerment and Progress Organization'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maasai-red': '#B91C1C',
                        'earth-brown': '#92400E',
                        'savanna-green': '#059669',
                        'sunset-orange': '#EA580C',
                        'warm-beige': '#FEF3C7'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-maasai-red">NALEPO</h1>
                        <p class="text-xs text-gray-600">Natural Spring of Hope</p>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="<?php echo $current_page == 'index' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">Home</a>
                    <a href="about.php" class="<?php echo $current_page == 'about' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">About</a>
                    <a href="programs.php" class="<?php echo $current_page == 'programs' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">Programs</a>
                    <a href="get-involved.php" class="<?php echo $current_page == 'get-involved' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">Get Involved</a>
                    <a href="impact.php" class="<?php echo $current_page == 'impact' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">Impact</a>
                    <a href="contact.php" class="<?php echo $current_page == 'contact' ? 'text-maasai-red font-semibold' : 'text-gray-700 hover:text-maasai-red'; ?> transition">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-700"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white">
                <a href="index.php" class="block px-3 py-2 <?php echo $current_page == 'index' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Home</a>
                <a href="about.php" class="block px-3 py-2 <?php echo $current_page == 'about' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">About</a>
                <a href="programs.php" class="block px-3 py-2 <?php echo $current_page == 'programs' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Programs</a>
                <a href="get-involved.php" class="block px-3 py-2 <?php echo $current_page == 'get-involved' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Get Involved</a>
                <a href="impact.php" class="block px-3 py-2 <?php echo $current_page == 'impact' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Impact</a>
                <a href="contact.php" class="block px-3 py-2 <?php echo $current_page == 'contact' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Contact</a>
            </div>
        </div>
    </nav>
<!-- Desktop Navigation -->
<div class="hidden md:flex space-x-8">
    <a href="/" class="<?php echo ($page_title == 'Home') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">Home</a>
    <a href="/about" class="<?php echo ($page_title == 'About') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">About</a>
    <a href="/programs" class="<?php echo ($page_title == 'Programs') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">Programs</a>
    <a href="/get-involved" class="<?php echo ($page_title == 'Get Involved') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">Get Involved</a>
    <a href="/impact" class="<?php echo ($page_title == 'Impact') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">Impact</a>
    <a href="/contact" class="<?php echo ($page_title == 'Contact') ? 'text-sunset-orange border-b-2 border-sunset-orange' : 'text-white hover:text-sunset-orange'; ?> transition duration-300">Contact</a>
</div>

<!-- Mobile Navigation -->
<div id="mobile-menu" class="hidden md:hidden bg-maasai-red">
    <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="/" class="<?php echo ($page_title == 'Home') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">Home</a>
        <a href="/about" class="<?php echo ($page_title == 'About') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">About</a>
        <a href="/programs" class="<?php echo ($page_title == 'Programs') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">Programs</a>
        <a href="/get-involved" class="<?php echo ($page_title == 'Get Involved') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">Get Involved</a>
        <a href="/impact" class="<?php echo ($page_title == 'Impact') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">Impact</a>
        <a href="/contact" class="<?php echo ($page_title == 'Contact') ? 'bg-sunset-orange text-white' : 'text-white hover:bg-sunset-orange'; ?> block px-3 py-2 rounded-md text-base font-medium transition duration-300">Contact</a>
    </div>
</div>