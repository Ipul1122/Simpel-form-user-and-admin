<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit;
}
echo "Selamat datang, Admin " . $_SESSION['username'];
?>
<a href="logout.php">Logout</a>
