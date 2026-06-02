<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloryvine Covenant Ministry | Gloryland Chapel</title>
    <link rel="stylesheet" href="src/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/csswind/src/assets/logo.JPG">
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>
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

    <nav x-data="{ mobileMenuOpen: false }" class="w-full px-2 md:px-6 mt-4 sticky top-0 z-[100]">
        <div class="max-w-7xl mx-auto bg-white/80 backdrop-blur-md rounded-full shadow-2xl py-2 md:py-3 px-4 md:px-8 flex justify-between items-center border border-gray-200 relative">

            <a href="index.php?page=home" class="flex items-center gap-2 md:gap-3 group shrink-0">
                <div class="w-8 h-8 md:w-9 md:h-9 bg-church-blue text-white rounded-xl flex items-center justify-center text-lg md:text-lg font-bold shadow-lg">G</div>
                <span class="text-lg md:text-xl font-bold tracking-tighter text-church-blue">Gloryland <span class="hidden sm:inline text-church-gold">Chapel</span></span>
            </a>

            <ul class="hidden lg:flex gap-6 font-semibold text-church-blue text-sm">
                <li class="relative group">
                    <a href="index.php?page=home" class="flex flex-col items-center gap-1.5 hover:text-church-gold transition">
                        <i class="fas fa-house text-lg"></i>
                        <span>Home</span>
                    </a>
                    <span class="absolute -bottom-1 left-0 w-0 h-1 bg-church-gold transition-all group-hover:w-full rounded-full"></span>
                </li>
                <li class="relative group">
                    <a href="index.php?page=sermons" class="flex flex-col items-center gap-1.5 hover:text-church-gold transition">
                        <i class="fas fa-microphone text-lg"></i>
                        <span>Sermons</span>
                    </a>
                    <span class="absolute -bottom-1 left-0 w-0 h-1 bg-church-gold transition-all group-hover:w-full rounded-full"></span>
                </li>
                <li class="relative group">
                    <a href="index.php?page=events" class="flex flex-col items-center gap-1.5 hover:text-church-gold transition">
                        <i class="fas fa-calendar text-lg"></i>
                        <span>Events</span>
                    </a>
                    <span class="absolute -bottom-1 left-0 w-0 h-1 bg-church-gold transition-all group-hover:w-full rounded-full"></span>
                </li>
                <li class="relative group">
                    <a href="index.php?page=church" class="flex flex-col items-center gap-1.5 hover:text-church-gold transition">
                        <i class="fas fa-gopuram text-lg"></i>
                        <span>Church</span>
                    </a>
                    <span class="absolute -bottom-1 left-0 w-0 h-1 bg-church-gold transition-all group-hover:w-full rounded-full"></span>
                </li>
                <li class="relative group">
                    <a href="index.php?page=school" class="flex flex-col items-center gap-1.5 hover:text-church-gold transition">
                        <i class="fas fa-graduation-cap text-lg"></i>
                        <span>School</span>
                    </a>
                    <span class="absolute -bottom-1 left-0 w-0 h-1 bg-church-gold transition-all group-hover:w-full rounded-full"></span>
                </li>
            </ul>

            <div class="flex items-center gap-2 md:gap-4 shrink-0">
                <a href="index.php?page=visit" class="hidden md:inline-block bg-church-blue text-white px-5 lg:px-7 py-2 md:py-2.5 rounded-full font-black text-xs lg:text-sm shadow-xl hover:bg-church-red transition-all transform hover:-translate-y-0.5 active:scale-95">Plan Visit</a>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-church-blue focus:outline-none p-2">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="mobileMenuOpen"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="absolute top-full left-0 right-0 mt-3 mx-2 bg-white rounded-3xl p-6 shadow-2xl lg:hidden border border-gray-200"
                style="display: none;">
                <ul class="flex flex-col gap-4 font-bold text-church-blue text-sm">
                    <li><a href="index.php?page=home" class="block py-2 hover:text-church-gold">Home</a></li>
                    <li><a href="index.php?page=sermons" class="block py-2 hover:text-church-gold">Sermons</a></li>
                    <li><a href="index.php?page=events" class="block py-2 hover:text-church-gold">Events</a></li>
                    <li><a href="index.php?page=church" class="block py-2 hover:text-church-gold">Church</a></li>
                    <li><a href="index.php?page=school" class="block py-2 hover:text-church-gold">School</a></li>
                    <hr class="border-gray-200">
                    <li><a href="index.php?page=visit" class="block py-2 text-center bg-church-blue text-white rounded-2xl">Plan Visit</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Page container start: constrains page content width with modest horizontal padding -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">