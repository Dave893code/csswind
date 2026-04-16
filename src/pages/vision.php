<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Purpose & Mandate</span>
        <h1 class="text-5xl font-serif text-church-blue">Our Vision & Mission</h1>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-16">
        <div class="bg-church-blue p-12 rounded-[3rem] text-white shadow-2xl">
            <h2 class="text-church-gold font-serif text-4xl mb-6">The Vision</h2>
            <p class="text-xl font-light leading-relaxed">To raise a global community of believers who are deeply rooted in the Word, walking in their divine covenant, and reflecting the glory of God in every sphere of life.</p>
        </div>
        <div class="bg-church-gold p-12 rounded-[3rem] text-church-blue shadow-2xl">
            <h2 class="font-serif text-4xl mb-6">The Mission</h2>
            <p class="text-xl font-medium leading-relaxed">To preach the gospel of Grace, mentor leaders with integrity, and provide a sanctuary where the broken find healing and the lost find home.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 mt-24">
        <h2 class="text-center text-church-blue font-serif text-4xl mb-12">Core Values</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <?php
            $values = ['Faith', 'Integrity', 'Love', 'Excellence'];
            foreach ($values as $v): ?>
                <div class="text-center p-8 border border-gray-100 rounded-3xl hover:border-church-gold transition-colors">
                    <span class="text-church-blue font-bold text-lg"><?php echo $v; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>