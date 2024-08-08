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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/library_room.css">
</head>
<body>
    <!---START NAVBAR-->
    <nav>
        <div class="container nav_container">
            <a href="../index.html"><h4>HEC</h4></a>
            <ul class="nav_menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about.html">About</a></li>
                <li><a href="../courses.html">Courses</a></li>
                <li><a href="../new.html">News</a></li>
                <li><a href="../contact.html">Contact</a></li>
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

    <section class="items">
        <div class="container library_container">
            <div class="side_bar">
                <div class="library_logo">
                    <h2>
                    <i class="fa-solid fa-book-open-reader" style="color: #000;"></i>
                    <span style="word-wrap: break-word;" class="text">HEC</span>
                    </h2>   
                </div>
                <i class="fa-solid fa-circle-chevron-right sideclose"></i>
                <div class="menu_bar">
                    <div class="menu menu_search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" placeholder="Search......" class="text">
                    </div>
                    <div class="menu">
                        <a href="../index.html">
                            <i class="fa-solid fa-house"></i>
                            <span class="text">Home</span>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="../index.html">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span class="text">Specilization</span>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="../index.html">
                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                            <span class="text">Article</span>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="../index.html">
                            <i class="fa-solid fa-newspaper"></i>
                            <span class="text">Paper</span>
                        </a>
                    </div>
                    <div class="menu">
                        <a href="../index.html">
                            <i class="fa-sharp fa-solid fa-book"></i>
                            <span class="text">Book</span>
                        </a>
                    </div>
                    <div class="menu menu_logout">
                        <a href="../index.html">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="text">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="book">
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cd1d6ea3b950.84305411.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc0320bcc3d5.29176777.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc05a4001541.39996080.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc0875172a57.45180341.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63684518ae7bb7.89716323.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cd1d6ea3b950.84305411.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc0320bcc3d5.29176777.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc05a4001541.39996080.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63cc0875172a57.45180341.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                <div class="book_category">
                    <div class="book_head">
                        <div class="book_image">
                            <img src="../img/63684518ae7bb7.89716323.jpg" alt="">
                        </div>
                        <div class="read">
                            <a href="book_read.html"><i class="fa-solid fa-book-open"></i></a>
                        </div>
                    </div>
                    <div class="book_detail">
                        <h5>Automatic Habit</h5>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
     
     <!-----FOOTER START-->
     <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>HEC</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis repellat placeat dicta eaque vitae, culpa dolorem omnis quo. Ratione aliquam, iusto eligendi iure expedita ad corrupti in reprehenderit fugiat non.</p>
            </div>
            <div class="footer_2">
                <h4>PERMIAL LINKS</h4>
                <ul class="permiallinks">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="courses.html">DEPARTMENTS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <div class="footer_3">
                <h4>PRIVACY</h4>
                <ul class="privacy">
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">TERMS AND CONDITIONS</a></li>
                    <li><a href="#">REFUND POLICY</a></li>
                </ul>
            </div>
            <div class="footer_4">
                <h4>CONTACT US</h4>
                <div>
                    <p><a href="tel: 09 663112115">09 663 112 115</a></p>
                    <p><a href="#">aungnyinyimin32439@gmail.com</a></p>
                </div>
                <ul class="footer_social">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="viber://chat?number=%2b959692516836"><i class="fa-brands fa-viber"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy;HEC WEB DEVELOPER</small>
        </div>
    </footer>
    <!-----FOOTER END---->
    <script>
        var sideclose=document.querySelector('.sideclose');
        var sidebar=document.querySelector('.side_bar');
        var right=document.querySelector('.fa-chevron-right');
        var search=document.querySelector('.fa-magnifying-glass');

        sideclose.addEventListener('click',()=>{
            sidebar.classList.toggle('close');
        })
        search.addEventListener('click',()=>{
            sidebar.classList.toggle('close');
        })
    </script>




    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>