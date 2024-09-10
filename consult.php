<?php 
include("config/chkSession.php");
error_reporting(1);
    include("logindb.php");

    echo $sess_username;
    

    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must login first";
    //     header('location: new_login.php');
    // }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: new_login.php');
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- thai font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">


</head>

<style>
/* header */


body {
    padding: 0;
    margin: 0;
}

.container {
    position: relative;
    z-index: 1;
    margin-top: 70px;
    padding: 5%;
    min-height: 100%;
}

.container p {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.2em;
}

.kanit-regular {
    font-family: "Kanit", sans-serif;
    font-weight: 400;
    font-style: normal;
}

nav {
    position: fixed;
    z-index: 2;
    left: 0;
    right: 0;
    top: 0;
    height: 70px;
    padding: 0 1.5em;
    background-color: #2f3542;
    font-family: 'Montserrat', sans-serif;
}

nav .logo {
    font-size: 1.25em;
    line-height: 70px;
    color: #fff;
}

nav .navicon {
    color: #fff;
    font-size: 2em;
}

nav .nav-menu {
    position: absolute;
    right: 1.5em;
    top: 0;
    padding: 0;
    margin: 0;
    list-style: none;
}

nav .nav-item {
    display: inline-block;
}

nav .nav-item>a {
    display: inline-block;
    padding: 0 1.5em;
    line-height: 70px;
    color: #fff;
    text-decoration: none;
}

nav .dropdown {
    position: relative;
}

nav .dropdown a::after {
    content: '';
    display: inline-block;
    margin-left: .5em;
    vertical-align: middle;
    border-top: .3em solid #fff;
    border-right: .3em solid transparent;
    border-left: .3em solid transparent;
}

nav .dropdown.show a::after {
    transform: rotate(180deg);
}

nav .dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    padding: .5em 0;
    margin-top: -.5em;
    border: 1px solid rgba(0, 0, 0, .3);
    border-radius: .5em;
    background-color: #fff;
}

nav .dropdown.show .dropdown-menu {
    display: block;
}

nav .dropdown-item {
    display: block;
    padding: 0 1.5em;
    font-size: .875em;
    color: #000;
    line-height: 3;
    text-decoration: none;
}

nav .dropdown-item:hover {
    background-color: #800000;
    color: #ffffff;
}

nav .btn-hamburger {
    display: none;
    position: absolute;
    right: 1.5em;
    top: 50%;
    background-color: transparent;
    border: 0;
    cursor: pointer;
    outline: none;
    transform: translateY(-50%);
}

nav .btn-hamburger span {
    display: block;
    width: 30px;
    height: 4px;
    background-color: #fff;
    margin: 6px;
    border-radius: 2px;
    transition: .3s ease-in-out;
}

nav .btn-hamburger span:nth-child(4),
nav .btn-hamburger span:nth-child(5) {
    position: absolute;
    top: 10px;
    opacity: .5;
}

nav .btn-hamburger span:nth-child(4) {
    transform: rotate(45deg) scale(0);
}

nav .btn-hamburger span:nth-child(5) {
    transform: rotate(-45deg) scale(0);
}

nav.opened .btn-hamburger span:nth-child(4) {
    opacity: 1;
    transform: rotate(45deg) scale(1);
}

nav.opened .btn-hamburger span:nth-child(5) {
    opacity: 1;
    transform: rotate(-45deg) scale(1);
}

nav.opened .btn-hamburger span:nth-child(1),
nav.opened .btn-hamburger span:nth-child(2),
nav.opened .btn-hamburger span:nth-child(3) {
    opacity: 0;
}

@media screen and (max-width: 768px) {
    nav .nav-menu {
        position: fixed;
        left: 0;
        right: 0;
        top: 70px;
        bottom: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        background-color: #363d4e;
        transition: bottom .5s ease-in-out;
        overflow: hidden;
    }

    nav.opened .nav-menu {
        bottom: 0;
    }

    nav .nav-item>a {
        display: block;
    }

    nav .dropdown-menu {
        position: relative;
        top: 0;
        margin: 0 1.5em;
    }

    nav .btn-hamburger {
        display: block;
    }
}

/* body */
.mainbody {
    padding: 90px 15px 100px;
    font-size: 30px;
    font-family: "Kanit", sans-serif;
    font-weight: 400;
    font-style: normal;

}

.styleextension {
    text-align: center;
    margin-top: 50px;
    font-style: italic;
    font-size: 35px;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body {
    background: #f2f2f2;
    font-family: 'Open Sans', sans-serif;
}

.search {
    width: 100%;
    position: relative;
    display: flex;
    align-items: flex-end;
}

.searchTerm {
    width: 100%;
    border: 3px solid #adb5bd;
    padding: 5px;
    height: 46px;
    border-radius: 5px 0 0 5px;
    outline: none;
    font-size: 20px;
}

.searchTerm:focus {
    color: #000000;
}

.searchButton {
    width: 50px;
    height: 46px;
    border: 1px solid #adb5bd;
    background: #adb5bd;
    text-align: center;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 20px;
}

.searchButton:hover {
    background-color: #008000;
}

.searchButton:active {
    background-color: #008000;
    transform: scale(0.98);
}

/*Resize the wrap to see the search bar change!*/
.wrap {
    width: 600px;
    position: relative;
    left: 50%;
    padding-top: 50px;
    transform: translate(-50%, -50%);
}

/* Primary button */

input[type="button"] {
    cursor: pointer;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.2s;
    outline: none;
    /* Remove default focus outline */
}

.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-primary:active {
    background-color: #00409a;
    transform: scale(0.98);
}

.rowheadbtn {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    flex-wrap: wrap;
    margin-top: calc(-1* var(--bs-gutter-y));
    margin-right: calc(-.5* var(--bs-gutter-x));
    margin-left: calc(-.5* var(--bs-gutter-x));
}

/* Card styles */

.col-card {
    width: 200px;
    background-color: #c8c8c8;
    border-radius: 10px;
    transition: max-height 0.3s ease-out;
    overflow: hidden;
}

/* CSS Show more */
.col-card.show-more .cardbank-body {
    max-height: 500px;
    /* Adjust to fit your expanded content */
}

.cardbank {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    margin: 20px;
}

.cardbank-img {
    width: 100px;
    border-radius: 20%;
    height: auto;
}

img {
    max-width: 100%;
    height: auto;
}

.cardbank-body {
    padding: 15px;
    text-align: center;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    max-height: auto;
    /* Set a height for the collapsed state */
}

/* .show-more-btn {
    display: block;
    text-align: center;
    background-color: #007bff;
    color: white;
    padding: 7px;
    cursor: pointer;
    text-decoration: none;
    font-size: 20px;
} */

.cardbank-title {
    margin: 0 0 10px;
    font-size: 1.5em;
    text-align: center;
    font-size: 30px;
}

.cardbank-text {
    margin: 0 0 15px;
    color: #555;
    text-align: center;
    font-size: 20px;
}

.cardbank-numtext {
    margin: 0 0 15px;
    text-align: center;
    font-size: 20px;
    -webkit-text-stroke: 1px #0000a0;
}

hr {
    height: 1px;
}

hr.horizontal.dark {
    background-image: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.4), transparent);
}

.cardbank-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    font-size: 20px;
    margin: auto;
}

.cardbank-btn:hover {
    background-color: #0056b3;
}

/* sweet alert font customize */
.swal2-text,
.swal2-title {
    font-family: 'Kanit', sans-serif;
    /* Set your desired font here */
    font-size: 30px;
    /* Set your desired font size here */
    font-style: normal;
}

.swal2-html-container {
    font-family: 'Kanit', sans-serif;
    font-size: 18px;
}

/* Customize the confirm button font */
.swal2-confirm {
    font-family: 'Kanit', monospace;
    font-size: 16px;
}

/* Optional: Customize the cancel button font */
.swal2-cancel {
    font-family: 'Kanit', serif;
    font-size: 16px;
}

.containercard {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding-left: 5%;
    padding-right: 5%;

}

.content {
    flex: 0;
}

footer {
    position: relative;
    bottom: 0;
    width: 100%;
    background-color: #c0c0c0;
    color: white;
    text-align: center;
    height: 30px;
    padding-bottom: 30px;
    opacity: 1; // Leave this as 1
    background-color: rgba(0,0,0,0.6);
}

.copyright {
    font-size: 10px;
    color: black;
}

.footer {
    padding-bottom: 10px;
}

/* Modal Styles */

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 0;
    /* Remove margin-bottom and padding */
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 30px;
    border: 1px solid #888;
    width: 30%;
    border-radius: 10px;
    /* ปรับขนาด Modal ที่นี่ */
    max-width: 500px;
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* เพิ่ม max-width เพื่อไม่ให้ขนาดใหญ่เกินไป */
}
</style>
</head>

<body>

    <!-- Header -->
    <nav>
        <div class="logo">
            CONSULT TRANSFER <strong>AOC1441</strong>
            <i class="fa-solid fa-phone nav-item "></i>
        </div>
        <button type="button" class="btn-hamburger" data-action="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-menu">

            <?php

            require 'logindb.php';           

            if (isset($images))  { // ตรวจสอบว่าตัวแปร $images ถูกตั้งค่าแล้ว
                foreach ($images as $image) {
                    echo '<img src="' . htmlspecialchars($image['userimg']) . '" style="font-size: 5px">';
                }
            } else {
                echo 'ไม่มีข้อมูลรูปภาพ';
            }
            
            ?>
            <li class="nav-item"><a href="#"><?php echo $_SESSION['sess_username']; ?></a></li>
            <li class="nav-item dropdown">
                <a href="#" data-action="dropdown-toggle">Menu</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="logoutbtn" onclick="LogoutFunction();">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- body -->
    <div class="mainbody content">

        <p class="styleextension"><b>Extension: 144178</b></p>

        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm kanit-regular" placeholder="ค้นหาธนาคาร" id="searchInput">
                <button type="submit" class="searchButton" id="searchButton">
                    <i class="material-icons">search</i>
                </button>
            </div>
        </div>
        <div class="rowheadbtn ">
            <div class="col-lg-12 col-md-12  mb-5">

                <div class="rowheadbtn">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="card z-index-2 ">
                            <div class="card-body p-5">
                                <div class="w3-row ">
                                    <div class="ms-md-auto d-flex">
                                        <div class="input-group input-group-outline flex-container"
                                            style="text-align:center;">
                                            <form>
                                                <input value="ประเมินความพึงพอใจ <3" type="button" id="estimatebtn"
                                                    class="form-control btn-primary kanit-regular" id="sueVey"
                                                    name="sueVey" autocomplete="off">

                                                <input value="ติดต่อธนาคารถัดไป +" type="button" id="nextbankbtn"
                                                    class="form-control btn-primary kanit-regular" id="nextBank"
                                                    name="nextBank" autocomplete="off">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="containercard">
        <?php
            
            include('connect.php');                   //เชื่อมต่อฐานข้อมูล
            $sql = "SELECT * FROM bankcard";         // ดึงข้อมูลจากฐานข้อมูล
            $result = $conn->query($sql);         

            if ($result->num_rows > 0) {            // ตรวจสอบว่ามีข้อมูลหรือไม่ฃ
            while($row = $result->fetch_assoc()) {  // วนลูปแสดงผลข้อมูล
                echo '
                <div class="col-card">
                    <div class ="cardbank-body">
                        <img src="' . $row["bankcard_img"] . '" alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">' . $row["bankcard_name"] . '</h2>
                        <p class="cardbank-text">' . $row["bankcard_nameth"] . '</p>
                        <p class="cardbank-numtext">' . $row["bankcard_call"] . '</p>
                        <hr class="horizontal dark my-3"></hr>
                        <button id="callbackbtn" class="cardbank-btn kanit-regular" type="button">โอนสาย</button>                         
                    </div>
                </div>';
            }
            } else {
                echo "ไม่มีข้อมูล";
            }
            $conn->close();   // ปิดการเชื่อมต่อฐานข้อมูล
        ?>
                <div class="col-card" id="card1">
                    <div class="cardbank-body">
                        <img src="https://seeklogo.com/images/S/siam-commercial-bank-logo-B9BB3E105F-seeklogo.com.png"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title" id="dataList">SCB</h2>
                        <p class="cardbank-text">ธนาคารไทยพาณิชย์</p>
                        <p class="cardbank-numtext">02-7777676</p>
                        <hr class="horizontal dark my-3">
                        <button id="callbankbtn" onclick="openConfirmModal()" type=" button"
                            class="cardbank-btn kanit-regular">โอนสาย</button>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard1()">Show More</div> -->
                </div>

                <div class="col-card" id="card2">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/originals/cb/7c/ca/cb7cca77e49eece5ce042aa9f25ad27c.png"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title" id="dataList">KBank</h2>
                        <p class="cardbank-text">ธนาคารกสิกรไทย</p>
                        <p class="cardbank-numtext">02-8888888กด1</p>
                        <hr class="horizontal dark my-3">
                        <button id="callbankbtn2" onclick="openModal2()"
                            class="cardbank-btn kanit-regular">โอนสาย</button>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard2()">Show More</div> -->
                </div>

                <div class="col-card " id="card3">
                    <div class="cardbank-body">
                        <img src="https://comadvance.co.th/wp-content/uploads/2016/07/ktb-logo-1024x1024.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title" id="dataList">KTB</h2>
                        <p class="cardbank-text">ธนาคารกรุงไทย</p>
                        <p class="cardbank-numtext">02-5014409</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard3()">Show More</div> -->
                </div>

                <div class="col-card" id="card4">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/564x/ed/80/c6/ed80c67f6f6b484e3a09c85801a5e3c2.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title" id="dataList">BAY</h2>
                        <p class="cardbank-text">ธนาคารกรุงศรีฯ</p>
                        <p class="cardbank-numtext">02-2962027</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard4()">Show More</div> -->
                </div>

                <div class="col-card" id="card5">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/564x/05/d8/c2/05d8c27cab7a20937602d6b98745afee.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">TTB</h2>
                        <p class="cardbank-text">ธนาคารทหารไทย</p>
                        <p class="cardbank-numtext">02-3259399</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard5()">Show More</div> -->
                </div>

                <div class="col-card" id="card6">
                    <div class="cardbank-body">
                        <img src="https://play-lh.googleusercontent.com/qRZiaHDdiL5Gh8lM8kKQiRqLyDmn7mV6Evm_0oBodr_GgLYFnszJr_fUC6kEYvEj4Xk"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">BACC</h2>
                        <p class="cardbank-text">ธนาคาร ธกส</p>
                        <p class="cardbank-numtext">02-5550555</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard6()">Show More</div> -->
                </div>

                <div class="col-card" id="card7">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/564x/fa/4b/4a/fa4b4a6ef2f95136051607a7fba619ba.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">GSB</h2>
                        <p class="cardbank-text">ธนาคารออมสิน</p>
                        <p class="cardbank-numtext">1115 กด 6</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard7()">Show More</div> -->
                </div>

                <div class="col-card" id="card8">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/564x/dc/7e/02/dc7e02db3345b40154d5d43ef3095c26.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">UOB</h2>
                        <p class="cardbank-text">ธนาคารยูโอบี</p>
                        <p class="cardbank-numtext">02-3449555</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard8()">Show More</div> -->
                </div>

                <div class="col-card" id="card9">
                    <div class="cardbank-body">
                        <img src="https://i.pinimg.com/474x/9c/b9/9f/9cb99fcf31e0e537f81346c66f0b75e4.jpg"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">GHB</h2>
                        <p class="cardbank-text">ธนาคาร ธอส</p>
                        <p class="cardbank-numtext">02-2021155</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard8()">Show More</div> -->
                </div>

                <div class="col-card" id="card10">
                    <div class="cardbank-body">
                        <img src="https://companieslogo.com/img/orig/1023.KL.D-54a944fb.png?t=1720244490"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">CIMB</h2>
                        </h2>
                        <p class="cardbank-text">ธนาคารซีไอเอ็มบี</p>
                        <p class="cardbank-numtext">02-6267777</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard8()">Show More</div> -->
                </div>

                <div class="col-card" id="card10">
                    <div class="cardbank-body">
                        <img src="https://companieslogo.com/img/orig/1023.KL.D-54a944fb.png?t=1720244490"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">CIMB</h2>
                        </h2>
                        <p class="cardbank-text">ธนาคารซีไอเอ็มบี</p>
                        <p class="cardbank-numtext">02-6267777</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard8()">Show More</div> -->
                </div>

                <div class="col-card" id="card10">
                    <div class="cardbank-body">
                        <img src="https://companieslogo.com/img/orig/1023.KL.D-54a944fb.png?t=1720244490"
                            alt="Card Image" class="cardbank-img">
                        <h2 class="cardbank-title">CIMB</h2>
                        </h2>
                        <p class="cardbank-text">ธนาคารซีไอเอ็มบี</p>
                        <p class="cardbank-numtext">02-6267777</p>
                        <hr class="horizontal dark my-3">
                        <a href="#" class="cardbank-btn kanit-regular">โอนสาย</a>
                    </div>
                    <!-- <div class="show-more-btn" onclick="toggleCard8()">Show More</div> -->
                </div>
                <!-- The Modal -->
                <div class="modal" id="cancelModal">
                    <!-- Modal Content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <span class="header-text">
                                <h3><b>Consult Transfer</b></h3>
                            </span> -->
                            <span class="close" onclick="closeModal1()">&times;</span>
                        </div>
                        <center>
                            <br>
                            <img src="img/icon/X.png" alt="" width="25%;">
                            <br>
                            <h4>ยกเลิกสายสนทนาแล้ว</h4>
                            <br>
                            <input value="ตกลง" style="background-color:green;" type="submit"
                                class="cardbank-btn kanit-regular" id="scb" name="scb" autocomplete="off"
                                onclick="closeModal1()">
                            <br><br>
                        </center>
                    </div>
                </div>

                <div class="modal" id="kycModal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close" onclick="closeModal2()">&times;</span>
                        </div>
                        <center>
                            <br><br>
                            <img src="assets/image/during.gif" alt="" width="25%;">
                            <br>
                            <h2 style="color:red;">During KYC</h2>
                            <h4>ระบบกำลังดำเนินการกรุณารอสักครู่เพื่อรอธนาคารติดต่อกลับไป</h4>
                    </div>
                </div>
            </div>

            <div class="modal" id="confirmModal">
                <!-- Modal content -->
                <div class="modal-content">
                    <center>
                        <br><br>
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/012/042/301/small/warning-sign-icon-transparent-background-free-png.png"
                            alt="Trulli" width="150">
                        <br>
                        <h2 style="color:red;">ยืนยันการโอนสาย</h2>
                        <div class="row">
                            <div class="col">
                                <input value="ตกลง" style="background-color:green;" type="submit"
                                    class="cardbank-btn kanit-regular" id="scb" name="scb" autocomplete="off"
                                    onclick="kycModal()">
                                <input value="ยกเลิก" style="background-color:red;" type="submit"
                                    class="cardbank-btn kanit-regular" id="scb" name="scb" autocomplete="off"
                                    onclick="closeConfirmModal()">
                            </div>
                        </div>
                </div>
                </center>
            </div>
        </div>
    </div>

    <footer>
        <p>
        <div class="row" style="padding-top: 10px;">
            <div class="col">
                <img src="assets/image/totcs.png" width="130px" style="vertical-align:middle">
                © <script style="color : black;">
                document.write(new Date().getFullYear())
                </script>, by
                <a href="#" class="font-weight-bold">Cloud and Digital Service Development Sector 3</a>
            </div>
        </div>
        </p>
    </footer>

</body>

<!-- footer page-->
<script type="text/javascript">
function adjustFooter() {
    const footer = document.querySelector('footer');
    const content = document.querySelector('.footer');
    content.style.paddingBottom = `${footer.offsetHeight}px`;
}
window.addEventListener('resize', adjustFooter);
window.addEventListener('load', adjustFooter);
</script>

<script>
function LogoutFunction() {
    Swal.fire({
        title: "คุณต้องการออกจากระบบใช่ไหม?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ออกจากระบบ",
        cancelButtonText: "ยกเลิก"
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to another page
            window.location.href = "http://localhost/ConsultTransfer/pages/aoc-consult/new_login.php";
            <?php
            session_destroy();
            ?>
        }
    });
}
</script>
<script type="text/javascript">
let nav = document.querySelector('nav');
let dropdown = nav.querySelector('.dropdown');
let dropdownToggle = nav.querySelector("[data-action='dropdown-toggle']");
let navToggle = nav.querySelector("[data-action='nav-toggle']");

dropdownToggle.addEventListener('click', () => {
    if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
    } else {
        dropdown.classList.add('show');
    }
})

navToggle.addEventListener('click', () => {
    if (nav.classList.contains('opened')) {
        nav.classList.remove('opened');
    } else {
        nav.classList.add('opened');
    }
})
</script>

<script>
// JavaScript to control the modal
function openModal1() {
    document.getElementById("cancelModal").style.display = "block";

}

function closeModal1() {
    document.getElementById("cancelModal").style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById("cancelModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// JavaScript to control the modal
function kycModal() {
    document.getElementById("kycModal").style.display = "block";
    document.getElementById("confirmModal").style.display = "none";
}

function closeModal2() {
    document.getElementById("kycModal").style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById("kycModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function openConfirmModal() {
    document.getElementById("confirmModal").style.display = "block";
}

function closeConfirmModal() {
    document.getElementById("confirmModal").style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById("confirmModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
window.onload = function() {
    // เพิ่มสถานะใหม่ลงในประวัติ
    history.pushState(null, document.title, location.href);

    window.addEventListener('popstate', function() {
        // เมื่อผู้ใช้พยายามย้อนกลับ
        history.pushState(null, document.title, location.href);
    });
};
</script>

<script>
document.getElementById('searchButton').addEventListener('click', function() {
    let filter = document.getElementById('searchInput').value.toLowerCase();
    let cards = document.querySelectorAll('.col-card');

    cards.forEach(function(card) {
        let cardText = card.textContent.toLowerCase();
        if (cardText.includes(filter)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });

});
</script>

<script>
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