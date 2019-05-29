<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
<meta charset="utf-8">

<!-- Titel som ses oppe i browserens tab mv. -->
<title>Pj's Coffee Vietnam - Top 1% coffee beans</title>

<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
<meta name="robots" content="All">
<meta name="author" content="Udgiver">
<meta name="copyright" content="Information om copyright">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="titel" >

<meta property="og:type" content="website" >

<meta property="og:url" content="http://www.domain.dk" >

<meta property="og:image" content="https://www.domain.dk/img.jpg" >

<meta property="og:description" content="Beskrivelse" >

<meta property="og:locale" content="da_DK" >

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
    require("php/header.php")
?>


<div class="indexcontent">

    <section class="video">

        <div class="videoindhold">

            <div class="videooverskrift">
                <h1>From Farm To Cup</h1>
            </div>

            <div class="videovideo">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uQyQyxbaBUU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

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




    <div class="indexgallerioverskrift">
        <h1>Breved Coffee And Good Conscience</h1>
    </div>


    <section class="indexgalleri">


        <div class="indexbilleder">

            <div class="indexbillederoverst">
                <img src="images/kaffe.jpg">
                <img src="images/maccatio.jpg">
            </div>

            <div class="indexbilledernederst">
                <img src="images/capppocino.jpg">
                <img src="images/kakao.jpg">
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

 </section>


</div>


<?php

    require("php/footer.php")

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her

    $("button").click(function(){
        alert("Thanks For Joining The Club");
    });

});
</script>

</body>
</html>
