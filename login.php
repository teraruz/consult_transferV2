<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <meta http-equiv="Cache-Control" content="no-store" /> -->
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Login - AOC Consult transfer</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Consult Transfer Login</title>

</head>

<style>
<style>.responsive {
    width: 100%;
    height: auto;
}


/* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800'); */

* {
    box-sizing: border-box;
}

body {
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Kanit", sans-serif;
    font-style: normal;
    height: 100vh;
    margin: -20px 0 50px;
    overflow: hidden;
}

h1 {
    font-weight: bold;
    font-family: "Kanit", sans-serif;
    font-style: normal;
    font-size: 35px;
    color: #344767;

}

h2 {
    text-align: center;
    margin: 20px;

}

h4 {
    font-size: 20px;
    margin: 0px;
    color: #344767;

}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin-top: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background-color: transparent;
    border-color: #FFFFFF;
}

form {
    background-color: #FFFFFF;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    border-radius: 10px;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.25),
        0 5px 5px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {

    0%,
    49.99% {
        opacity: 0;
        z-index: 1;
    }

    50%,
    100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

.overlay {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

img {
    max-width: 100%;
    height: auto;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #DDDDDD;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

footer {
    /* background-color: #f6f5f7; */
    color: #505050;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
    opacity: 1; // Leave this as 1
    background-color: rgba(0,0,0,0.6);
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

.blur {
    filter: blur(3px);
}

/* font CSS */
.kanit-regular {
    font-family: "Kanit", sans-serif;
    font-weight: 400;
    font-style: normal;
}

.kanit-medium {
    font-family: "Kanit", sans-serif;
    font-weight: 500;
    font-style: normal;
}

.kanit-semibold {
    font-family: "Kanit", sans-serif;
    font-weight: 600;
    font-style: normal;
}

.kanit-bold {
    font-family: "Kanit", sans-serif;
    font-weight: 700;
    font-style: normal;
}

.kanit-extrabold {
    font-family: "Kanit", sans-serif;
    font-weight: 800;
    font-style: normal;
}

.kanit-black {
    font-family: "Kanit", sans-serif;
    font-weight: 900;
    font-style: normal;
}

.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 30px;
    line-height: 0;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
}

.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: center;
    font-size: 10px;
}

.success {
    color: #3c763d;
    background: #dff9d8;
    border: 1px solid #3c763d;
    margin-bottom: 10px;
}
</style>

<body class="bg-grey-200">
    <div class="container" id="container">
        <div class="form-container sign-in-container">

            <form id="loginForm" action="logindb.php" method="post">
                <h4> AOC 1441 <i class="material-icons">support_agent</i></h4>
                <h1>Consult Transfer </h1>

                <?php if (isset($_SESSION['error'])): ?>
                <div class="error">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                </div>
                <?php endif ?>

                <label style="padding-right: 220px;">Username:</label>
                <input type="text" id="username" name="username" required>
                <label style="padding-right: 220px;">Password:</label>
                <input type="password" id="password" name="password" required>
                <button name="loginbtn" type="submit"> Sign In </button>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <img class="blur" src="https://wallpapercave.com/wp/wp7213387.jpg" alt="loginimg">
            </div>
        </div>
    </div>

    <footer>
        <p>
        <div class="col-12 col-md-12 my-auto text-center ">
            <img src="assets/image/totcs.png" alt="" width="150px">
            <div class="copyright">
                © <span style="color : grey">
                    <script>
                    document.write(new Date().getFullYear());
                    </script>
                </span>, by
                <a href="#" class="font-weight-bold">Cloud and Digital Service Development Sector 3</a>
            </div>
        </div>
        </p>
    </footer>

</body>

<script>
// Clear input username password 
window.onload = function() {
    document.querySelectorAll('input[type="text"]').forEach(input => {
        input.value = ''; // เคลียร์ค่าของ input
    });
    document.querySelectorAll('input[type="password"]').forEach(input => {
        input.value = ''; // เคลียร์ค่าของ password
    });
};

// ฟังก์ชันเพื่อป้องกันการกลับหรือไปหน้าต่อไป
function disableBackAndForward() {
    // เพิ่มสถานะในประวัติการเข้าชม
    window.history.pushState(null, null, window.location.href);

    // ฟังเหตุการณ์ 'popstate' ซึ่งเกิดขึ้นเมื่อใช้ปุ่มย้อนกลับหรือถัดไป
    window.addEventListener('popstate', function(event) {
        // เพิ่มสถานะใหม่ทุกครั้งที่เกิด 'popstate'
        window.history.pushState(null, null, window.location.href);
    });
}
// เรียกใช้ฟังก์ชันเพื่อป้องกันปุ่มย้อนกลับและถัดไป
disableBackAndForward();
</script>

</html>