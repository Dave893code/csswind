<?php

// Talk to Us page (router entry: index.php?page=talk-to-us)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-5xl mx-auto px-4">
        <div class="text-center">
            <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Contact</span>
            <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">Talk to Us</h1>
            <p class="text-gray-600 text-lg leading-relaxed">Send us a message and we’ll get back to you as soon as possible.</p>
        </div>

        <div class="mt-14 bg-white border border-gray-100 rounded-[3rem] p-8 md:p-12 shadow-sm">
            <form class="space-y-6" action="#" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase tracking-widest font-bold text-gray-500 mb-2">Full Name</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-church-gold" placeholder="Your name" />
                    </div>
                    <div>
                        <label class="block text-xs uppercase tracking-widest font-bold text-gray-500 mb-2">Email</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-church-gold" placeholder="you@example.com" />
                    </div>
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-widest font-bold text-gray-500 mb-2">Reason</label>
                    <select name="reason" class="w-full px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-church-gold">
                        <option>Prayer</option>
                        <option>Membership</option>
                        <option>Visiting</option>
                        <option>Partnership</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-widest font-bold text-gray-500 mb-2">Message</label>
                    <textarea name="message" rows="6" required class="w-full px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-church-gold" placeholder="How can we help?"></textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
                    <button type="submit" class="btn-premium">Send Message</button>
                    <p class="text-gray-500 text-sm">This demo form doesn’t submit yet.</p>
                </div>
            </form>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 rounded-[3rem] border border-gray-100">
                    <div class="text-3xl mb-2">📍</div>
                    <p class="font-bold text-church-blue">Address</p>
                    <p class="text-gray-600 text-sm">123 Blessing Grace Way</p>
                </div>
                <div class="text-center p-6 rounded-[3rem] border border-gray-100">
                    <div class="text-3xl mb-2">📞</div>
                    <p class="font-bold text-church-blue">Phone</p>
                    <p class="text-gray-600 text-sm">(555) 123-4567</p>
                </div>
                <div class="text-center p-6 rounded-[3rem] border border-gray-100">
                    <div class="text-3xl mb-2">✉️</div>
                    <p class="font-bold text-church-blue">Email</p>
                    <p class="text-gray-600 text-sm">info@gloryvine.org</p>
                </div>
            </div>
        </div>
    </div>
</section>