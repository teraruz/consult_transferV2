<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('config/connect.php');

$errors = array();

if (isset($_POST["loginbtn"])) 
{
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    if (count($errors) == 0) {
        $query = "SELECT id, username, password, userimg FROM users WHERE username = '$username' AND password = '$password'";
        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) == 1) {

            session_start();
            $_SESSION['sess_id'] = session_id();
            $_SESSION['sess_username'] = $username;
            echo "<script>
            window.onload = function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful',
                    text: 'Welcome $username',
                    backdrop: `
                        rgba(0,0,0,0.4)
                        left top
                        no-repeat
                    `,
                    confirmButtonText: 'OK',
                    customClass: {
                        popup: 'swal2-z-index-fix'  // ใช้ customClass เพื่อปรับ z-index
                    }   
                }).then(function() {
                    window.location = 'consult.php';
                });
            };
            </script>";
            
        } else {

             echo "<script>
            window.onload = function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: 'Wrong Username or Password!',
                    confirmButtonText: 'OK',
                }).then(function() {
                    window.location = 'login.php';
                });
            };
            </script>";
        }
    } else {
        echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: 'Username and Password are required!',
                confirmButtonText: 'OK'
            }).then(function() {
                window.location = 'login.php';
            });
        };
        </script>";
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