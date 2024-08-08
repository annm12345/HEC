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




    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>

        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          //when window width is >= 600px
          breakpoints:{
            600:{
                slidesPerView: 2,
            }
          }
        });


      </script>
</body>
</html>