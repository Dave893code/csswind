<?php
// 1. Configuration - Define this FIRST so all other files can use it
define('ROOT_URL', '/csswind/');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 2. Include the Header for non-standalone pages (home.php is standalone)
if ($page !== 'home') {
    include('src/includes/header.php');
}

// 3. Routing Logic: Check which page the user wants

// 4. Security: Added 'login' and 'admin' to your allowed list
$allowed_pages = [
    'home',
    'sermons',
    'events',
    'visit',
    'history',
    'vision',
    'watch',
    'login',
    'admin',
    'im-new',
    'church',
    'school',
    'early-childhood-center',
    'news-events',
    'talk-to-us'
];

if (in_array($page, $allowed_pages)) {
    include("src/pages/" . $page . ".php");
} else {
    // If they type a page that doesn't exist, show home
    include("pages/home.php");
}

// 5. Include the Footer for non-standalone pages
if ($page !== 'home') {
    include('src/includes/footer.php');
}
