<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include('includes/db.php');

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admin_users WHERE username='$username'");
    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_logged_in'] = true;
            echo "<script>window.location.href='index.php?page=admin';</script>";
            exit();
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "Admin not found.";
    }
}
?>

<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-church-blue via-blue-800 to-blue-900 px-4">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="max-w-sm w-full bg-white/95 backdrop-blur-sm p-8 rounded-3xl shadow-2xl border border-white/20 relative z-10">
        <div class="text-center mb-8">
            <div class="bg-church-gold p-4 rounded-2xl mx-auto mb-4 shadow-lg w-fit">
                <svg class="h-8 w-8 text-church-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h2 class="text-2xl font-serif text-church-blue mb-2">Minister Portal</h2>
            <p class="text-gray-600 text-sm">Secure access to church administration</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-xl mb-6 text-center text-sm font-medium flex items-center justify-center gap-2">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                </svg>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div class="space-y-4">
                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                    <div class="relative">
                        <!-- <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg> -->
                        <input type="text" name="username" placeholder="Enter your username" required
                            class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-gray-200 bg-gray-50 focus:ring-2 focus:ring-church-gold focus:border-transparent outline-none transition-all duration-200 text-gray-900 placeholder-gray-500">
                    </div>
                </div>

                <div class="relative">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <!-- <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg> -->
                        <input type="password" name="password" placeholder="Enter your password" required
                            class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-gray-200 bg-gray-50 focus:ring-2 focus:ring-church-gold focus:border-transparent outline-none transition-all duration-200 text-gray-900 placeholder-gray-500">
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-church-blue to-blue-700 text-black py-4 rounded-xl font-bold uppercase tracking-widest hover:from-church-gold hover:to-yellow-500 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <span class="flex items-center justify-center gap-2">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    Access Admin Portal
                </span>
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-500 text-xs">
                Secure administrative access for authorized personnel only
            </p>
        </div>
    </div>
</section>