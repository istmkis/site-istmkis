<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Standard -->
    <title><?php echo $current_title; ?></title>
    <meta name="description" content="<?php echo $current_desc; ?>">
    <meta name="author" content="ISTM-KISANGANI">

    <!-- Open Graph (Pour le partage sur Facebook/WhatsApp) -->
    <meta property="og:title" content="<?php echo $current_title; ?>">
    <meta property="og:description" content="<?php echo $current_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://istmkis.ac.cd/?page=<?php echo $page; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $current_title; ?>">
    <meta name="twitter:description" content="<?php echo $current_desc; ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Animation fluide pour le menu mobile */
        #mobile-menu {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

<nav class="bg-blue-900 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="?page=home" class="text-xl md:text-2xl font-bold tracking-tight">
                ISTM <span class="text-yellow-400">KISANGANI</span>
            </a>

            <div class="hidden md:flex items-center space-x-6 font-medium">
                <a href="?page=home" class="hover:text-blue-300 transition">Accueil</a>
                <a href="?page=coge" class="hover:text-blue-300 transition">COGE</a>
                <a href="?page=documents" class="hover:text-blue-300 transition">Documents</a>
                <a href="?page=biblio" class="hover:text-blue-300 transition">Bibliothèque</a>
                <a href="?page=contact" class="hover:text-blue-300 transition">Contact</a>
                <a href="?page=portail" class="bg-yellow-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition shadow-md">Portails</a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-2xl focus:outline-none p-2 rounded-lg hover:bg-blue-800 transition">
                    <i class="fas fa-bars" id="menu-icon"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-blue-800">
            <div class="flex flex-col space-y-4 mt-4">
                <a href="?page=home" class="hover:text-blue-300 transition px-2 py-1">Accueil</a>
                <a href="?page=coge" class="hover:text-blue-300 transition px-2 py-1">COGE</a>
                <a href="?page=documents" class="hover:text-blue-300 transition px-2 py-1">Documents</a>
                <a href="?page=biblio" class="hover:text-blue-300 transition px-2 py-1">Bibliothèque</a>
                <a href="?page=contact" class="hover:text-blue-300 transition px-2 py-1">Contact</a>
                <a href="?page=portail" class="bg-blue-600 text-center py-3 rounded-xl font-bold">Portails Institutionnels</a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Logique du menu mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    menuBtn.addEventListener('click', () => {
        // Alterne la classe 'hidden' pour afficher/cacher le menu
        mobileMenu.classList.toggle('hidden');

        // Change l'icône de 'bars' à 'xmark' (fermeture)
        if (mobileMenu.classList.contains('hidden')) {
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
        } else {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-xmark');
        }
    });
</script>

<main class="flex-grow">