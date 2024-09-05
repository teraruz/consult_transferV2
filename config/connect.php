<?php
$servername = "localhost"; // ชื่อเซิร์ฟเวอร์ MySQL
$dbusername = "root"; // ชื่อผู้ใช้ MySQL
$dbpassword = ""; // รหัสผ่าน MySQL
$dbname = "consult_transfer"; // ชื่อฐานข้อมูลที่ต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
