<!-- CASPER HAVELYKKE LARSEN -->


<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Events - PJ's Coffee Vietnam</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,events,iced,coffee,">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="Events - PJ's Coffee Vietnam" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/events.php" >

    <meta property="og:image" content="https://pjscoffeevietnam.com/logo.png" >

    <!-- Beskrivelse på Googles søgningsliste -->
    <meta property="og:description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice." >

    <meta property="og:locale" content="en_US" >

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php")
?>


<section>

<h1>Events</h1>


<ul class="aboutfaner">

    <li>
        <a href="blog.php"><h2>Blogs <b> |</b></h2> </a>
    </li>

    <li>
        <a href="events.php" target="_self"><h2 style="color: #e9bcf1">Events</h2></a>
    </li>



</ul>


<div class="timeline">


    <ul>
        <li>
            <div class="content">
                <div class="image-container">
                    <img alt="Fun-run with TRG Internation and PJ's Coffee" src="images/charity-fun-run.jpg">
                </div>
                <h2>
                    BBGV HCM 18th Fun Run For Charity
                </h2>
                <h3>Sep 25, 2018</h3>
                <p>The British Business Group Vietnam (BBGV) proudly announces that the BBGV HCM 18th Fun Run for Charity (Fun Run) will take place on Sunday 30 September 2018. Since its inception, we have proudly raised over 10 billion VND for charities across Vietnam. Over the years,...</p>
            </div>
        </li>
        <li>
            <div class="content">
                <div class="image-container">
                    <img alt="Challenge against plastic pollution" src="images/weeks-challenges-plastic.jpg">
                </div>
                <h2>
                    3210 Challenge – 3 Weeks, 21 Challenges, 0 Plastic
                </h2>
                <h3> Jul 4, 2018</h3>
                <p>1/Introducing the “3210” challenge Plastic pollution is a critical global issue, especially in recent years, with approximately 8.8 million ton of plastic waste dumped into the ocean every year. Currently, there are 5.25 thousand billion pieces of plastic waste in the...</p>
            </div>
        </li>
        <li>
            <div class="content">
                <div class="image-container">
                    <img alt="Sustainable living with PJ's Coffee" src="images/greenliving.jpg">
                </div>
                <h2>
                    Change for sustainable living with PJ’s Coffee at Go-Green Day 2018
                </h2>
                <h3>Jun 5, 2018</h3>
                <p>On June 3, PJ’s Coffee Vietnam had the opportunity to participate in the “Go-green Day”. The event attracted many local Saigonese participants, particularly the younger generation, because of its meaningful message: “Let’s build a green life”.</p>
            </div>
        </li>
        <li>
            <div class="content">
                <h2>
                    TRG Talk: Project Management with IPMAV
                </h2>
                <h3>Apr 28, 2017</h3>
                <p>PJ’s Coffee Sala is proud to coordinate with TRG International and SEA Management Consulting Company to host the event: TRG Talk: Project Management with IPMAV   Project Management is all around us and is part and parcel of normal working life. Getting things...</p>
            </div>
        </li>
        <li>
            <div class="content">
                <h2>
                    TRG Talk: Talent – The Vision & Expectations of CEOs for HR in the next 5 years
                </h2>
                <p>Apr 17, 2017</p>
                <p>PJ’s Coffee Sala is proud to host the "TRG Talk: Talent - The Vision & Expectations of CEOs for HR in the next 5 years" on 24 April 2017 Many organizational HR people have been long bothered by endless questions by their C-level management regarding the employee...</p>
            </div>
        </li>
        <li>
            <div class="content">
                <h2>
                    TRG TALK: OFFICE 365 API
                </h2>
                <h3>Apr 10, 2017</h3>
                <p>PJ’s Coffee Sala is proud to host the TRG Talk: Office 365 API #6 on Friday, 26 May 2017 You can create custom solutions that access and interact with all the richness of a user’s Office 365 data—and you can build those solutions across all mobile, web, and desktop...</p>
            </div>
        </li>
        <li>
            <div class="content">
                <h2>
                    TRG TALK: Microsoft Application Lifecycle Management
                </h2>
                <h3>Apr 10, 2017</h3>
                <p>PJ’s Coffee Sala is proud to host the TRG Talk: Microsoft Application Lifecycle Management #5 on Friday, 12 May 2017 Learn to use Visual Studio, Visual Studio Team Services, Application Insights and Team Foundation Server to decrease rework, increase transparency into...</p>
                </div>
        </li>
    </ul>
</div>

</section>

<?php
require ("php/footer.php")
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

    /* Check the location of each element */
    $('.content').each( function(i){

        var bottom_of_object= $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).height();

        if( bottom_of_object > bottom_of_window){
            $(this).addClass('hidden');
        }
    });


    $(window).scroll( function(){
        /* Check the location of each element hidden */
        $('.hidden').each( function(i){

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fadeIn it */
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},700);
            }
        });
    });

</script>
</body>
</html>
