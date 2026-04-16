<?php
include('includes/db.php');
$events = mysqli_query($conn, "SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date ASC");
?>

<section class="pt-32 pb-20 bg-church-blue text-white">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-5xl font-serif mb-4">Upcoming Events</h1>
        <p class="text-blue-100 font-light">Stay connected with our community through these special gatherings.</p>
    </div>
</section>

<section class="py-24 bg-church-cream">
    <div class="max-w-5xl mx-auto px-4">
        <?php if (mysqli_num_rows($events) > 0): ?>
            <div class="space-y-8">
                <?php while ($event = mysqli_fetch_assoc($events)): ?>
                    <div class="bg-white p-8 rounded-3xl shadow-sm flex flex-col md:flex-row gap-8 items-center border border-gray-100 hover:shadow-lg transition-all duration-300">
                        <div class="bg-church-blue text-white p-6 rounded-2xl text-center min-w-[120px] shadow-lg">
                            <span class="block text-4xl font-bold"><?php echo date('d', strtotime($event['event_date'])); ?></span>
                            <span class="block text-xs uppercase tracking-widest font-bold text-church-gold"><?php echo date('M', strtotime($event['event_date'])); ?></span>
                            <span class="block text-xs uppercase tracking-widest font-bold text-church-gold"><?php echo date('Y', strtotime($event['event_date'])); ?></span>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-church-blue mb-2"><?php echo htmlspecialchars($event['title']); ?></h3>
                            <p class="text-gray-600 text-sm mb-4"><?php echo htmlspecialchars($event['description']); ?></p>
                            <div class="flex flex-wrap gap-4 text-xs font-bold text-gray-400 uppercase tracking-widest">
                                <?php if ($event['location']): ?>
                                    <span>📍 <?php echo htmlspecialchars($event['location']); ?></span>
                                <?php endif; ?>
                                <?php if ($event['event_time']): ?>
                                    <span>⏰ <?php echo date('g:i A', strtotime($event['event_time'])); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button class="bg-church-gold text-white px-8 py-3 rounded-xl font-bold text-sm hover:bg-church-blue transition-all shadow-lg hover:shadow-xl">
                            Remind Me
                        </button>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="bg-white p-12 rounded-3xl shadow-sm border border-gray-100">
                    <div class="text-6xl mb-4">📅</div>
                    <h3 class="text-2xl font-bold text-church-blue mb-4">No Upcoming Events</h3>
                    <p class="text-gray-600">Check back soon for upcoming events and special gatherings.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>