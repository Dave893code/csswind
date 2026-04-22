<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<body class="bg-church-cream font-sans antialiased" style="margin:0; padding:0;">
    <header style="background: url('https://images.unsplash.com/photo-1548625361-195feee742f1?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 1rem; overflow: hidden; width: 100%;">
        <div class="tv-frame">
            <div class="glow-wrap">
                <div class="particle-core"></div>
                <div class="particle-shimmer"></div>
            </div>

            <div class="tv-screen">
                <div id="hero-slider" style="position: absolute; inset: 0; z-index: 0;">
                    <div class="hero-slide active">
                        <img src="https://media.istockphoto.com/id/1500817568/photo/christ-on-the-mount-with-raised-hands-old-scroll.webp?a=1&b=1&s=612x612&w=0&k=20&c=JHpRxRsKLR9uy-ki9bBeofLVXM3lbdFfgCE2elSqaLk=" alt="Slide 1">
                    </div>
                    <div class="hero-slide ">
                        <img src="/csswind/src/assets/hero2.webp" alt="Slide 2">
                    </div>
                    <div class="hero-slide ">
                        <img src="/csswind/src/assets/hero3.webp" alt="Slide 3">
                    </div>
                    <div class="hero-slide ">
                        <img src="/csswind/src/assets/hero4.webp" alt="Slide 4">
                    </div>
                    <div class="hero-slide ">
                        <img src="/csswind/src/assets/hero5.webp" alt="Slide 5">
                    </div>
                    <div class="hero-slide ">
                        <img src="/csswind/src/assets/hero6.webp" alt="Slide 6">
                    </div>
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(45,10,10,0.7) 0%, transparent 40%, rgba(0,26,53,0.95) 100%); z-index: 1;"></div>
                </div>

                <div class="tv-content">
                    <span class="badge">Faith • Hope • Love</span>
                    <h1>Touching Lives<br><span class="accent">Covenant & Grace</span></h1>
                    <p>Welcome to <strong>Gloryvine Covenant Ministries</strong>. Experience a vibrant community dedicated to the Word of God and the warmth of His presence.</p>

                    <div class="btn-group">
                        <a href="index.php?page=watch" class="btn btn-wine">Watch Our Service</a>
                        <a href="index.php?page=vision" class="btn btn-outline">Our Vision</a>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <section class="floating-cards-container">
        <div class="cards-track">
            <div class="word-card">
                <i class="fas fa-scroll"></i>
                <span>Revelation</span>
            </div>
            <div class="word-card alt">
                <i class="fas fa-wind"></i>
                <span>Spirit-Led</span>
            </div>
            <div class="word-card">
                <i class="fas fa-shield-alt"></i>
                <span>Divine Armor</span>
            </div>
            <div class="word-card alt">
                <i class="fas fa-gem"></i>
                <span>Precious Grace</span>
            </div>
            <div class="word-card">
                <i class="fas fa-anchor"></i>
                <span>Steadfast Hope</span>
            </div>
            <div class="word-card alt">
                <i class="fas fa-sun"></i>
                <span>Eternal Light</span>
            </div>
            <div class="word-card">
                <i class="fas fa-mountain"></i>
                <span>Unshakable Faith</span>
            </div>
            <div class="word-card alt">
                <i class="fas fa-fire"></i>
                <span>Holy Fire</span>
            </div>

            <div class="word-card" aria-hidden="true">
                <i class="fas fa-scroll"></i>
                <span>Revelation</span>
            </div>
            <div class="word-card alt" aria-hidden="true">
                <i class="fas fa-wind"></i>
                <span>Spirit-Led</span>
            </div>
            <div class="word-card" aria-hidden="true">
                <i class="fas fa-shield-alt"></i>
                <span>Divine Armor</span>
            </div>
            <div class="word-card alt" aria-hidden="true">
                <i class="fas fa-gem"></i>
                <span>Precious Grace</span>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .floating-cards-container {
            width: 100%;
            overflow: hidden;
            padding: 40px 0;
            background: rgba(1, 18, 45, 0.08);
            mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
        }

        .cards-track {
            display: flex;
            gap: 24px;
            width: max-content;
            animation: boxScroll 32s linear infinite;
        }

        .word-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 18px 36px;
            background: rgba(220, 38, 38, 0.18);
            border: 2px solid rgba(220, 38, 38, 0.8);
            border-radius: 16px;
            color: #ffffff;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
            transition: transform 0.3s ease, background 0.3s ease, border-color 0.3s ease;
        }

        .word-card.alt {
            background: linear-gradient(135deg, rgba(10, 30, 75, 0.98), rgba(7, 20, 58, 0.92));
            border: 2px solid rgba(59, 130, 246, 0.95);
            box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.15), 0 24px 60px rgba(14, 64, 138, 0.45);
            backdrop-filter: saturate(180%) blur(0.8px);
        }

        .word-card i {
            font-size: 2.2rem;
            color: #fee2e2;
        }

        .word-card.alt i {
            color: #bfdbfe;
        }

        .word-card span {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1.6px;
            font-size: 1.1rem;
            color: #ffffff;
        }

        .word-card.alt span {
            color: #ffffff;
        }

        @keyframes boxScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .word-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 26px 50px rgba(0, 0, 0, 0.25);
        }

        @media (max-width: 768px) {
            .word-card {
                padding: 14px 24px;
                gap: 16px;
            }

            .word-card i {
                font-size: 1.7rem;
            }

            .word-card span {
                font-size: 1rem;
            }
        }
    </style>
    <style>
        /* 1. TV FRAME - Wider & Thicker Border */
        .tv-frame {
            position: relative;
            width: 100%;
            max-width: 1400px;
            /* Maximum Cinematic Width */
            height: 600px;
            background: #000;
            border-radius: 60px;
            /* More rounded for premium feel */
            box-shadow: 0 0 120px rgba(0, 0, 0, 0.9);
            border: 20px solid #001a35;
            /* Much thicker frame */
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .tv-frame {
                height: 800px;
            }
        }

        /* 2. UPGRADED PARTICLES */
        .glow-wrap {
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
        }

        /* Base Rotating Light */
        .particle-core::before {
            content: '';
            position: absolute;
            left: -50%;
            top: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, #D4AF37, #800020, #FFFFFF, transparent 60%);
            animation: rotateGlow 5s linear infinite;
            filter: blur(50px) brightness(1.5);
        }


        /* Sparkle Shimmer Layer */
        .particle-shimmer::after {
            content: '';
            position: absolute;
            inset: -20%;
            background-image: radial-gradient(circle, #fff 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.3;
            animation: shimmer 10s ease-in-out infinite alternate;
            filter: blur(1px);
        }

        .glow-wrap::after {
            content: '';
            position: absolute;
            inset: 15px;
            /* Aligns with thicker border */
            background: #001a35;
            border-radius: 45px;
        }

        @keyframes rotateGlow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.1;
            }

            100% {
                transform: translateY(-20px) scale(1.2);
                opacity: 0.4;
            }
        }

        /* 3. THE SCREEN */
        .tv-screen {
            position: absolute;
            inset: 22px;
            /* Slightly more inset for the thicker frame */
            background: #000;
            border-radius: 40px;
            z-index: 10;
            overflow: hidden;
        }

        .hero-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blur-effect img {
            filter: blur(6px);
            transform: scale(1.15);
        }

        /* 4. CONTENT STYLING */
        .tv-content {
            position: absolute;
            inset: 0;
            z-index: 20;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 4rem;
            text-align: center;
            color: white;
        }

        .badge {
            color: #D4AF37;
            text-transform: uppercase;
            letter-spacing: 0.6em;
            font-size: 12px;
            font-weight: 900;
            padding: 12px 30px;
            border: 2px solid rgba(212, 175, 55, 0.4);
            border-radius: 50px;
            margin-bottom: 2.5rem;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            animation: pulse 2.5s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        .tv-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 0 15px 30px rgba(0, 0, 0, 0.7);
        }

        @media (min-width: 1024px) {
            .tv-content h1 {
                font-size: 6.5rem;
            }
        }

        .accent {
            color: #ff0000;
            font-style: italic;
            font-weight: 300;
        }

        .tv-content p {
            font-family: sans-serif;
            max-width: 750px;
            margin-bottom: 3rem;
            font-weight: 600;
            line-height: 1.8;
            font-size: 1.2rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            opacity: 0.95;
        }

        /* BUTTONS */
        .btn-group {
            display: flex;
            gap: 2rem;
            z-index: 30;
        }

        .btn {
            padding: 20px 50px;
            border-radius: 60px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 14px;
            letter-spacing: 0.15em;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .btn-wine {
            background: #ff0000;
            color: white;
            border: 1px solid #a00028;
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
            backdrop-filter: blur(5px);
        }

        .btn-outline:hover {
            background: white;
            color: #001a35;
        }

        @media (max-width: 1024px) {
            .tv-frame {
                height: 720px;
            }

            .tv-content {
                padding: 3rem;
            }

            .tv-content h1 {
                font-size: 4.5rem;
            }

            .tv-content p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .tv-frame {
                border-radius: 30px;
                border-width: 10px;
                height: auto;
                min-height: 520px;
                aspect-ratio: 16 / 9;
            }

            .tv-content {
                padding: 2rem;
            }

            .badge {
                font-size: 11px;
                padding: 10px 24px;
                margin-bottom: 1.5rem;
            }

            .tv-content h1 {
                font-size: 2.6rem;
                line-height: 1.1;
            }

            .tv-content p {
                font-size: 1rem;
                margin-bottom: 2rem;
                max-width: 100%;
            }

            .btn-group {
                flex-direction: column;
                width: 100%;
                gap: 1rem;
            }

            .btn {
                width: 100%;
                text-align: center;
                padding: 16px 18px;
            }
        }

        @media (max-width: 640px) {
            .tv-frame {
                min-height: 440px;
                border-radius: 24px;
                border-width: 8px;
            }

            .tv-content {
                padding: 1.25rem;
            }

            .tv-content h1 {
                font-size: 2.2rem;
            }

            .btn {
                padding: 14px 18px;
                font-size: 0.9rem;
            }

            .word-card {
                padding: 10px 18px;
                gap: 14px;
            }

            .word-card i {
                font-size: 1.5rem;
            }

            .word-card span {
                font-size: 0.85rem;
            }
        }
    </style>

    <script>
        (function() {
            const slides = document.querySelectorAll('.hero-slide');
            let current = 0;
            if (slides.length > 0) {
                setInterval(() => {
                    slides[current].classList.remove('active');
                    current = (current + 1) % slides.length;
                    slides[current].classList.add('active');
                }, 6000);
            }
        })();
    </script>
    <!-- MAIN PAGE WRAPPER: centers all content with blank space on left/right -->
    <div class="page-center" style="max-width: 1600px; margin: 0 auto; background: inherit;">
        <!-- The Great Commission Section -->
        <div class="bg-black py-24 px-4 md:px-20 relative overflow-visible rounded-3xl my-8">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] h-[75%] bg-red-600/20 rounded-full blur-[160px] pointer-events-none z-0"></div>

            <section class="relative max-w-7xl mx-auto overflow-hidden rounded-[4rem] border border-white/10 shadow-[0_40px_100px_rgba(0,0,0,1)] z-10"
                style="background: linear-gradient(145deg, #7a0000 0%, #050505 50%, #000000 100%);">

                <div class="absolute inset-0 opacity-[0.2] pointer-events-none"
                    style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png'); z-index: 1;"></div>

                <div class="grain-overlay" style="z-index: 2;"></div>

                <!-- Canvas Globe as Background Element -->
                <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none">
                    <div id="glowCircle" class="absolute w-96 h-96 bg-[#D4AF37]/20 rounded-full blur-[120px] transition-transform duration-700 ease-out"></div>
                    <canvas id="particleCanvas" class="w-full h-full object-cover pointer-events-auto" style="opacity: 0.85;"></canvas>
                </div>


                <div class="relative z-10 max-w-6xl mx-auto px-8 py-32">

                    <div class="text-center mb-32">
                        <span class="text-white font-black tracking-[0.3em] text-sm uppercase mb-6 inline-block border-b-2 border-white/20 pb-3"
                            style="font-weight: 900; letter-spacing: 0.3em;">THE GREAT COMMISSION</span>
                        <h1 class="font-sans text-white leading-tight tracking-tight max-w-4xl mx-auto">
                            <span class="block text-5xl md:text-6xl lg:text-7xl font-black drop-shadow-2xl"
                                style="font-weight: 900;">Word to the</span>
                            <span class="block text-7xl md:text-8xl lg:text-[6.5rem] text-[#D4AF37] font-black italic mt-4 drop-shadow-[0_10px_30px_rgba(212,175,55,0.6)]"
                                style="font-weight: 900;">World</span>
                        </h1>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center pt-24 border-t border-white/10">

                        <div class="relative group">
                            <div class="absolute -bottom-4 -left-4 w-1/2 h-1/2 border-l-2 border-b-2 border-white/30 rounded-bl-3xl group-hover:border-church-gold transition-colors duration-500"></div>
                            <div class="relative z-10 overflow-hidden rounded-3xl border border-white/20 shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?q=80&w=2073" alt="Worship"
                                    class="w-full h-auto object-cover grayscale-[0.1] group-hover:scale-110 transition-transform duration-700">
                            </div>

                            <div class="absolute bottom-6 left-6 bg-black/60 backdrop-blur-md px-4 py-2 rounded-full text-white text-sm font-black uppercase tracking-wider z-20">
                                Worship
                            </div>
                        </div>


                        <div class="lg:pl-6">
                            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-church-gold/40 to-transparent px-5 py-2 rounded-full mb-6 border-l-4 border-church-gold">
                                <span class="text-church-gold font-black text-xs uppercase tracking-[0.25em]" style="font-weight: 900;">PRAYER MINISTRY+</span>
                            </div>
                            <h2 class="text-white font-sans text-5xl md:text-6xl lg:text-7xl mb-6 leading-tight tracking-tight">
                                <span class="font-black">Raising a</span><br>
                                <span class="text-[#D4AF37] italic font-black" style="font-weight: 900;">Godly</span>
                                <span class="font-black"> Generation</span>
                            </h2>
                            <p class="text-white/80 text-lg mb-8 leading-relaxed border-l-2 border-red-600 pl-6 bg-white/5 py-4 rounded-r-xl"
                                style="font-weight: 500;">
                                <span class="italic">"For I have made a covenant with my chosen..."</span> —
                                <span class="text-white font-black tracking-widest text-xs uppercase" style="font-weight: 900;">Psalm 89:3</span>
                            </p>
                            <a href="index.php?page=history"
                                class="inline-block px-10 py-4 bg-white text-red-600 font-black uppercase tracking-widest rounded-xl hover:bg-[#D4AF37] hover:text-white transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105 transform"
                                style="font-weight: 900;">
                                Read Our History
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <style>
            .grain-overlay {
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background-image: url('https://upload.wikimedia.org/wikipedia/commons/7/76/1k_stop_down_grain.jpg');
                opacity: 0.06;
                pointer-events: none;
                animation: grain-animation 1s steps(10) infinite;
                mix-blend-mode: screen;
            }

            @keyframes grain-animation {

                0%,
                100% {
                    transform: translate(0, 0);
                }

                10% {
                    transform: translate(-5%, -5%);
                }

                50% {
                    transform: translate(5%, 5%);
                }
            }
        </style>

        <script>
            (function() {
                const canvas = document.getElementById('particleCanvas');
                const glow = document.getElementById('glowCircle');
                if (!canvas) return;
                const ctx = canvas.getContext('2d');

                let width, height, particles = [];
                let mouseX = 0,
                    mouseY = 0;
                let targetX = 0,
                    targetY = 0;

                const sphereRadius = 260;
                const particleCount = 600;

                function init() {
                    const container = canvas.parentElement;
                    width = canvas.width = container.clientWidth;
                    height = canvas.height = container.clientHeight;
                    particles = [];
                    for (let i = 0; i < particleCount; i++) {
                        const theta = Math.random() * 2 * Math.PI;
                        const phi = Math.acos((Math.random() * 2) - 1);
                        particles.push({
                            x: sphereRadius * Math.sin(phi) * Math.cos(theta),
                            y: sphereRadius * Math.sin(phi) * Math.sin(theta),
                            z: sphereRadius * Math.cos(phi),
                            size: Math.random() * 3 + 1,
                            color: i % 3 === 0 ? '#D4AF37' : (i % 3 === 1 ? '#FFFFFF' : '#FF8888'),
                            blinkSpeed: 0.02 + Math.random() * 0.04
                        });
                    }
                }

                window.addEventListener('mousemove', (e) => {
                    const rect = canvas.getBoundingClientRect();
                    targetX = (e.clientX - rect.left - width / 2) * 0.2;
                    targetY = (e.clientY - rect.top - height / 2) * 0.2;
                    if (glow) {
                        glow.style.transform = `translate(${targetX * 1.5}px, ${targetY * 1.5}px)`;
                    }
                });

                function rotate(p, ax, ay) {
                    let sY = Math.sin(ay),
                        cY = Math.cos(ay);
                    let x1 = p.x * cY + p.z * sY;
                    let z1 = -p.x * sY + p.z * cY;
                    let sX = Math.sin(ax),
                        cX = Math.cos(ax);
                    let y2 = p.y * cX - z1 * sX;
                    let z2 = p.y * sX + z1 * cX;
                    return {
                        x: x1,
                        y: y2,
                        z: z2
                    };
                }

                let rotY = 0;

                function animate() {
                    if (!canvas || !ctx) return;
                    ctx.clearRect(0, 0, width, height);
                    mouseX += (targetX - mouseX) * 0.08;
                    mouseY += (targetY - mouseY) * 0.08;
                    rotY += 0.003;
                    const currentRotX = mouseY * 0.015;
                    const currentRotY = rotY + (mouseX * 0.015);
                    particles.sort((a, b) => b.z - a.z);
                    particles.forEach(p => {
                        let r = rotate(p, currentRotX, currentRotY);
                        const perspective = 900 / (900 + r.z);
                        const x = r.x * perspective + width / 2 + (mouseX * 0.3);
                        const y = r.y * perspective + height / 2 + (mouseY * 0.3);
                        const pulse = Math.sin(Date.now() * p.blinkSpeed) * 0.5 + 0.5;
                        ctx.beginPath();
                        ctx.shadowBlur = 12 * pulse;
                        ctx.shadowColor = p.color;
                        ctx.arc(x, y, p.size * perspective * (0.7 + pulse * 0.5), 0, Math.PI * 2);
                        ctx.fillStyle = p.color;
                        const depthOpacity = (r.z + sphereRadius) / (2 * sphereRadius);
                        ctx.globalAlpha = depthOpacity * (0.5 + pulse * 0.5);
                        ctx.fill();
                        ctx.shadowBlur = 0;
                    });
                    requestAnimationFrame(animate);
                }

                window.addEventListener('resize', () => {
                    if (canvas.parentElement) {
                        width = canvas.width = canvas.parentElement.clientWidth;
                        height = canvas.height = canvas.parentElement.clientHeight;
                        init();
                    }
                });
                init();
                animate();
            })();
        </script>
        <section class="floating-cards-container">
            <div class="cards-track">
                <div class="word-card">
                    <i class="fas fa-scroll"></i>
                    <span>Revelation</span>
                </div>
                <div class="word-card alt">
                    <i class="fas fa-wind"></i>
                    <span>Spirit-Led</span>
                </div>
                <div class="word-card">
                    <i class="fas fa-shield-alt"></i>
                    <span>Divine Armor</span>
                </div>
                <div class="word-card alt">
                    <i class="fas fa-gem"></i>
                    <span>Precious Grace</span>
                </div>
                <div class="word-card">
                    <i class="fas fa-anchor"></i>
                    <span>Steadfast Hope</span>
                </div>
                <div class="word-card alt">
                    <i class="fas fa-sun"></i>
                    <span>Eternal Light</span>
                </div>
                <div class="word-card">
                    <i class="fas fa-mountain"></i>
                    <span>Unshakable Faith</span>
                </div>
                <div class="word-card alt">
                    <i class="fas fa-fire"></i>
                    <span>Holy Fire</span>
                </div>

                <div class="word-card" aria-hidden="true">
                    <i class="fas fa-scroll"></i>
                    <span>Revelation</span>
                </div>
                <div class="word-card alt" aria-hidden="true">
                    <i class="fas fa-wind"></i>
                    <span>Spirit-Led</span>
                </div>
                <div class="word-card" aria-hidden="true">
                    <i class="fas fa-shield-alt"></i>
                    <span>Divine Armor</span>
                </div>
                <div class="word-card alt" aria-hidden="true">
                    <i class="fas fa-gem"></i>
                    <span>Precious Grace</span>
                </div>
            </div>
        </section>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            .floating-cards-container {
                width: 100%;
                overflow: hidden;
                padding: 40px 0;
                background: rgba(1, 18, 45, 0.08);
                mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
            }

            .cards-track {
                display: flex;
                gap: 24px;
                width: max-content;
                animation: boxScroll 32s linear infinite;
            }

            .word-card {
                display: flex;
                align-items: center;
                gap: 20px;
                padding: 18px 36px;
                background: rgba(220, 38, 38, 0.18);
                border: 2px solid rgba(220, 38, 38, 0.8);
                border-radius: 16px;
                color: #ffffff;
                box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
                transition: transform 0.3s ease, background 0.3s ease, border-color 0.3s ease;
            }

            .word-card.alt {
                background: linear-gradient(135deg, rgba(10, 30, 75, 0.98), rgba(7, 20, 58, 0.92));
                border: 2px solid rgba(59, 130, 246, 0.95);
                box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.15), 0 24px 60px rgba(14, 64, 138, 0.45);
                backdrop-filter: saturate(180%) blur(0.8px);
            }

            .word-card i {
                font-size: 2.2rem;
                color: #fee2e2;
            }

            .word-card.alt i {
                color: #bfdbfe;
            }

            .word-card span {
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: 1.6px;
                font-size: 1.1rem;
                color: #ffffff;
            }

            .word-card.alt span {
                color: #ffffff;
            }

            @keyframes boxScroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .word-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 26px 50px rgba(0, 0, 0, 0.25);
            }

            @media (max-width: 768px) {
                .word-card {
                    padding: 14px 24px;
                    gap: 16px;
                }

                .word-card i {
                    font-size: 1.7rem;
                }

                .word-card span {
                    font-size: 1rem;
                }
            }
        </style>

        <!-- Fellowship Section -->
        <section id="visit" class="py-20 bg-church-red text-white overflow-hidden relative rounded-3xl my-8">
            <div class="absolute -right-20 -bottom-20 w-80 h-80 border-8 border-white/5 rounded-full"></div>
            <div class="absolute -left-20 -top-20 w-80 h-80 border-8 border-white/5 rounded-full"></div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-church-gold font-serif text-5xl md:text-6xl mb-4">Join Our Fellowship</h2>
                    <div class="w-24 h-1 bg-church-gold mx-auto mb-6"></div>
                    <p class="text-blue-100 max-w-xl mx-auto font-light text-lg">Experience the power of the Covenant. Whether you are joining us for the first time or looking for a home, our doors are open.</p>
                </div>

                <div class="flex justify-center items-center gap-8 mb-16 flex-wrap">
                    <a href="#" class="group flex flex-col items-center gap-2 transition-all duration-300 hover:-translate-y-2">
                        <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-[#1877F2] group-hover:border-[#1877F2] transition-all duration-300 shadow-lg">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </div>
                        <span class="text-xs uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">Facebook</span>
                    </a>
                    <a href="#" class="group flex flex-col items-center gap-2 transition-all duration-300 hover:-translate-y-2">
                        <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] group-hover:border-transparent transition-all duration-300 shadow-lg">
                            <i class="fab fa-instagram text-xl"></i>
                        </div>
                        <span class="text-xs uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">Instagram</span>
                    </a>
                    <a href="#" class="group flex flex-col items-center gap-2 transition-all duration-300 hover:-translate-y-2">
                        <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-black group-hover:border-black transition-all duration-300 shadow-lg">
                            <i class="fab fa-tiktok text-xl"></i>
                        </div>
                        <span class="text-xs uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">TikTok</span>
                    </a>
                    <a href="#" class="group flex flex-col items-center gap-2 transition-all duration-300 hover:-translate-y-2">
                        <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-[#ed1c24] group-hover:border-[#ed1c24] transition-all duration-300 shadow-lg">
                            <i class="fas fa-broadcast-tower text-xl"></i>
                        </div>
                        <span class="text-xs uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">Mixlr</span>
                    </a>
                    <a href="#" class="group flex flex-col items-center gap-2 transition-all duration-300 hover:-translate-y-2">
                        <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center border border-white/20 group-hover:bg-[#FF0000] group-hover:border-[#FF0000] transition-all duration-300 shadow-lg">
                            <i class="fab fa-youtube text-xl"></i>
                        </div>
                        <span class="text-xs uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">YouTube</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/20 transition-all group hover:scale-105 transform duration-300">
                        <div class="text-church-gold mb-4 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Sunday Worship</h3>
                        <p class="text-church-gold mb-4 font-medium uppercase tracking-widest text-sm">8:00 AM — 11:30 AM</p>
                        <p class="text-blue-200 text-sm leading-relaxed">A powerful time of praise, worship, and the undiluted Word of God.</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 hover:bg-white/20 transition-all group hover:scale-105 transform duration-300">
                        <div class="text-church-gold mb-4 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Covenant Hour</h3>
                        <p class="text-church-gold mb-4 font-medium uppercase tracking-widest text-sm">Wednesdays @ 5:30 PM</p>
                        <p class="text-blue-200 text-sm leading-relaxed">Diving deeper into the scriptures and specialized prayer sessions.</p>
                    </div>

                    <div class="bg-church-gold p-8 rounded-2xl shadow-2xl shadow-black/20 hover:scale-105 transform transition-all duration-300">
                        <div class="text-white mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 text-church-blue">Find Us</h3>
                        <p class="text-white mb-6 leading-relaxed">Gloryland Chapel, 15 Olafimihan Street Fadegbuwa, Ogijo, Ogun, Nigeria.</p>
                        <a href="https://maps.google.com" target="_blank" class="bg-church-blue text-white px-6 py-2 rounded-lg font-bold text-sm inline-block hover:bg-church-red transition-colors">Get Directions</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prayer Ministry Section -->
        <section class="py-24 bg-gradient-to-br from-church-cream to-white relative overflow-hidden rounded-3xl my-8">
            <div class="absolute inset-0 opacity-5">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs>
                        <pattern id="prayer-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="10" cy="10" r="1" fill="currentColor" class="text-church-gold" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#prayer-pattern)" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 bg-church-gold/10 px-6 py-3 rounded-full mb-6">
                        <span class="text-church-gold font-bold text-sm uppercase tracking-widest">Prayer Ministry</span>
                    </div>
                    <h2 class="text-church-blue font-serif text-4xl md:text-5xl mb-6">How Can We <span class="text-church-gold italic">Pray For You?</span></h2>
                    <div class="w-24 h-1 bg-church-gold mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                        "Be anxious for nothing, but in everything by prayer and supplication, with thanksgiving, let your requests be made known to God." — Philippians 4:6
                    </p>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                        Distance is not a barrier to the move of God. Share your heart with us, and our dedicated intercessory team will lift you up in prayer.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div class="space-y-8">
                        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 group hover:scale-105 transform">
                            <div class="flex items-start gap-6">
                                <div class="bg-church-gold p-4 rounded-2xl text-white group-hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl text-church-blue mb-2">Email Prayer Requests</h4>
                                    <p class="text-gray-600 mb-3">Send us your prayer needs via email and receive personal follow-up.</p>
                                    <a href="mailto:info@gloryvinecovenant.org" class="text-church-gold font-semibold hover:text-church-blue transition-colors">info@gloryvinecovenant.org</a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 group hover:scale-105 transform">
                            <div class="flex items-start gap-6">
                                <div class="bg-church-blue p-4 rounded-2xl text-white group-hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl text-church-blue mb-2">Call for Immediate Prayer</h4>
                                    <p class="text-gray-600 mb-3">For urgent prayer needs, call our 24/7 prayer hotline.</p>
                                    <a href="tel:+2341234567890" class="text-church-gold font-semibold hover:text-church-blue transition-colors">+234 123 456 7890</a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-church-gold to-yellow-400 p-8 rounded-3xl text-church-blue shadow-xl hover:shadow-2xl transition-all duration-300">
                            <h4 class="font-bold text-2xl mb-6">Testimonies of Answered Prayers</h4>
                            <div class="space-y-6">
                                <blockquote class="italic border-l-4 border-church-blue pl-4">
                                    "The church prayed for my healing, and God touched me miraculously!" — <strong>Sister Grace</strong>
                                </blockquote>
                                <blockquote class="italic border-l-4 border-church-blue pl-4">
                                    "Through your prayers, my family was restored. Thank you!" — <strong>Brother John</strong>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="bg-church-cream p-8 rounded-3xl border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <h4 class="font-bold text-2xl text-church-blue mb-6 text-center">Share Your Prayer Request</h4>
                        <form action="src/includes/process_prayer.php" method="POST" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" name="name" placeholder="Your Name" required
                                    class="prayer-request-input w-full p-4 rounded-xl border-none bg-white focus:ring-2 focus:ring-church-gold outline-none shadow-sm">
                                <input type="email" name="email" placeholder="Email Address" required
                                    class="prayer-request-input w-full p-4 rounded-xl border-none bg-white focus:ring-2 focus:ring-church-gold outline-none shadow-sm">
                            </div>
                            <div class="prayer-type-cards">
                                <button type="button" class="prayer-type-pill active" data-value="Prayer Request">Prayer Request</button>
                                <button type="button" class="prayer-type-pill" data-value="Testimony">Testimony</button>
                                <button type="button" class="prayer-type-pill" data-value="Counseling">Counseling</button>
                                <button type="button" class="prayer-type-pill" data-value="Thanksgiving">Thanksgiving</button>
                            </div>
                            <input type="hidden" name="type" id="request_type_input" value="Prayer Request">
                            <textarea name="message" placeholder="Share your heart with us..." rows="4" required
                                class="prayer-request-textarea w-full p-4 rounded-xl border-none bg-white focus:ring-2 focus:ring-church-gold outline-none shadow-sm resize-none"></textarea>
                            <button type="submit" class="w-full bg-church-blue text-white py-4 rounded-xl font-bold uppercase tracking-widest hover:bg-church-gold transition-all shadow-xl shadow-blue-900/20 hover:scale-105 transform duration-300">
                                Send Prayer Request
                            </button>
                        </form>
                    </div>

                    <div class="space-y-8 lg:col-span-2">
                        <div class="bg-white p-2 rounded-3xl shadow-xl overflow-hidden h-96 hover:shadow-2xl transition-all duration-300">
                            <iframe class="w-full h-full rounded-2xl"
                                src="https://maps.google.com/maps?q=Gloryland%20Chapel%2015%20Olafimihan%20Street%20Fadegbuwa%20Ogijo%20Ogun%20Nigeria&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- end page-center wrapper -->

    <style>
        .prayer-type-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.85rem;
            margin-bottom: 1.25rem;
        }

        .prayer-type-pill {
            background: rgba(255, 255, 255, 0.95);
            border: 2px solid rgba(212, 175, 55, 0.25);
            color: #1f2a4d;
            padding: 0.9rem 1.4rem;
            border-radius: 999px;
            font-weight: 800;
            letter-spacing: 0.05em;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease, color 0.25s ease;
            cursor: pointer;
        }

        .prayer-type-pill.active,
        .prayer-type-pill:hover {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.95), rgba(255, 223, 125, 0.95));
            border-color: #d4af37;
            color: #08142e;
            transform: translateY(-2px);
        }

        .prayer-type-pill:focus-visible {
            outline: 3px solid rgba(212, 175, 55, 0.35);
            outline-offset: 3px;
        }

        .prayer-request-textarea,
        .prayer-request-input {
            transition: box-shadow 0.25s ease, transform 0.25s ease;
        }

        .prayer-request-input:focus,
        .prayer-request-textarea:focus {
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.18);
            transform: translateY(-0.5px);
        }

        @media (max-width: 768px) {
            .prayer-type-cards {
                gap: 0.65rem;
            }

            .prayer-type-pill {
                flex: 1 1 48%;
                text-align: center;
            }
        }
    </style>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button')?.addEventListener('click', function() {
            document.querySelector('.mobile-menu')?.classList.toggle('hidden');
        });

        // Prayer request option selector
        const prayerButtons = document.querySelectorAll('.prayer-type-pill');
        const prayerInput = document.getElementById('request_type_input');

        prayerButtons.forEach(button => {
            button.addEventListener('click', () => {
                prayerButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                if (prayerInput) {
                    prayerInput.value = button.dataset.value;
                }
            });
        });
    </script>
</body>