<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloryvine Covenant Ministry | Gloryland Chapel</title>
    <link rel="stylesheet" href="src/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/csswind/src/assets/logo.JPG">
</head>
<div id="preloader" class="fixed inset-0 z-[100] bg-church-blue flex flex-col items-center justify-center transition-opacity duration-700">
    <div class="relative">
        <div class="w-24 h-24 border-4 border-church-gold/20 border-t-church-gold rounded-full animate-spin"></div>
        <img src="/csswind/src/assets/logo.JPG" class="absolute inset-0 m-auto h-12 w-12 rounded-full" alt="Loading...">
    </div>
    <p class="mt-4 text-white font-serif italic tracking-widest animate-pulse">Preparing the Altar...</p>
</div>

<script>
    // This script hides the loader once the full page is ready
    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 700); // Matches the duration-700 class
    });
</script>

<body class="bg-church-cream font-sans antialiased">

    <nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="/csswind/src/assets/logo.JPG" alt="Logo" class="h-12 w-12 rounded-full border border-gray-100">
                <div class="flex flex-col">
                    <span class="font-serif text-church-blue font-bold text-lg leading-none">Gloryland Chapel</span>
                    <span class="text-[10px] uppercase tracking-[0.2em] text-church-gold font-bold">Covenant Ministry</span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-10 text-xs font-bold uppercase tracking-widest text-gray-600">
                <a href="index.php?page=home" class="hover:text-church-gold transition-colors">Home</a>
                <a href="index.php?page=sermons" class="hover:text-church-gold transition-colors">Sermons</a>
                <a href="index.php?page=events" class="hover:text-church-gold transition-colors">Events</a>
                <a href="index.php?page=visit" class="bg-church-blue text-white px-8 py-3 rounded-full hover:bg-church-red transition-all shadow-lg shadow-blue-900/20">Plan Visit</a>
            </div>

            <button class="md:hidden text-church-blue mobile-menu-button p-2" aria-expanded="false" aria-label="Open navigation menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>