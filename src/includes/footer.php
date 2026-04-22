<footer class="bg-[#08111e] pt-24 pb-12 px-4 md:px-16 text-[#f4efe3]">

    <style>
        .footer-shell {
            background: #08111e;
            color: #f4efe3;
        }

        .footer-panel {
            border: 1px solid rgba(255, 238, 194, 0.14);
            background: rgba(22, 17, 38, 0.78);
            backdrop-filter: blur(14px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.28);
        }

        .footer-panel-light {
            background: linear-gradient(160deg, rgba(227, 177, 89, 0.16), rgba(32, 18, 48, 0.92));
            border-color: rgba(227, 177, 89, 0.35);
        }

        .footer-tag {
            color: #e3cd97;
            letter-spacing: 0.28em;
            font-size: 0.72rem;
        }

        .footer-heading {
            color: #f9f2dd;
        }

        .footer-copy {
            color: rgba(244, 239, 227, 0.78);
        }

        .footer-link {
            color: rgba(244, 239, 227, 0.76);
        }

        .footer-link:hover {
            color: #e3cd97;
        }

        .footer-icon {
            width: 3rem;
            height: 3rem;
            display: grid;
            place-items: center;
            border-radius: 1rem;
            background: rgba(227, 177, 89, 0.15);
            color: #e3cd97;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .footer-icon:hover {
            transform: translateY(-4px);
            box-shadow: 0 22px 45px rgba(227, 177, 89, 0.18);
        }

        .footer-tile {
            border-radius: 2rem;
            padding: 2rem;
        }

        .footer-list li {
            position: relative;
            padding-left: 1.4rem;
        }

        .footer-list li::before {
            content: '›';
            position: absolute;
            left: 0;
            top: 0.15rem;
            color: #e3cd97;
        }

        .newsletter-input {
            background: rgba(232, 218, 178, 0.08);
            border: 1px solid rgba(227, 177, 89, 0.2);
            color: #f7f1e3;
            padding-right: 14rem;
        }

        .newsletter-input:focus {
            outline: none;
            border-color: #e3cd97;
            background: rgba(232, 218, 178, 0.12);
        }

        .newsletter-submit {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #e3cd97, #f4e6b2);
            color: #151117;
            min-width: 10rem;
            padding: 0 1.75rem;
        }

        .newsletter-submit:hover {
            transform: translateY(-2px);
        }

        @media (max-width: 640px) {
            .newsletter-input {
                padding-right: 1.5rem;
            }

            .newsletter-submit {
                position: static;
                width: 100%;
                transform: none;
                margin-top: 0.75rem;
            }
        }

        .info-chip {
            background: rgba(24, 17, 36, 0.85);
            border: 1px solid rgba(227, 177, 89, 0.14);
            padding: 1.2rem 1.4rem;
            border-radius: 1.5rem;
        }

        .footer-glow {
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .footer-glow-circle {
            position: absolute;
            border-radius: 9999px;
            filter: blur(88px);
            opacity: 0.32;
        }

        .social-pill {
            width: 3rem;
            height: 3rem;
            border-radius: 1rem;
            display: grid;
            place-items: center;
            background: rgba(255, 238, 194, 0.08);
            color: #f4efe3;
            transition: transform 0.25s ease, background 0.25s ease;
        }

        .social-pill:hover {
            transform: translateY(-2px);
            background: rgba(227, 177, 89, 0.18);
            color: #151117;
        }
    </style>

    <div class="max-w-7xl mx-auto rounded-t-[60px] md:rounded-t-[100px] p-12 md:p-20 relative overflow-hidden footer-shell">

        <div class="footer-glow">
            <div class="footer-glow-circle left-0 top-10 w-72 h-72 bg-[#e3cd97]/20"></div>
            <div class="footer-glow-circle right-10 top-24 w-80 h-80 bg-[#8dc9b9]/15"></div>
            <div class="footer-glow-circle left-1/2 top-20 w-[24rem] h-[24rem] bg-[#d8b678]/10 translate-x-[-50%]"></div>
        </div>

        <div class="relative z-10 space-y-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <div class="footer-panel footer-tile">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="footer-icon shadow-lg">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div>
                            <p class="footer-tag uppercase">Gloryvine</p>
                            <h3 class="text-2xl font-black footer-heading">Anointed Presence</h3>
                        </div>
                    </div>
                    <p class="footer-copy text-sm leading-relaxed">
                        A modern worship house where covenant truth meets powerful community and spiritual momentum.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="text-[#e3cd97] text-xl">✦</span>
                            <p class="footer-copy text-sm">Weekly sermons with soul-stirring clarity.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-[#8dc9b9] text-xl">⚡</span>
                            <p class="footer-copy text-sm">Prayer alerts & encouragements delivered fast.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-[#e3cd97] text-xl">✞</span>
                            <p class="footer-copy text-sm">A covenant family rooted in grace and truth.</p>
                        </div>
                    </div>
                </div>

                <div class="footer-panel footer-tile footer-panel-light">
                    <h4 class="text-[#2d1f2c] font-black text-lg mb-8 tracking-[0.22em] uppercase">Explore</h4>
                    <ul class="footer-list space-y-4 text-sm font-semibold">
                        <li><a href="index.php" class="footer-link">Home Sanctuary</a></li>
                        <li><a href="index.php?page=history" class="footer-link">Our History</a></li>
                        <li><a href="#" class="footer-link">Ministries</a></li>
                        <li><a href="#" class="footer-link">Give / Tithe</a></li>
                    </ul>
                    <div class="mt-10">
                        <h5 class="text-[#e3cd97] font-black text-sm uppercase tracking-[0.25em] mb-4">Support</h5>
                        <ul class="footer-list space-y-3 text-sm font-semibold">
                            <li><a href="#" class="footer-link">Contact Us</a></li>
                            <li><a href="#" class="footer-link">Prayer Request</a></li>
                            <li><a href="#" class="footer-link">Counseling</a></li>
                            <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-panel footer-tile">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="footer-icon shadow-lg" style="background: rgba(141, 201, 185, 0.18); color: #8dc9b9;">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div>
                            <p class="footer-tag uppercase">Stay Informed</p>
                            <h3 class="text-2xl font-black footer-heading">Join the Covenant Pulse</h3>
                        </div>
                    </div>
                    <p class="footer-copy text-sm leading-relaxed mb-8">
                        Subscribe for exclusive updates, event invitations and prayer alerts delivered with care.
                    </p>
                    <form action="src/includes/process_newsletter.php" method="POST" class="space-y-4">
                        <label class="block text-[#e3cd97] text-xs uppercase tracking-[0.28em]">Email Address</label>
                        <div class="relative">
                            <input type="email" name="email" placeholder="name@example.com" required class="newsletter-input w-full rounded-full py-4 px-6 text-[#f4efe3] placeholder:text-[#f4efe3]/60 transition-all" />
                            <button type="submit" class="newsletter-submit absolute right-2 top-1/2 -translate-y-1/2 inline-flex items-center gap-2 rounded-full px-5 py-3 font-bold uppercase tracking-[0.18em] shadow-lg transition-all">
                                <span>Send</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <?php if (isset($_GET['newsletter']) && $_GET['newsletter'] === 'success'): ?>
                            <p class="text-emerald-300 text-sm">Thank you! You have been subscribed.</p>
                        <?php elseif (isset($_GET['newsletter']) && $_GET['newsletter'] === 'invalid'): ?>
                            <p class="text-rose-300 text-sm">Please enter a valid email address.</p>
                        <?php elseif (isset($_GET['newsletter']) && $_GET['newsletter'] === 'error'): ?>
                            <p class="text-rose-300 text-sm">Unable to send subscription email. Please try again later.</p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4 py-8 bg-[#111826]/90 rounded-[32px] border border-[#e3cd97]/10">
                <div class="info-chip">
                    <p class="text-[#e3cd97] uppercase text-[0.65rem] tracking-[0.4em]">Headquarters</p>
                    <p class="footer-copy text-sm">15 Olafimihan Street, Fadegbuwa, Ogijo, Ogun, Nigeria.</p>
                </div>
                <div class="info-chip">
                    <p class="text-[#e3cd97] uppercase text-[0.65rem] tracking-[0.4em]">Prayer Line</p>
                    <p class="footer-copy text-sm">+234 123 456 7890</p>
                </div>
                <div class="info-chip">
                    <p class="text-[#e3cd97] uppercase text-[0.65rem] tracking-[0.4em]">Office Email</p>
                    <p class="footer-copy text-sm">info@gloryvinecovenant.org</p>
                </div>
            </div>

            <div class="pt-10 border-t border-[#e3cd97]/10 text-center">
                <p class="text-[#f4efe3]/60 text-[10px] font-bold uppercase tracking-[0.4em]">© <?php echo date('Y'); ?> Gloryvine Covenant Ministry. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>