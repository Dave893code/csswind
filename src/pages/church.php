<?php

// Church page (router entry: index.php?page=church)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="flex-1">
                <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">About</span>
                <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">Our Church</h1>
                <p class="text-gray-600 text-lg leading-relaxed max-w-xl">
                    Gloryvine is a Spirit-led community centered on the Word of God—where worship is real, faith is growing, and love is lived.
                </p>

                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-serif text-3xl font-bold mb-2">Worship</h3>
                        <p class="text-gray-600">Heartfelt praise and prayer that lifts Jesus high.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-serif text-3xl font-bold mb-2">Word</h3>
                        <p class="text-gray-600">Bible-based teaching that builds faith and obedience.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-serif text-3xl font-bold mb-2">Family</h3>
                        <p class="text-gray-600">People who care—helping you feel at home.</p>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-[3rem] p-8 shadow-sm">
                        <h3 class="text-church-blue font-serif text-3xl font-bold mb-2">Purpose</h3>
                        <p class="text-gray-600">Growing disciples who serve with excellence.</p>
                    </div>
                </div>
            </div>

            <div class="flex-1 relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-church-blue/20 via-church-gold/10 to-church-red/20 rounded-[3rem] blur-2xl"></div>
                <div class="relative rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1520697222865-7b7a1f2d3d9a?q=80&w=2048" alt="Church worship" class="w-full h-[520px] object-cover" />
                    <div class="absolute inset-0 bg-church-blue/35"></div>
                    <div class="absolute top-8 left-8 right-8">
                        <div class="bg-white/90 backdrop-blur rounded-[2rem] p-6 border border-white/50">
                            <p class="text-xs uppercase tracking-widest font-bold text-gray-500">Scripture</p>
                            <p class="text-2xl font-serif text-church-blue font-bold mt-2">"Rooted in Faith, Growing in Grace"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>