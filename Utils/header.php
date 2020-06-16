<?php
require_once("payment-page.php");
$actual_link = "$_SERVER[REQUEST_URI]";
// get subdirectory name
$sub_directory=substr($actual_link,strpos($actual_link, '/', 1)+1,strlen($actual_link));
// echo $sub_directory;
?>

<!-- header-start -->
<header>
    <div class="header-top-area black-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-5 col-8 d-flex align-items-center">
                    <div class="header-top-wrapper">
                        <div class="header-info">
                            <span class="mail-header-icon"><i class="far fa-phone"></i>+91 9874 096 107 / +91
                                9330 599 130</span>
                            <span><i class="far fa-envelope-open"></i> <a href="#" class="__cf_email__"
                                    data-cfemail="97e4e2e7e7f8e5e3d7e5faf6fefbb9f4f8fa">samajsevabharatipb@gmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-7 col-4">
                    <div class="header-top-right">
                        <!-- <div class="header-login f-right">
                            <a href="#"><i class="far fa-user"></i> Login</a>
                        </div> -->
                        <div class="header-icon f-right d-none d-md-block">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <!-- <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-menu-area green-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2 d-flex align-items-center">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo3.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="main-menu text-center">
                        <nav id="mobile-menu">
                            <ul>
                                <li <?php if($sub_directory==='index.php') echo 'class="active"'?>><a
                                        href="index.php">home</a>
                                    <!-- <ul class="sub-menu text-left">
                                        <li><a href="index-2.html">home 1</a></li>
                                        <li><a href="index-3.html">home 2</a></li>
                                        <li><a href="index-4.html">home 3</a></li>
                                    </ul> -->
                                </li>
                                <li <?php if($sub_directory==='about-us.php') echo 'class="active"'?>><a
                                        href="about-us.php">about us</a> </li>
                                <li><a href="#">Projects <i class="far fa-angle-down"></i></a>
                                    <!-- <ul class="sub-menu text-left">
                                        <li><a href="causes-01.html">Projects 01</a></li>
                                        <li><a href="causes-02.html">Projects 02</a></li>
                                        <li><a href="causes-details.html">Projects details</a></li>
                                    </ul> -->
                                </li>

                                <!-- <li><a href="#">events <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="events.html">events</a></li>
                                        <li><a href="events-02.html">events 02</a></li>
                                        <li><a href="events-details.html">events-details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="blog-grid.html">blog <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="blog-grid.html">blog grid</a></li>
                                        <li><a href="blog-standard.html">blog standard</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li> -->
                                <li <?php if($sub_directory==='gallery.php') echo 'class="active"'?>><a
                                        href="gallery.php">Gallery</a></li>
                                <li <?php if($sub_directory==='contact.php') echo 'class="active"'?>><a
                                        href="contact.php">contact</a></li>

                                <li><a href="#">More <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="#">Activity Report 2019-2020</a>
                                        <li><a href="executive-committee.php">Executive Committee</a></li>
                                        <!-- <li><a href="">Volunteer</a></li> -->
                                        <li><a href="faq.php">FAQ</a></li>
                                        <li><a href="donate.php">Donate</a></li>
                                        <li><a href="join-us.php">Join Us</a></li>
                                        <!-- <li><a href="contact.html">contact</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="header-right">
                        <div class="header-right-info f-right d-none d-lg-block">
                            <div class="header-right-text text-right f-left">
                                <h5>Contact Us</h5>
                                <span>+91 9433 760 261</span>
                            </div>
                            <div class="heder-right-icon f-right">
                                <img src="assets/img/icon/icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-start -->