<?php

// School page (router entry: index.php?page=school)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Next Steps</span>
                <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">Our School</h1>
                <p class="text-gray-600 text-lg leading-relaxed max-w-xl">
                    A place to grow in God’s Word, develop spiritual discipline, and learn how to walk faithfully in everyday life.
                </p>

                <div class="mt-10 space-y-4">
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Bible Foundations</h3>
                        <p class="text-gray-600">Learn scripture, study principles, and build a strong spiritual worldview.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Discipleship Training</h3>
                        <p class="text-gray-600">Become equipped to serve, lead, and mentor others with integrity.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Practical Growth</h3>
                        <p class="text-gray-600">Spiritual habits that transform character, habits, and relationships.</p>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="index.php?page=events" class="btn-premium">See Classes & Events</a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-church-blue/20 via-church-gold/10 to-church-red/20 rounded-[3rem] blur-2xl"></div>
                <div class="relative rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=2048" alt="Bible study" class="w-full h-[520px] object-cover" />
                    <div class="absolute inset-0 bg-church-blue/35"></div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <div class="bg-white/90 backdrop-blur rounded-[2rem] p-6 border border-white/50">
                            <p class="text-xs uppercase tracking-widest font-bold text-gray-500">Now enrolling</p>
                            <p class="text-3xl font-serif font-bold text-church-blue mt-2">Grow in the Word</p>
                            <p class="text-gray-600 mt-3">Join us for teaching, practice, and prayer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>