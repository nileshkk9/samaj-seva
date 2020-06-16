<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Samaj Seva Bharati Paschimbanga</title>
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
    <meta name="og:image" content="https://samajsevabharatipb.org/assets/img/logo/1.png">
    <meta name="og:site_name" content="Samaj Seva Bharati Paschimbanga" />
    <meta name="og:description"
        content="Samaj Seva Bharati, established in 2002, is an accredited non-governmental organization which has been devoted to various types of social activities in Bengal mainly in the field of education, health, women empowerment, social and economic development for the underprivileged population." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require("Utils/head-metadata.php"); ?>
</head>



<body>

    <div id="wrap">
        <div class="loader"></div>
    </div>
    <?php  
    require("Utils/header.php"); 
    ?>
    <main>


        <?php  
        require("Utils/slider.php");
        require("Utils/feature-area.php");
        // require("Utils/service-area.php"); 
        // require("Utils/case-area.php");
        require("Utils/aboutus-area.php");
        // require("Utils/counter-area.php");
         
        require("Utils/counter-area-green.php"); 
        
        // require("Utils/cta-area.php");
        // require("Utils/video-area.php");
        // require("Utils/testimonial.php");
        // require("Utils/promotect.php");
        // require("Utils/news-letter.php");
        // require("Utils/blog-area.php");
        // require("Utils/brand-area.php");
        ?>

        <!-- video area -->
        <!-- testimonial -->
        <!-- promotect -->
        <!-- news letter -->
        <!-- blog area -->
        <!-- brand area -->
    </main>




    <?php
    
    require("Utils/footer.php"); 
    require("Utils/footer-js.php");
    ?>
    <script>
    $(window).load(function() {
        $("main").hide();
        $("header").hide();
        $("footer").hide();
        // Animate loader off screen
        setTimeout(() => {
            $(".loader").fadeOut("slow");
            $("#wrap").fadeOut("slow");
            $("main").show();
            $("header").show();
            $("footer").show();

        }, 1000);

    });
    </script>


</body>


</html>