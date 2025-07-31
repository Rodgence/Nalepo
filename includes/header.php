<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - NALEPO' : 'NALEPO - Natural Livelihood Empowerment and Progress Organization'; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="images/logo.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="images/logo.jpeg">
    
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
            <div class="flex justify-between h-20"> <!-- Increased height for logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="index.php" class="flex items-center space-x-3">
                            <!-- Logo Image -->
                            <img src="images/logo.jpeg" alt="NALEPO Logo" class="h-16 w-16 object-contain">
                            <!-- Logo Text -->
                            <div>
                                <h1 class="text-2xl font-bold text-maasai-red">NALEPO</h1>
                                <p class="text-xs text-gray-600">Natural Spring of Hope</p>
                            </div>
                        </a>
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
            
            <!-- Mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                    <a href="index.php" class="block px-3 py-2 <?php echo $current_page == 'index' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Home</a>
                    <a href="about.php" class="block px-3 py-2 <?php echo $current_page == 'about' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">About</a>
                    <a href="programs.php" class="block px-3 py-2 <?php echo $current_page == 'programs' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Programs</a>
                    <a href="get-involved.php" class="block px-3 py-2 <?php echo $current_page == 'get-involved' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Get Involved</a>
                    <a href="impact.php" class="block px-3 py-2 <?php echo $current_page == 'impact' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Impact</a>
                    <a href="contact.php" class="block px-3 py-2 <?php echo $current_page == 'contact' ? 'text-maasai-red font-semibold' : 'text-gray-700'; ?>">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Content wrapper with top padding for fixed nav -->
    <div class="pt-20"> <!-- Increased padding for taller nav -->