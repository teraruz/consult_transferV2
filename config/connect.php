<?php
$dsn = "mysql:host=localhost;dbname=consult_transfer;charset=utf8"; // Data Source Name
$dbusername = "root"; // ชื่อผู้ใช้ MySQL
$dbpassword = ""; // รหัสผ่าน MySQL

try {
    // สร้างการเชื่อมต่อ
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    // ตั้งค่าโหมดการแจ้งเตือนข้อผิดพลาดเป็นแบบ Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>