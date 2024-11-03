<?php
session_start();
if ($_SESSION['role'] != 'user') {
    header("Location: login.html");
    exit;
}
echo "Selamat datang, User " . $_SESSION['username'];
?>
<a href="logout.php">Logout</a>
