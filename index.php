<?php
// 1. Configuration - Define this FIRST so all other files can use it
define('ROOT_URL', '/csswind/');

// 2. Include the Header
include('src/includes/header.php');

// 3. Routing Logic: Check which page the user wants
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 4. Security: Added 'login' and 'admin' to your allowed list
$allowed_pages = ['home', 'sermons', 'events', 'visit', 'history', 'vision', 'watch', 'login', 'admin'];

if (in_array($page, $allowed_pages)) {
    include("src/pages/" . $page . ".php");
} else {
    // If they type a page that doesn't exist, show home
    include("pages/home.php");
}

// 5. Include the Footer
include('src/includes/footer.php');
