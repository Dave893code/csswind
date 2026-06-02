<?php

// Early Childhood Center page (router entry: index.php?page=early-childhood-center)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Families</span>
                <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">Early Childhood Center</h1>
                <p class="text-gray-600 text-lg leading-relaxed max-w-xl">
                    A safe, joyful environment for children to learn about God through love, stories, worship songs, and age-appropriate activities.
                </p>

                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Safe & Caring</h3>
                        <p class="text-gray-600">We focus on security, comfort, and kindness.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Faith Formation</h3>
                        <p class="text-gray-600">Stories and songs that plant God’s love early.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Play & Learn</h3>
                        <p class="text-gray-600">Hands-on activities that help kids thrive.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-bold text-2xl mb-2">Parents First</h3>
                        <p class="text-gray-600">Friendly check-in and clear communication.</p>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="index.php?page=visit" class="btn-premium">Plan a Family Visit</a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-church-blue/20 via-church-gold/10 to-church-red/20 rounded-[3rem] blur-2xl"></div>
                <div class="relative rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1544717305-996b815c338c?q=80&w=2048" alt="Kids learning" class="w-full h-[520px] object-cover" />
                    <div class="absolute inset-0 bg-church-blue/35"></div>
                    <div class="absolute top-8 left-8 right-8">
                        <div class="bg-white/90 backdrop-blur rounded-[2rem] p-6 border border-white/50">
                            <p class="text-xs uppercase tracking-widest font-bold text-gray-500">A joyful place</p>
                            <p class="text-3xl font-serif font-bold text-church-blue mt-2">Let them flourish</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>