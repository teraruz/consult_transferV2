<?php
// session_start();
include('server.php');

// include("inc/chkSession.php");
$errors = array();

if (isset($_POST["loginbtn"])) 
{
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $query = "SELECT id, username, password, userimg  FROM users WHERE username = '$username' AND password = '$password'";
        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) == 1) {

            session_start();
            $_SESSION['sess_id'] = session_id();
            $_SESSION['sess_username'] = $username;
            // $_SESSION['success'] = "You are now logged in";
            header("Location: new_Consult.php");
            exit();

        } else {

            array_push($errors, "Wrong Username and Password");
            $_SESSION['error'] = "Wrong Username and Password!";
            header("Location: new_login.php");
            exit();
        }
    } else {
        array_push($errors, "Username and Password are required");
        $_SESSION['error'] = "Username and Password are required";
        header("Location: new_login.php");
        
        
    }
}

    $dsn = "mysql:host=localhost;dbname=consult_transfer;charset=utf8";
    $username1 = "root";
    $password1 = "";
    $pdo = new PDO($dsn, $username1, $password1);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $images = []; // ประกาศตัวแปร $images
        $sql = "SELECT id, username, userimg FROM users WHERE username = '$username1'";
        $stmt = $pdo->prepare($sql);  // เตรียม statement
        $stmt->execute();  // Execute คำสั่ง
        $images = $stmt->fetchAll(PDO::FETCH_ASSOC); // ดึงข้อมูลทั้งหมดออกมาเป็น array
        return $images;  // ส่งข้อมูลออกไป
        

?>