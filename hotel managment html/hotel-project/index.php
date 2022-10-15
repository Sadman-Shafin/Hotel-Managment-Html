<?php
 include("connection.php");
 error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&family=Open+Sans:ital,wght@0,400;0,600;0,800;1,600&family=Oswald:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css ?v=<?php echo time()?>">

    <title>Hotel Infinity Inn</title>


</head>

<body>
    <!--header ares start-->
    <header class="header">
        <div class="container">
            <div class="menu_area">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="logo_img">
                            <img src="image/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="logo">
                            <a href="">Infinity Inn</a>
                        </div>
                    </div>
                </div>

                <nav class="nav">
                    <ul class="main-menu">
                        <li><a href="">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Log In</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--header area end-->
    <!--banner area start-->
    <div class="banner">

        <div class="banner_overlay">
            <div class="container">
                <div class="banner_content">
                    <h2>Infinity Inn</h2>
                    <p>Stay with friends and family</p>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    <!--room reservation area start-->
    <div class="reservation">
        <a href="login.php">
            <h3>Room reservation</h3>
        </a>
    </div>
    <!--room reservation area end-->
    <!--service area start-->
    <section class="service">
        <div class="container">
            <div class="service_heading">
                <P class="servive_text1">Experience a good stay enjoy fantastic opffers</P>
                <p>Find our friendly welcoming recerption</p>
            </div>


            <div class="service_main">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="icon text-center">
                            <img src="image/breakfast.png" alt="">
                        </div>
                        <div class="content text-center">
                            <h6>Breakfast</h6>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="icon text-center">
                            <img src="image/parking.png" alt="">
                        </div>
                        <div class="content text-center">
                            <h6>Free Parking</h6>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="icon text-center">
                            <img src="image/wifi.png" alt="">
                        </div>
                        <div class="content text-center">
                            <h6>Free WIfi</h6>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="icon text-center">
                            <img src="image/reading.png" alt="">
                        </div>
                        <div class="content text-center">
                            <h6>Free Newspaper</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service area end-->
    <!--GALERY area start-->
    <section id="gallery">
        <div class="container">
            <div class="section_heading text-center">
                <h2>Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="gallery_small">
                        <img src="image/bed-1846251_1920.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. Deluxe Couple</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳1750
                                    a night</p>
                            </div>

                        </div>
                    </div>
                    <div class="gallery_big">
                        <img src="image/bed-4416515_1920.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. Deluxe Family (4 Bed)</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳2050
                                    a night</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_big mb_20">
                        <img src="image/eco_twin_AC.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A.
                                    Eco Twin A/C</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳2500
                                    a night</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_small ">
                        <img src="image/standerd_twin_ac.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. Standard Twin A/C</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳2850
                                    a night</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_small mb_20">
                        <img src="image/sigle1ac.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. A/C Single</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳1500
                                    a night</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_big">
                        <img src="image/accouple.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A.
                                    A/C Couple</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳1850
                                    a night</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery_big mb_20">
                        <img src="image/singleac.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. A/C Single</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳2050
                                    a night</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_small ">
                        <img src="image/eco_twin_AC.jpg" class="w-100" alt="">
                        <div class="gallery_overlay">
                            <div class="col-lg-8">
                                <h5>A. Eco_twin_A/C Couple</h5>
                            </div>
                            <div class="col-lg-4">
                                <p>৳2550
                                    a night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GALERYarea end-->
    <!--team area start-->
    
        <section id="team">
           <div class="container">
            <div class="team_heading text-center">
                <h2>Meet Our team</h2>
            </div>
            <div class="team_footer text-center">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team_area">
                            <div class="team_img">
                                <img src="image/team-1.jpg" alt="">
                                <div class="team_overlay">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="team_content">
                                <h4> <b>John kandy</b> </h4>
                                <p>CEO and founder</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team_area">
                            <div class="team_img">
                                <img src="image/team2.jpg" alt="">
                                <div class="team_overlay">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_content">
                                <h4> <b>Jesam Tom</b> </h4>
                                <p>CO-founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team_area">
                            <div class="team_img">
                                <img src="image/team3.jpg" alt="">
                                <div class="team_overlay">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_content">
                                <h4> <b>Mari Saman</b> </h4>
                                <p>HR Manager</p>
                            </div>
                        </div>
                    </div>

        </section>

        <!--    team area ends-->
        <!--    about area start-->
        <section id="about">
            <div class="container">
                <div class="section_heading text-center">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-5"><img src="image/about.png" class="w-100" alt=""></div>
                    <div class="col-lg-7">
                        <div class="about_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--   about  area ends-->
    <!--   footer  area start-->
    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="f_logo mb_30">
                                <img src="image/logo.png" alt="">
                            </div>
                            <div class="f_about">
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit, sed do eiumod apor incididunt ut labore et dolore magna aliqua.</p>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="f_heading mb_30">
                                <h6>Contact us</h6>
                            </div>
                            <div class="row mb-15">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center mb_15">
                                    <div class="f_icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 mb_15">
                                    <div class="phone">
                                        <a href="tel:+334 9876 2354">+334 9876 2354</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center mb_15">
                                    <div class="f_icon">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 mb_15">
                                    <div class="phone">
                                        <a href="www.facebook.com">www.facebook.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center mb_15">
                                    <div class="f_icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 mb_15">
                                    <div class="phone">
                                        <a href="www.twitter.com">www.twitter.com</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="f_heading mb_30">
                        <h6>Photos</h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/accouple.jpg" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/bed-4416515_1920.jpg" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/hotel-room-1261900_1920.jpg" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/singleac.jpg" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/washroom.jpg" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="footer_gly">
                                <img src="image/standerd_twin_ac.jpg" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--   footer  area ends-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js,-lg then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
