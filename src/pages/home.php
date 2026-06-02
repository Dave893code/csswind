<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloryvine Covenant Ministries</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,400&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        deepBlue: '#0b1b3d',
                        glowBlue: '#1e3a8a',
                        ivoryBg: '#fdfbf7',
                        ivoryCard: '#f4f0e6',
                        goldAccent: '#d4af37'
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif']
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth continuous marquee scroll for cards track */
        @keyframes boxScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: flex;
            width: max-content;
            animation: boxScroll 35s linear infinite;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>

<body class="bg-ivoryBg text-deepBlue font-sans antialiased m-0 p-0 selection:bg-deepBlue selection:text-white">

    <!-- Page container: match routed pages spacing -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-10">

        <style>
            /* Parallax (no external libs). Respects reduced-motion. */
            .parallax-layer {
                will-change: transform;
                transform: translate3d(0, 0, 0);
            }

            @media (prefers-reduced-motion: reduce) {
                .parallax-layer {
                    transform: none !important;
                }
            }

            /* Scroll reveal for page sections */
            .reveal {
                opacity: 0;
                transform: translateY(36px);
                transition: opacity 700ms ease-out, transform 700ms ease-out;
            }

            .reveal.is-visible {
                opacity: 1;
                transform: translateY(0);
            }
        </style>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                // Hero parallax
                (function() {
                    const reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                    if (reduce) return;

                    const layers = Array.from(document.querySelectorAll('[data-parallax]'));
                    if (!layers.length) return;

                    let ticking = false;

                    function update() {
                        ticking = false;
                        const y = window.scrollY || 0;
                        const vh = Math.max(window.innerHeight || 1, 1);

                        for (const el of layers) {
                            const speed = parseFloat(el.getAttribute('data-parallax') || '0.2');
                            const offset = y * speed * 0.22;
                            el.style.transform = `translate3d(0, ${offset}px, 0)`;
                        }
                    }

                    function onScroll() {
                        if (ticking) return;
                        ticking = true;
                        window.requestAnimationFrame(update);
                    }

                    window.addEventListener('scroll', onScroll, {
                        passive: true
                    });
                    window.addEventListener('resize', onScroll);
                    update();
                })();

                // Reveal on scroll (intersection)
                (function() {
                    const items = Array.from(document.querySelectorAll('.reveal'));
                    if (!items.length) return;

                    const reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                    if (reduce) {
                        for (const el of items) el.classList.add('is-visible');
                        return;
                    }

                    const io = new IntersectionObserver((entries) => {
                        for (const e of entries) {
                            if (e.isIntersecting) e.target.classList.add('is-visible');
                        }
                    }, {
                        threshold: 0.08,
                        rootMargin: '0px 0px -10% 0px'
                    });

                    for (const el of items) io.observe(el);
                })();
            });
        </script>

        <div class="bg-deepBlue text-white/90 text-xs md:text-sm py-2 px-4 flex flex-col sm:flex-row justify-between items-center gap-2 border-b border-white/10 z-50 relative">
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <p>Join us for In-Person Services on Wednesdays at 6:30pm & Sundays at 8:00am & 10:30am.</p>
            </div>
            <a href="index.php?page=watch" class="text-goldAccent hover:underline font-semibold flex items-center gap-1">
                <i class="fas fa-play-circle"></i> See our live stream
            </a>
        </div>

        <nav x-data="{ mobileMenuOpen: false }" class="w-full px-2 md:px-6 mt-4 sticky top-0 z-[100]">
            <div class="max-w-7xl mx-auto bg-white/80 backdrop-blur-md rounded-full shadow-2xl py-2 md:py-3 px-4 md:px-8 flex justify-between items-center border border-gray-200 relative">

                <a href="index.php?page=home" class="flex items-center gap-2 md:gap-3 group shrink-0">
                    <div class="w-8 h-8 md:w-9 md:h-9 bg-deepBlue text-white rounded-xl flex items-center justify-center text-lg md:text-lg font-bold shadow-lg"><i class="fas fa-cross"></i></div>
                    <span class="text-lg md:text-xl font-bold tracking-tighter text-deepBlue">GLORYVINE <span class="hidden sm:inline text-goldAccent">Covenant</span></span>
                </a>

                <ul class="hidden lg:flex gap-6 font-semibold text-deepBlue text-sm">
                    <li class="relative group">
                        <a href="index.php?page=home" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-house text-lg"></i>
                            <span>Home</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>
                    <li class="relative group">
                        <a href="index.php?page=im-new" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-star text-lg"></i>
                            <span>I'm New</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>
                    <li class="relative group">
                        <a href="index.php?page=church" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-gopuram text-lg"></i>
                            <span>Church</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>
                    <li class="relative group">
                        <a href="index.php?page=school" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-graduation-cap text-lg"></i>
                            <span>School</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>
                    <li class="relative group">
                        <a href="index.php?page=early-childhood-center" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-heart text-lg"></i>
                            <span>Early Childhood</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>
                    <li class="relative group">
                        <a href="index.php?page=news-events" class="flex flex-col items-center gap-1.5 hover:text-goldAccent transition">
                            <i class="fas fa-newspaper text-lg"></i>
                            <span>News & Events</span>
                        </a>
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-goldAccent transition-all group-hover:w-full rounded-full"></span>
                    </li>


                </ul>

                <div class="flex items-center gap-2 md:gap-4 shrink-0">
                    <a href="index.php?page=visit" class="hidden md:inline-block bg-deepBlue text-white px-5 lg:px-7 py-2 md:py-2.5 rounded-full font-black text-xs lg:text-sm shadow-xl hover:bg-goldAccent transition-all transform hover:-translate-y-0.5 active:scale-95">Plan Visit</a>

                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-deepBlue focus:outline-none p-2">
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
                    <ul class="flex flex-col gap-4 font-bold text-deepBlue text-sm">
                        <li><a href="index.php?page=home" class="block py-2 hover:text-goldAccent">Home</a></li>
                        <li><a href="index.php?page=im-new" class="block py-2 hover:text-goldAccent">I'm New</a></li>
                        <li><a href="index.php?page=church" class="block py-2 hover:text-goldAccent">Church</a></li>
                        <li><a href="index.php?page=school" class="block py-2 hover:text-goldAccent">School</a></li>
                        <li><a href="index.php?page=early-childhood-center" class="block py-2 hover:text-goldAccent">Early Childhood Center</a></li>
                        <li><a href="index.php?page=news-events" class="block py-2 hover:text-goldAccent">News & Events</a></li>
                        <hr class="border-gray-200">
                        <li><a href="index.php?page=visit" class="block py-2 text-center bg-deepBlue text-white rounded-2xl">Plan Visit</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <header class="relative min-height-[85vh] lg:h-[88vh] bg-deepBlue text-white overflow-hidden flex items-center justify-center py-20 px-4">
            <div id="hero-slider" class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-b from-deepBlue/80 via-deepBlue/70 to-deepBlue/95 z-10 parallax-layer" data-parallax="0.12"></div>
                <img src="https://images.unsplash.com/photo-1548625361-195feee742f1?q=80&w=2000" alt="Church Background" class="w-full h-full object-cover object-center transform scale-105 filter blur-[2px] parallax-layer" data-parallax="0.28">
            </div>

            <div class="relative z-20 text-center flex flex-col items-center px-4">
                <span class="text-goldAccent font-black tracking-[0.4em] text-xs uppercase mb-6 bg-white/5 border border-goldAccent/30 px-5 py-2.5 rounded-full backdrop-blur-md shadow-inner animate-pulse">
                    Faith • Hope • Love
                </span>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-black leading-[1.1] mb-8 tracking-tight max-w-4xl">
                    Touching Lives <br>
                    <span class="text-goldAccent font-sans italic font-light text-3xl sm:text-5xl lg:text-6xl block mt-3">Covenant & Grace</span>
                </h1>

                <p class="text-white/80 font-medium leading-relaxed text-base sm:text-xl max-w-3xl mb-12 font-sans">
                    Welcome to <strong class="text-white font-semibold">Gloryvine Covenant Ministries</strong>. Experience a vibrant community built around the uncompromised Word of God and the comforting warmth of His presence.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full sm:w-auto">
                    <a href="index.php?page=watch" class="w-full sm:w-auto bg-goldAccent hover:bg-white text-deepBlue px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest shadow-lg shadow-goldAccent/20 transition-all duration-300 transform hover:-translate-y-1">
                        Watch Our Service
                    </a>
                    <a href="index.php?page=vision" class="w-full sm:w-auto border-2 border-white/30 hover:border-white text-white bg-white/5 hover:bg-white/10 backdrop-blur-sm px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest transition-all duration-300 transform hover:-translate-y-1">
                        Our Vision
                    </a>
                </div>
            </div>
        </header>

        <section class="reveal w-full overflow-hidden py-12 bg-ivoryCard/60 border-y border-deepBlue/5">
            <div class="w-full relative">
                <div class="animate-marquee gap-6 px-2">
                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 hover:border-goldAccent/80 rounded-2xl shadow-sm text-deepBlue transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-scroll text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Revelation</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-wind text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Spirit-Led</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 hover:border-goldAccent/80 rounded-2xl shadow-sm text-deepBlue transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-shield-alt text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Divine Armor</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-gem text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Precious Grace</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 hover:border-goldAccent/80 rounded-2xl shadow-sm text-deepBlue transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-anchor text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Steadfast Hope</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-sun text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Eternal Light</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 hover:border-goldAccent/80 rounded-2xl shadow-sm text-deepBlue transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-mountain text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Unshakable Faith</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md transition-all duration-300 hover:-translate-y-1 group">
                        <i class="fas fa-fire text-2xl text-goldAccent group-hover:scale-110 transition-transform"></i>
                        <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Holy Fire</span>
                    </div>

                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 rounded-2xl shadow-sm text-deepBlue" aria-hidden="true">
                        <i class="fas fa-scroll text-2xl text-goldAccent"></i> <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Revelation</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md" aria-hidden="true">
                        <i class="fas fa-wind text-2xl text-goldAccent"></i> <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Spirit-Led</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-white border-2 border-deepBlue/10 rounded-2xl shadow-sm text-deepBlue" aria-hidden="true">
                        <i class="fas fa-shield-alt text-2xl text-goldAccent"></i> <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Divine Armor</span>
                    </div>
                    <div class="flex items-center gap-4 px-8 py-5 bg-deepBlue text-white border-2 border-deepBlue rounded-2xl shadow-md" aria-hidden="true">
                        <i class="fas fa-gem text-2xl text-goldAccent"></i> <span class="font-black tracking-wider uppercase text-xs sm:text-sm">Precious Grace</span>
                    </div>
                </div>
            </div>
        </section>

        <main class="w-full py-16">

            <!-- What to Expect (Guest Invitation) -->
            <section class="reveal relative overflow-hidden rounded-[2.5rem] bg-deepBlue/90 border border-white/10 shadow-2xl px-6 sm:px-10 py-14 my-12 mx-2 sm:mx-4 lg:mx-6">

                <div class="absolute -top-24 -right-24 w-72 h-72 bg-goldAccent/20 rounded-full blur-3xl parallax-layer" data-parallax="0.08"></div>
                <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-glowBlue/30 rounded-full blur-3xl parallax-layer" data-parallax="0.14"></div>

                <div class="relative z-10 max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                        <div class="lg:col-span-1">
                            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-white/80 border border-white/15 rounded-full px-4 py-2 backdrop-blur-md">
                                <i class="fas fa-compass text-goldAccent"></i>
                                What to Expect
                            </span>
                            <h2 class="mt-4 text-4xl sm:text-5xl font-serif text-white leading-tight">
                                A Sunday that feels simple.
                            </h2>
                            <p class="mt-4 text-white/70 leading-relaxed">
                                If you’re visiting for the first time, you’re welcome here. This is what your morning will feel like—step by step.
                            </p>

                            <div class="mt-6 flex flex-col gap-3">
                                <div class="flex items-start gap-3 rounded-3xl bg-white/5 border border-white/10 p-5">
                                    <div class="w-10 h-10 rounded-2xl bg-deepBlue text-white flex items-center justify-center shadow-lg shadow-deepBlue/30">
                                        <i class="fas fa-shirt"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold">The Atmosphere</p>
                                        <p class="text-white/70 text-sm mt-1">Casual and comfortable. Dress however you feel confident to worship.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 rounded-3xl bg-white/5 border border-white/10 p-5">
                                    <div class="w-10 h-10 rounded-2xl bg-deepBlue text-white flex items-center justify-center shadow-lg shadow-deepBlue/30">
                                        <i class="fas fa-baby"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold">Kids & Youth</p>
                                        <p class="text-white/70 text-sm mt-1">A safe, fun place for your children. Learn more about our Kids Ministry.</p>
                                        <a href="index.php?page=early-childhood-center" class="mt-3 inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-deepBlue bg-goldAccent hover:bg-white px-5 py-3 rounded-full transition-all duration-300">
                                            Learn about Kids
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="relative overflow-hidden rounded-[2.2rem] border border-white/10 bg-deepBlue">
                                <div class="absolute inset-0 bg-gradient-to-br from-deepBlue/80 via-glowBlue/30 to-goldAccent/10"></div>

                                <div class="relative z-10 p-7 sm:p-10">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="text-white/70 text-xs uppercase tracking-widest font-black">Welcome Video</p>
                                            <h3 class="text-white font-serif text-3xl sm:text-4xl mt-2">Meet the Pastors</h3>
                                        </div>
                                        <span class="hidden sm:inline-flex text-xs uppercase tracking-widest font-black text-white/80 border border-white/15 rounded-full px-4 py-2 backdrop-blur-md">
                                            60–90 seconds
                                        </span>
                                    </div>

                                    <div class="mt-6 rounded-[1.7rem] overflow-hidden border border-white/10 bg-black/20">
                                        <div class="aspect-video bg-[url('https://images.unsplash.com/photo-1520975958225-0db2c5d7e2e0?q=80&w=1200')] bg-cover bg-center opacity-90"></div>
                                        <div class="-mt-0 px-6 pb-6">
                                            <div class="flex items-center gap-4">
                                                <div class="w-14 h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center">
                                                    <i class="fas fa-play text-white text-2xl"></i>
                                                </div>
                                                <div>
                                                    <p class="text-white font-bold">Watch our Sunday morning tour</p>
                                                    <p class="text-white/70 text-sm">A quick welcome + overview of what to expect.</p>
                                                </div>
                                            </div>

                                            <!-- Replace href with your real video page when ready -->
                                            <a href="index.php?page=watch" class="mt-6 inline-flex w-full sm:w-auto items-center justify-center gap-2 bg-white hover:bg-goldAccent hover:text-deepBlue text-deepBlue px-7 py-4 rounded-full font-black text-xs uppercase tracking-widest transition-all duration-300">
                                                Play Welcome Video
                                                <i class="fas fa-video"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="rounded-3xl bg-white/5 border border-white/10 p-5">
                                            <p class="text-white font-bold">You’ll be guided</p>
                                            <p class="text-white/70 text-sm mt-1">Team members will help you find your seats and answer questions.</p>
                                        </div>
                                        <div class="rounded-3xl bg-white/5 border border-white/10 p-5">
                                            <p class="text-white font-bold">You can relax</p>
                                            <p class="text-white/70 text-sm mt-1">We keep things warm, clear, and not complicated.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reveal relative bg-deepBlue text-white overflow-hidden rounded-[2.5rem] shadow-2xl border border-white/5 my-12 mx-2 sm:mx-4 lg:mx-6">

                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[70%] h-[70%] bg-glowBlue/40 rounded-full blur-[120px] pointer-events-none z-0 parallax-layer" data-parallax="0.18"></div>

                <div class="relative z-10 px-6 sm:px-12 py-20 lg:py-28 mx-auto">

                    <div class="text-center mb-20">
                        <span class="text-white/60 font-black tracking-[0.3em] text-xs uppercase mb-4 inline-block border-b border-white/20 pb-2">
                            THE GREAT COMMISSION
                        </span>
                        <h2 class="font-serif text-white leading-tight tracking-tight mt-2">
                            <span class="block text-4xl sm:text-5xl lg:text-6xl font-black">Word to the</span>
                            <span class="block text-5xl sm:text-7xl lg:text-8xl text-goldAccent font-black italic mt-2 drop-shadow-lg">World</span>
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center pt-16 border-t border-white/10">

                        <div class="relative group mx-auto w-full max-w-md lg:max-w-none">
                            <div class="absolute -bottom-4 -left-4 w-24 h-24 border-l-2 border-b-2 border-goldAccent/40 rounded-bl-3xl transition-colors duration-500 group-hover:border-goldAccent"></div>
                            <div class="relative z-10 overflow-hidden rounded-3xl border border-white/10 shadow-xl bg-deepBlue">
                                <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?q=80&w=2073" alt="Worship Community" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute bottom-4 left-4 bg-deepBlue/80 backdrop-blur-md px-4 py-1.5 rounded-full text-white text-xs font-bold uppercase tracking-widest border border-white/10">
                                    Worship
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col items-start space-y-6 lg:pl-4">
                            <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full">
                                <span class="w-2 h-2 rounded-full bg-goldAccent"></span>
                                <span class="text-goldAccent font-black text-[10px] uppercase tracking-widest">PRAYER MINISTRY+</span>
                            </div>

                            <h3 class="text-white font-sans text-3xl sm:text-4xl lg:text-5xl font-black leading-tight">
                                Raising a <br class="hidden sm:inline">
                                <span class="text-goldAccent italic font-light">Godly</span> Generation
                            </h3>

                            <blockquote class="text-white/80 text-base sm:text-lg border-l-4 border-goldAccent pl-4 py-1 font-serif italic my-2 bg-white/[0.02] rounded-r-xl pr-4">
                                "For I have made a covenant with my chosen..." <span class="block text-xs uppercase tracking-widest font-sans font-black text-white mt-2 not-italic">— Psalm 89:3</span>
                            </blockquote>

                            <a href="index.php?page=history" class="inline-block px-8 py-3.5 bg-white hover:bg-goldAccent text-deepBlue text-xs font-black uppercase tracking-widest rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5">
                                Read Our History
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Next Steps / Getting Connected -->
            <section class="reveal relative bg-deepBlue/95 text-white overflow-hidden rounded-[2.5rem] shadow-2xl border border-white/10 px-6 sm:px-10 py-14 my-12 mx-2 sm:mx-4 lg:mx-6">

                <div class="absolute -top-20 -left-20 w-72 h-72 bg-goldAccent/20 rounded-full blur-3xl pointer-events-none parallax-layer" data-parallax="0.10"></div>
                <div class="absolute -bottom-24 -right-24 w-80 h-80 bg-glowBlue/25 rounded-full blur-3xl pointer-events-none parallax-layer" data-parallax="0.16"></div>

                <div class="relative z-10 max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                        <div>
                            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-white/80 border border-white/15 rounded-full px-4 py-2 backdrop-blur-md">
                                <i class="fas fa-handshake text-goldAccent"></i>
                                Next Steps
                            </span>
                            <h2 class="mt-4 text-4xl sm:text-5xl font-serif leading-tight">Getting Connected</h2>
                            <p class="mt-4 text-white/70 max-w-2xl">After you’ve worshiped with us, here are clear next steps to help you grow, serve, and build community.</p>
                        </div>

                        <a href="index.php?page=visit" class="inline-flex items-center justify-center gap-2 bg-goldAccent hover:bg-white text-deepBlue px-7 py-4 rounded-full font-black text-xs uppercase tracking-widest transition-all duration-300 shadow-lg shadow-goldAccent/20 transform hover:-translate-y-0.5">
                            Plan your next visit
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div class="rounded-[2rem] border border-white/10 bg-deepBlue/40 p-7">
                            <div class="w-14 h-14 rounded-3xl bg-white/10 border border-white/15 flex items-center justify-center">
                                <i class="fas fa-people-group text-goldAccent text-2xl"></i>
                            </div>
                            <h3 class="mt-5 text-2xl font-bold">Small Groups</h3>
                            <p class="mt-2 text-white/70">Find a community group near you.</p>
                            <a href="index.php?page=news-events" class="mt-6 inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-goldAccent hover:text-white transition">
                                Learn more
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="rounded-[2rem] border border-white/10 bg-deepBlue/40 p-7">
                            <div class="w-14 h-14 rounded-3xl bg-white/10 border border-white/15 flex items-center justify-center">
                                <i class="fas fa-hands-helping text-goldAccent text-2xl"></i>
                            </div>
                            <h3 class="mt-5 text-2xl font-bold">Serving</h3>
                            <p class="mt-2 text-white/70">Use your gifts to serve the church and community.</p>
                            <a href="index.php?page=talk-to-us" class="mt-6 inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-goldAccent hover:text-white transition">
                                Get involved
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="rounded-[2rem] border border-white/10 bg-deepBlue/40 p-7">
                            <div class="w-14 h-14 rounded-3xl bg-white/10 border border-white/15 flex items-center justify-center">
                                <i class="fas fa-water text-goldAccent text-2xl"></i>
                            </div>
                            <h3 class="mt-5 text-2xl font-bold">Baptism / Membership</h3>
                            <p class="mt-2 text-white/70">Take the next step in your faith journey.</p>
                            <a href="index.php?page=im-new" class="mt-6 inline-flex items-center gap-2 text-xs uppercase tracking-widest font-black text-goldAccent hover:text-white transition">
                                Take the next step
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>


    <?php include('src/includes/footer.php'); ?>