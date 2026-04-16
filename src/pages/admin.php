<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// Security Check
if (!isset($_SESSION['admin_logged_in'])) {
    echo "<script>window.location.href='index.php?page=login';</script>";
    exit();
}

include('includes/db.php');

// Handle event creation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_event'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $query = "INSERT INTO events (title, description, event_date, event_time, location) VALUES ('$title', '$description', '$event_date', '$event_time', '$location')";
    mysqli_query($conn, $query);
    echo "<script>alert('Event created successfully!'); window.location.href='index.php?page=admin';</script>";
}

// Handle event deletion
if (isset($_GET['delete_event'])) {
    $id = (int)$_GET['delete_event'];
    mysqli_query($conn, "DELETE FROM events WHERE id = $id");
    echo "<script>alert('Event deleted successfully!'); window.location.href='index.php?page=admin';</script>";
}

$requests = mysqli_query($conn, "SELECT * FROM prayer_requests ORDER BY created_at DESC");
$events = mysqli_query($conn, "SELECT * FROM events ORDER BY event_date ASC");
?>

<section class="pt-32 pb-20 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-serif text-church-blue">Church Administration</h1>
                <p class="text-gray-500">Manage prayer requests and upcoming events</p>
            </div>
            <a href="logout.php" class="bg-red-50 text-red-600 px-6 py-2 rounded-full font-bold text-xs uppercase border border-red-200 hover:bg-red-600 hover:text-white transition-all">Logout</a>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex space-x-1 mb-8 bg-white p-1 rounded-xl shadow-sm">
            <button onclick="showTab('prayers')" id="prayers-tab" class="flex-1 py-3 px-6 rounded-lg font-bold text-sm transition-all bg-church-blue text-white">
                Prayer Requests
            </button>
            <button onclick="showTab('events')" id="events-tab" class="flex-1 py-3 px-6 rounded-lg font-bold text-sm transition-all text-gray-600 hover:bg-gray-100">
                Events Management
            </button>
        </div>

        <!-- Prayer Requests Tab -->
        <div id="prayers-content" class="tab-content">
            <div class="grid gap-6">
                <?php while ($row = mysqli_fetch_assoc($requests)): ?>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-bold text-lg text-church-blue"><?php echo $row['name']; ?></h3>
                                <p class="text-sm text-gray-400"><?php echo $row['email']; ?> • <?php echo date('M d, Y', strtotime($row['created_at'])); ?></p>
                            </div>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase bg-church-gold/10 text-church-gold">
                                <?php echo $row['request_type']; ?>
                            </span>
                        </div>
                        <p class="text-gray-700 italic leading-relaxed bg-gray-50 p-4 rounded-xl border-l-4 border-church-gold">
                            "<?php echo $row['message']; ?>"
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Events Management Tab -->
        <div id="events-content" class="tab-content hidden">
            <!-- Create Event Form -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mb-8">
                <h2 class="text-2xl font-bold text-church-blue mb-6">Create New Event</h2>
                <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Event Title</label>
                        <input type="text" name="title" required class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-church-gold outline-none">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="4" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-church-gold outline-none resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Event Date</label>
                        <input type="date" name="event_date" required class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-church-gold outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Event Time</label>
                        <input type="time" name="event_time" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-church-gold outline-none">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Location</label>
                        <input type="text" name="location" placeholder="e.g., Main Auditorium" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-church-gold outline-none">
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" name="create_event" class="w-full bg-church-blue text-white py-3 rounded-xl font-bold hover:bg-church-gold transition-colors">
                            Create Event
                        </button>
                    </div>
                </form>
            </div>

            <!-- Events List -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-church-blue">Upcoming Events</h2>
                <?php while ($event = mysqli_fetch_assoc($events)): ?>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-start gap-4">
                                <div class="bg-church-blue text-white p-4 rounded-xl text-center min-w-[80px]">
                                    <span class="block text-2xl font-bold"><?php echo date('d', strtotime($event['event_date'])); ?></span>
                                    <span class="block text-xs uppercase tracking-widest font-bold text-church-gold"><?php echo date('M', strtotime($event['event_date'])); ?></span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-church-blue mb-2"><?php echo $event['title']; ?></h3>
                                    <p class="text-gray-600 mb-3"><?php echo $event['description']; ?></p>
                                    <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                        <?php if ($event['location']): ?>
                                            <span>📍 <?php echo $event['location']; ?></span>
                                        <?php endif; ?>
                                        <?php if ($event['event_time']): ?>
                                            <span>⏰ <?php echo date('g:i A', strtotime($event['event_time'])); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <a href="?page=admin&delete_event=<?php echo $event['id']; ?>" onclick="return confirm('Are you sure you want to delete this event?')" class="bg-red-50 text-red-600 px-4 py-2 rounded-lg font-bold text-xs hover:bg-red-600 hover:text-white transition-all">
                                Delete
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<script>
    function showTab(tabName) {
        // Hide all tabs
        document.getElementById('prayers-content').classList.add('hidden');
        document.getElementById('events-content').classList.add('hidden');

        // Remove active class from all buttons
        document.getElementById('prayers-tab').classList.remove('bg-church-blue', 'text-white');
        document.getElementById('prayers-tab').classList.add('text-gray-600');
        document.getElementById('events-tab').classList.remove('bg-church-blue', 'text-white');
        document.getElementById('events-tab').classList.add('text-gray-600');

        // Show selected tab
        document.getElementById(tabName + '-content').classList.remove('hidden');
        document.getElementById(tabName + '-tab').classList.add('bg-church-blue', 'text-white');
        document.getElementById(tabName + '-tab').classList.remove('text-gray-600');
    }
</script>