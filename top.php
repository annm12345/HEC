<?php
require('connection.php');
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Education Center</title>
    <!----FONTAWSOME CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!---swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">

    <!---scan-cdn---------->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    
</head>
<body>
    <!---START NAVBAR-->
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>HEC</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="new.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <div class="top_noti" id="open" onclick="notification()"><i class="fa-regular fa-bell" ></i><span></span></div>
            </ul>
            <div class="noti" id="open" onclick="notification()"><i class="fa-regular fa-bell" ></i><span></span></div>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
            <div class="noti_detail">
                <div class="noti_menu">
                    <div class="time">
                        <span>12:00</span>
                    </div>
                    <a href="">
                        <div class="noti_new">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloribus perferendis quia vitae ab.</p>
                        </div>
                    </a>
                    <div class="noti_del" style="cursor: pointer;">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
                <div class="noti_menu">
                    <div class="time">
                        <span>12:00</span>
                    </div>
                    <a href="">
                        <div class="noti_new">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloribus perferendis quia vitae ab.</p>
                        </div>
                    </a>
                    <div class="noti_del" style="cursor: pointer;">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
                <div class="noti_menu">
                    <div class="time">
                        <span>12:00</span>
                    </div>
                    <a href="">
                        <div class="noti_new">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloribus perferendis quia vitae ab.</p>
                        </div>
                    </a>
                    <div class="noti_del" style="cursor: pointer;">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
                <div class="noti_menu">
                    <div class="time">
                        <span>12:00</span>
                    </div>
                    <a href="">
                        <div class="noti_new">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloribus perferendis quia vitae ab.</p>
                        </div>
                    </a>
                    <div class="noti_del" style="cursor: pointer;">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
                <div class="noti_menu">
                    <div class="time">
                        <span>12:00</span>
                    </div>
                    <a href="">
                        <div class="noti_new">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloribus perferendis quia vitae ab.</p>
                        </div>
                    </a>
                    <div class="noti_del" style="cursor: pointer;">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!---NAVBAR END-->

   