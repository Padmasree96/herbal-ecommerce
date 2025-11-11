<?php
$host = "localhost";
$user = "root";        // same as in Workbench
$pass = "root";  // replace with your real password
$dbname = "herbshop";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
?>
