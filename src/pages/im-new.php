<?php

// Im New page (router entry: index.php?page=im-new)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Welcome</span>
                <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">I'm New to Gloryvine</h1>
                <p class="text-gray-600 text-lg leading-relaxed">
                    If it’s your first time visiting, you’re not alone. We’ll guide you through what to expect—so you can relax, connect, and worship with us.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="bg-white rounded-[3rem] p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-church-blue text-white flex items-center justify-center text-xl">1</div>
                            <div>
                                <h3 class="text-church-blue font-bold text-xl mb-1">Arrive with confidence</h3>
                                <p class="text-gray-600">We’ll help you find parking, seating, and the best way to meet our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[3rem] p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-church-gold text-church-blue flex items-center justify-center text-xl font-bold">2</div>
                            <div>
                                <h3 class="text-church-blue font-bold text-xl mb-1">Worship & teaching</h3>
                                <p class="text-gray-600">You’ll experience heartfelt worship and Bible-centered teaching that builds faith.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[3rem] p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-church-red text-white flex items-center justify-center text-xl">3</div>
                            <div>
                                <h3 class="text-church-blue font-bold text-xl mb-1">Connect afterwards</h3>
                                <p class="text-gray-600">Meet friendly people and receive prayer support—no pressure, just care.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="index.php?page=visit" class="btn-premium text-center">Plan a Visit</a>
                    <a href="index.php?page=events" class="inline-block bg-white border border-church-blue/20 text-church-blue px-8 py-4 rounded-full font-bold uppercase tracking-wider hover:bg-church-blue hover:text-white transition-all shadow-sm">
                        See Upcoming Events
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-church-blue/20 via-church-gold/10 to-church-red/20 rounded-[3rem] blur-2xl"></div>
                <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1520975958225-0db2c5d7e2e0?q=80&w=2048" alt="People welcoming" class="w-full h-[520px] object-cover" />
                    <div class="absolute inset-0 bg-church-blue/40"></div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <div class="bg-white/90 backdrop-blur rounded-[2rem] p-6 border border-white/40">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-church-gold text-church-blue flex items-center justify-center text-xl">🤍</div>
                                <div>
                                    <p class="text-xs uppercase tracking-widest font-bold text-gray-500">Need Prayer?</p>
                                    <p class="text-2xl font-serif text-church-blue font-bold">We’re here for you.</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mt-3">Visit us and we’ll pray with you—faithfully and respectfully.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>