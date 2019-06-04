<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da" xmlns="http://www.w3.org/1999/html">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>PJ's Coffee Vietnam - fresh coffee beans from America</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,Granita,iced,coffee,">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="PJ's Coffee Vietnam -
    fresh coffee beans from America" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/" >

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

<!-- CASPER HAVELYKKE LARSEN -->
<section class="slideshow-index">

    <div class="videoSlideshowcontainer">

        <div class="videoSlideshow fade">

            <div class="videoSlideNumbertext">1 / 2</div>

            <div class="responsive-video">
                <img alt="PJ's Coffee's Granitas are made with lots
                of love and affection" src="images/granita-index-2.jpg">
            </div>

            <div class="videoSlideText">
                <h1 style="color:#6a2976">You Know You <br> Want It!</h1>
                <br>
                <button>Check out our Granitas</button>
            </div>

        </div>

        <div class="videoSlideshow fade">

            <div class="videoSlideNumbertext">2 / 2</div>

            <div class="responsive-video">
                <img alt="Plastic straws are bad for the envirionment.
                    at PJ's Coffee we work to reduce the use of them
                    and ofther plastics" src="images/stop-plastic-straws.jpg">
            </div>

            <div class="videoSlideText">
                <h1 style="color:White">Why you should stop
                    using plastic straws today!</h1>
                <br>
                <p>Read our blog and help keep the
                    environment clean</p>
                <button>Read it Now</button>
            </div>

        </div>

        <a class="forrige" onclick="plusSlides(-1)">&#10094;</a>
        <a class="naeste" onclick="plusSlides(1)">&#10095;</a>

    </div>

</section>
<!-- CASPER HAVELYKKE LARSEN SLUT -->


<!-- SARAH HOFMANN -->
<section class="video">


        <div class="videooverskrift">
            <h1>From Farm To Cup</h1>
        </div>

        <div class="videovideo">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uQyQyxbaBUU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

</section>


<section class="newsletter">




    <div class="newsoverskrift">
        <h1 style="color: white">Subscribe!</h1>
    </div>

    <div class="newstext">
        <p style="color: #6a2976">For more news about the type of beans that makes the best coffee in town (according to our self and all our happy customers) and more information about how we save the planet. Enter your email below
            <br> <br> <p style="color: #6a2976">And do not worry, you will not be spammed.</p>
    </div>

    <div class="newsform">

        <form><input type="email" name="fname" placeholder="Please Enter Your Email Here">

            </input> </form>


    </div>

    <button class="newsknap"><p style="color: white">Join The Club</p> </button>

</section>







<section class="indexgalleri">

    <div class="indexgallerioverskrift">
        <h1>Brewed Coffee And Good Conscience</h1>
    </div>

    <div class="indexgalleriogtext">

        <div class="indexbilleder">

            <div class="indexbillederoverst">
                <img alt="PJ's Coffees Cold Brew Iced Coffee" src="images/kaffe.jpg">
                <img alt="PJ's Coffees Macchiato" src="images/maccatio.jpg">
            </div>

            <div class="indexbilledernederst">
                <img alt="PJ's Coffees Cappucino" src="images/capppocino.jpg">
                <img alt="PJ's Coffees Chocolate Milk" src="images/kakao.jpg">
            </div>


        </div>

        <div class="indexgalleritext">


            <div class="indexgalleritext1">
                <p>
                    Cappuccino, Latte Macchiato, Black Coffee or Decaf? Checkout our wide range of quality, sustainable products. And maybe you will find your own favorite.
                </p>
                <br>
            </div>



            <button class="indexgalleriknap">


                <a href="products.php"><p style="color: white">Check It Out</p></a>
            </button>

            <br>

            <div class="indexgalleritext2">
                <p>PSSSSST! You can also find a selection of sustainable merchandise. </p>
            </div>
            <br>

        </div>

    </div>

</section>

<!-- SARAH HOFMANN SLUT -->



<?php
    require("php/footer.php")
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- CASPER HAVELYKKE LARSEN -->
<script>

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("videoSlideshow");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "grid";
    }


$(document).ready(function(e) {
    // Din kode her




    $(".newsknap").click(function(){
        alert("Thanks For Joining The Club");
    });





});
</script>

</body>
</html>
