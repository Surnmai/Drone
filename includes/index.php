<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome links  -->
    <link type="text/css" href="./all.css">

    <!-- google fonts link  -->
    <!-- <link type="text/css" href="./all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper Js link  -->
    <!-- <link type="text/css" href="./swiperJs.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css link  -->
    <link rel="stylesheet" href="./style.css">
    <title>slider</title>
</head>
<body>
<header class="header">
        <a href="#" ><img src="./Img/logo.png" class="logo"></a>
        <ul class="nav">
            <li><a href="#home">home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#products">products</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
        <i class="fas fa-bars" id="menuBtn"></i>
    </header>

    <!-- home starts here  -->
    <section class="home" id="home">
        <div class="swiper home-slider">

            <div class="swiper-wrapper ">

                <div class="swiper-slide box" style="background: url('./Img/drone1.jpg');">
                    <!-- <div class="content">
                        <h3>Header here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga vel neque ea recusandae odit quae, numquam itaque repellat at esse voluptates inventore atque nesciunt voluptatem quaerat harum minus dolore ratione.</p>
                        <a href="#" class="btn">view more</a>
                    </div> -->

                </div>
                <div class="swiper-slide box" style="background: url('./Img/drone2.jpg');">
                    <div class="content">
                        <h3>Header here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga vel neque ea recusandae odit quae, numquam itaque repellat at esse voluptates inventore atque nesciunt voluptatem quaerat harum minus dolore ratione.</p>
                        <a href="#" class="btn">view more</a>
                    </div>

                </div>
                <div class="swiper-slide box" style="background: url('./Img/drone3.jpg');">
                    <div class="content">
                        <h3>Header here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga vel neque ea recusandae odit quae, numquam itaque repellat at esse voluptates inventore atque nesciunt voluptatem quaerat harum minus dolore ratione.</p>
                        <a href="#" class="btn">view more</a>
                    </div>

                </div>
                <div class="swiper-slide box" style="background: url('./Img/drone5.jpg');">
                    <div class="content">
                        <h3>Header here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga vel neque ea recusandae odit quae, numquam itaque repellat at esse voluptates inventore atque nesciunt voluptatem quaerat harum minus dolore ratione.</p>
                        <a href="#" class="btn">view more</a>
                    </div>

                </div>

                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- home ends  -->

    <!-- services starts here  -->
    <section class="services" id="services">
        <h3 class="heading">provided services</h3>
        <div class="gallery-container">

            <div class="content">
                <img src="./Img/wedding 1.jpg" alt="">
                <h3>wedding</h3>
                <a href="#" class="btn">View more</a>
            </div>
            <div class="content">
                <img src="./Img/special occasion 1.png" alt="">
                <h3>Special Occasion</h3>
                <a href="#" class="btn">View more</a>
            </div>
            <div class="content">
                <img src="./Img/sports1.jpg" alt="">
                <h3>Sports Event</h3>
                <a href="#" class="btn">View more</a>
            </div>
            <div class="content">
                <img src="./Img/aeriel.jpg" alt="">
                <h3>Aerial Advertising</h3>
                <a href="#" class="btn">View more</a>
            </div>
            <div class="content">
                <img src="./Img/air survey.jpg" alt="">
                <h3>Air Survey</h3>
                <a href="#" class="btn">View more</a>
            </div>
            <div class="content">
                <img src="./Img/real estate.jpg" alt="">
                <h3>Real Estates</h3>
                <a href="#" class="btn">View more</a>
            </div>
                
        </div>

    </section>
    <!-- services end here  -->

    <!-- products prices starts  -->
    <section class="products" id="products">
        <h3 class="heading">Products</h3>
        <div class="price-container">

            <div class="price-box">
                <h3>basic package</h3>
                <div class="price">
                    <p class="figure"> <span>₵</span>30</p>
                    <p class="duration">per month</p>
                </div>
                <p class="time">1hr service</p>
                <!-- <a href="#" class="btn"></a> -->
            </div>
            <div class="price-box">
                <h3>deluxe package</h3>
                <div class="price">
                    <p class="figure"> <span>₵</span>60.99</p>
                    <p class="duration">per month</p>
                </div>
                <p class="time">3hr service</p>
                <!-- <a href="#" class="btn"></a> -->
            </div>
            <div class="price-box">
                <h3>pro package</h3>
                <div class="price">
                    <p class="figure"> <span>₵</span>90.99</p>
                    <p class="duration">per month</p>
                </div>
                <p class="time">6hr service</p>
                <!-- <a href="#" class="btn"></a> -->
            </div>
            

        </div>
    </section>
    <!-- products prices end  -->

    <!-- about us section starts -->

    <section class="about" id="about">

        <h3 class="heading">about us</h3>
        <div class="about-container">
            <div class="img">
                <img src="./Img/fly-5185121_1920.jpg" alt="">
            </div>

            <div class="content">
                <h3>more about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum, ut commodi harum sint eveniet totam beatae sunt id dolorum cumque ullam, repellendus doloremque quo vel eaque minus facilis molestiae?
                Aspernatur enim a quod, temporibus aperiam libero blanditiis id accusantium quos inventore odit quisquam cum dolores incidunt voluptatibus commodi placeat tenetur. Doloribus quaerat nobis esse voluptatem laborum! Debitis, ducimus est!
                Nihil itaque et incidunt error iure nisi recusandae in modi, dignissimos adipisci alias, soluta commodi placeat, optio facere? Possimus culpa nobis magni dolorum tenetur asperiores perferendis nulla commodi consequuntur numquam!</p>
            </div>

        </div>

    </section>
    <!-- about us section ends  -->

    <section class="contact" id="contact">
        <h3 class="heading">contact us</h3>
        <div class="contact-us">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.76045465108!2d-0.06676858580885042!3d5.602362734740607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf87b94ab35aef%3A0xe78258ef60380127!2sGraceland%20sports%20complex!5e0!3m2!1sen!2sgh!4v1638364231509!5m2!1sen!2sgh"  allowfullscreen="" loading="lazy"></iframe>

            <form action="#">
                <input type="text" class="form-box" placeholder="enter your fullname" required>
                <input type="email" class="form-box" placeholder="enter your email" required>
                <input type="number" class="form-box" placeholder="enter your number" required>
                <textarea class="form-box" placeholder="message" cols="30" rows="10"></textarea>
                <input type="button" class="btn" value="send">
            </form>

        </div>
    </section>

<!-- footer starts  -->
<section class="footer">
            <div class="footer-container">

                <div class="footer-item">
                    <a href="#"><img src="./Img/logo.png" class="logo"></a>

                    <div class="social-media">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-youtube-square"></i></a>
                    </div>
                </div>

                <div class="footer-item">
                    <h3>programs</h3>
                    <p><i class="fas fa-arrow-right"></i>air survey</p>
                    <p><i class="fas fa-arrow-right"></i>real estate</p>
                    <p><i class="fas fa-arrow-right"></i>sports event</p>
                    <p><i class="fas fa-arrow-right"></i>golf flyeover</p>
                    <p><i class="fas fa-arrow-right"></i>search & rescue</p>
                    <p><i class="fas fa-arrow-right"></i>arial advertising</p>
                    <p><i class="fas fa-arrow-right"></i>special Occassion</p>
                </div>

                <div class="footer-item">
                    <h3>Bookings</h3>
                    <p><i class="fas fa-phone"></i>+233-244-0000 | +233-244-0011</p>
                    <p><i class="fas fa-at"></i>admin@trulander.com</p>
                </div>

                <div class="footer-item">
                    <h3>open hours</h3>
                    <p>monday to friday</p>
                    <p class="bold-it">8:00-19:00 GMT</p>
                    <p>saturday & sunday</p>
                    <p class="bold-it">10:00-19:00 GMT</p>
                </div>

            </div>

            <div class="copyright">

                copyright &copy; surnmai <span id="year"> </span>. all rights reserved

            </div>

        </section>
    <!-- footer ends -->
    
    <!-- back to top button  -->
    <a href="#" class="backTotop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- back to top ends -->

    <!-- swiper Js  -->
    <!-- <script src="./swiperJs.js"></script> -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom Js  -->
    <script src="./main.js"></script>

</body>
</html>
