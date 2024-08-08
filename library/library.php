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
    <link rel="stylesheet" href="../css/library.css">
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
        <div class="container items_container">
            <div class="item_left">
                <h2>အသုံးပြုသူ လမ်းညွှန်ချက်</h2>
                <p> ဤ library တွင် ကျောင်းသားများအတွက် မိမိတို့၏သက်ဆိုင်ရာ အထူးပြုဘာသာရပ်အလိုက် ကိုးကားဖတ်ရှုလိုသည့် Article, Paper, Thesis , အခြားသော သုတ/ရသစာအုပ်များအား ရှာဖွေဖတ်ရှုနိုင်ပါသည်။</p>
            </div>
            <div class="item-right">
                <h2>Login with your identification</h2>
                <div class="identification">
                    <div >
                        <span id="teacher">Teacher Signin</span>
                    </div>
                    <div>
                        <span id="student">Student Signin</span>
                    </div>
                </div>
            </div>
            <div class="login">
                <h2>Library| Teacher<span style="text-align: right;margin-left: 2rem;" class="hide"><i class="fa-solid fa-xmark"></i></span></h2> 
                
                <form action="" method="post" class="lr_form">
                    <div>
                        <label for="">Email</label>
                        <input type="email" placeholder="Enter Your Vaild Email">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter Your Vaild Password">
                    </div>
                    <div>
                        <p><a href="register.html">Forget Password?</a> </p>
                    </div>
                    <div>
                        <button type="submit" name="login" class="btn ">Login</button>
                    </div>
                    <div>
                        <p>If you don't have account ? <a href="register.html">Register here!</a> </p>
                    </div>
                </form>
            </div>
            <div class="login_stu">
                <h2>Library| Student<span style="text-align: right;margin-left: 2rem;" class="none"><i class="fa-solid fa-xmark"></i></span></h2> 
                
                <form action="" method="post" class="lr_form">
                    <div>
                        <label for="">Email</label>
                        <input type="email" placeholder="Enter Your Vaild Email">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter Your Vaild Password">
                    </div>
                    <div>
                        <p><a href="register.html">Forget Password?</a> </p>
                    </div>
                    <div>
                        <button type="submit" name="login" class="btn ">Login</button>
                    </div>
                    <div>
                        <p>If you don't have account ? <a href="register.html">Register here!</a> </p>
                    </div>
                </form>
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




    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>