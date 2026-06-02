<footer class="bg-[var(--color-church-blue)] text-[var(--color-church-cream)] font-sans pt-16">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-12">

        <div class="space-y-6 text-center lg:text-left">
            <div>
                <h2 class="text-3xl font-bold text-white font-serif tracking-tight">Gloryvine</h2>
                <span class="block text-xs font-semibold text-[var(--color-church-gold)] uppercase tracking-widest mt-1">Covenant Ministry</span>
            </div>
            <p class="text-sm italic opacity-80 max-w-sm mx-auto lg:mx-0">
                "Rooted in Faith, Growing in Grace, Impacting Our World."
            </p>
            <div class="pt-4 border-t border-white/10 lg:border-none">
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-2 font-serif">Service Times</h4>
                <p class="text-sm opacity-80">Sundays: 9:00 AM & 11:30 AM</p>
                <p class="text-sm opacity-80">Wednesdays: 7:00 PM (Bible Study)</p>
            </div>
        </div>

        <div class="text-center lg:text-left">
            <h3 class="text-lg font-semibold text-white font-serif mb-6 relative inline-block lg:block after:content-[''] after:block after:w-8 after:h-0.5 after:bg-[var(--color-church-gold)] after:mt-2 after:mx-auto lg:after:mx-0">
                Quick Links
            </h3>
            <ul class="space-y-3 text-sm">
                <li><a href="index.php?page=home" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Home</a></li>
                <li><a href="index.php?page=vision" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">About Our Church</a></li>
                <li><a href="index.php?page=sermons" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Watch Sermons</a></li>
                <li><a href="index.php?page=events" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Upcoming Events</a></li>
                <li><a href="#" class="text-[var(--color-church-red)] font-semibold hover:brightness-125 transition-all duration-200">Online Giving ❤️</a></li>
            </ul>
        </div>

        <div class="text-center lg:text-left">
            <h3 class="text-lg font-semibold text-white font-serif mb-6 relative inline-block lg:block after:content-[''] after:block after:w-8 after:h-0.5 after:bg-[var(--color-church-gold)] after:mt-2 after:mx-auto lg:after:mx-0">
                Ministries
            </h3>
            <ul class="space-y-3 text-sm">
                <li><a href="index.php?page=vision" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Children & Youth</a></li>
                <li><a href="index.php?page=home" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Worship & Arts</a></li>
                <li><a href="index.php?page=events" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Missions & Outreach</a></li>
                <li><a href="index.php?page=history" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Men's Fellowship</a></li>
                <li><a href="index.php?page=visit" class="hover:text-[var(--color-church-gold)] transition-colors duration-200">Women of Covenant</a></li>
            </ul>
        </div>

        <div class="text-center lg:text-left space-y-4">
            <h3 class="text-lg font-semibold text-white font-serif mb-6 relative inline-block lg:block after:content-[''] after:block after:w-8 after:h-0.5 after:bg-[var(--color-church-gold)] after:mt-2 after:mx-auto lg:after:mx-0">
                Get in Touch
            </h3>
            <div class="text-sm space-y-2 opacity-80">
                <p><strong class="text-white font-medium">Address:</strong> 123 Blessing Grace Way, City, State</p>
                <p><strong class="text-white font-medium">Phone:</strong> (555) 123-4567</p>
                <p><strong class="text-white font-medium">Email:</strong> info@gloryvine.org</p>
            </div>

            <div class="flex justify-center lg:justify-start space-x-4 pt-4">
                <a href="#" class="p-2 bg-white/5 rounded-full text-[var(--color-church-cream)] hover:text-white hover:bg-[var(--color-church-red)] transition-all duration-200 transform hover:-translate-y-1" aria-label="Facebook">🌐</a>
                <a href="#" class="p-2 bg-white/5 rounded-full text-[var(--color-church-cream)] hover:text-white hover:bg-[var(--color-church-red)] transition-all duration-200 transform hover:-translate-y-1" aria-label="Instagram">📸</a>
                <a href="#" class="p-2 bg-white/5 rounded-full text-[var(--color-church-cream)] hover:text-white hover:bg-[var(--color-church-red)] transition-all duration-200 transform hover:-translate-y-1" aria-label="YouTube">📺</a>
                <a href="#" class="p-2 bg-white/5 rounded-full text-[var(--color-church-cream)] hover:text-white hover:bg-[var(--color-church-red)] transition-all duration-200 transform hover:-translate-y-1" aria-label="Podcast">🎙️</a>
            </div>
        </div>

    </div>

    <?php if (isset($page) && $page !== 'home') echo '</div>'; // close page container for routed pages 
    ?>

    <div class="bg-black/20 border-t border-white/10 py-6">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs opacity-60">
            <p>&copy; 2026 Gloryvine Covenant Ministry. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <span>|</span>
                <a href="#" class="hover:text-white transition-colors">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>