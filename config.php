<?php
$servername = "localhost";
$username = "root";  // Ganti sesuai dengan username MySQL Anda
$password = "";      // Ganti sesuai dengan password MySQL Anda
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
