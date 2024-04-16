<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lastprojectdatabase";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lưu ý: Chúng ta không đóng kết nối ở đây nữa
?>
