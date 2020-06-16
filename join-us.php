<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact - Samaj Seva Bharati Paschimbanga</title>
    <meta name="description"
        content="Samaj Seva Bharati, established in 2002, is an accredited non-governmental organization which has been devoted to various types of social activities in Bengal mainly in the field of education, health, women empowerment, social and economic development for the underprivileged population.">
    <meta name="author" content="admin">
    <meta name="keywords"
        content="samaj seva, samajsevabharati, bharati,help,donate,amphan, covid-19, social service, donation,Paschimbanga,Paschimbangal, west bengal, kolkata">
    <meta name="subject" content="Helping the underprivileged">
    <meta name="copyright" content="samajsevabharatipb.org">
    <meta name="url" content="https://samajsevabharatipb.org">
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="6Yrf5Prqji-GZyAa38FJF84uxiP_LI-HlTQ16bW4AXw" />
    <!-- when website is shared on facebook -->
    <meta name="og:title" content="Samaj Seva Bharati Paschimbanga" />
    <meta name="og:type" content="NGO" />
    <meta name="og:url" content="https://samajsevabharatipb.org" />
    <meta property="og:image" content="https://samajsevabharatipb.org/assets/img/logo/1.png">
    <meta name="og:site_name" content="Samaj Seva Bharati Paschimbanga" />
    <meta name="og:description"
        content="Samaj Seva Bharati, established in 2002, is an accredited non-governmental organization which has been devoted to various types of social activities in Bengal mainly in the field of education, health, women empowerment, social and economic development for the underprivileged population." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require("Utils/head-metadata.php"); ?>


</head>

<body>
    <?php  
    require("Utils/header.php"); 
    ?>
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-150 pb-155" style="background-image:url(assets/img/bg/bg-16.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Join Us</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.php">home</a></li>
                                <li><span>Join Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->



        <!-- contact-area-start -->
        <div class="contact-area pt-125 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                        <div class="section-title text-center mr-40 ml-40 mb-75">
                            <span><i class="far fa-heart-circle"></i> Get in touch</span>
                            <h1>Join Us</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <form id="contacts-us-form" method="POST" class="contacts-us-form"
                            action="https://smaj-seva-bharati.000webhostapp.com/send-mail.php">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="contacts-icon contactss-name">
                                        <input type="text" placeholder="Your Name.... " name="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contacts-icon contactss-email">
                                        <input type="email" placeholder="Your Email...." name="Email">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-12">
                                    <div class="contacts-icon contactss-website">
                                        <input type="text" placeholder="Subject...." name="Email">
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="contacts-icon contactss-message">
                                        <textarea id="comments" cols="30" rows="10" placeholder="Your Message...."
                                            name="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contacts-us-form-button text-center">
                                        <button class="btn">
                                            send <i class="far fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-area-end -->


    </main>




    <?php
     require("Utils/footer.php"); 
    require("Utils/footer-js.php");
    ?>

</body>


</html>