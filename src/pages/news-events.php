<?php

// News & Events page (router entry: index.php?page=news-events)
// NOTE: This project uses two different frontend stylesystems.
// To ensure Tailwind v4 styles show correctly on these routed pages,
// we render Tailwind's compiled stylesheet link.
?>

<section class="pt-32 pb-20 bg-church-cream">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <span class="text-church-red font-bold uppercase tracking-widest text-xs mb-4 block">Updates</span>
            <h1 class="text-5xl md:text-6xl font-serif text-church-blue mb-6">News & Events</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Explore what’s happening across our community—announcements, gatherings, and moments of worship.
            </p>
        </div>

        <div class="mt-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $cards = [
                [
                    'title' => 'Community Worship Night',
                    'tag' => 'Worship',
                    'img' => 'https://images.unsplash.com/photo-1520975693411-b5f9a3b1dbb3?q=80&w=1200',
                    'desc' => 'A powerful evening of songs, prayer, and the Word.'
                ],
                [
                    'title' => 'Prayer & Intercession',
                    'tag' => 'Prayer',
                    'img' => 'https://images.unsplash.com/photo-1504306668572-2bb9b9f9b9a4?q=80&w=1200',
                    'desc' => 'Come expecting God to move in families and hearts.'
                ],
                [
                    'title' => 'Grace Weekend',
                    'tag' => 'Community',
                    'img' => 'https://images.unsplash.com/photo-1520975682035-4b2b2d9d3c5a?q=80&w=1200',
                    'desc' => 'Meet new people and grow together in faith.'
                ],
            ];
            foreach ($cards as $c):
            ?>
                <div class="bg-white border border-gray-100 rounded-[3rem] overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="h-56 relative">
                        <img src="<?php echo $c['img']; ?>" alt="<?php echo htmlspecialchars($c['title']); ?>" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-church-blue/25"></div>
                        <div class="absolute bottom-5 left-5 bg-white/90 backdrop-blur rounded-full px-4 py-2 text-xs font-bold uppercase tracking-widest text-church-blue border border-white/50">
                            <?php echo htmlspecialchars($c['tag']); ?>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-church-blue font-bold text-2xl mb-3 font-serif"><?php echo htmlspecialchars($c['title']); ?></h3>
                        <p class="text-gray-600 leading-relaxed"><?php echo htmlspecialchars($c['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>