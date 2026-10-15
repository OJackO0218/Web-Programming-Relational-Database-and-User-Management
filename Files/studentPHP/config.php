<?php
// config.php
$host = "localhost";
$user = "root"; // Username bawaan XAMPP
$pass = ""; // Password bawaan XAMPP (kosong)
$db = "db_school";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Failed connection: " . mysqli_connect_error());
}
