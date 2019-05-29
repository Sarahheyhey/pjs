<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!-- Titel, description og keywords skal være forskellige på alle undersider -->

    <meta property="og:title" content="titel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.domain.dk">
    <meta property="og:image" content="https://www.domain.dk/img.jpg">
    <meta property="og:description" content="Beskrivelse">
    <meta property="og:locale" content="da_DK">


    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php")
?>

<h1>Our Menu</h1>

<ul class="aboutfaner">


    <li>
        <a href="drinks.php" target="_self"><h2>Drinks <b>|</b> </h2> </a>
    </li>

    <li>
        <a href="food.php" target="_self"> <h2>Food <b>| </b>  </h2> </a>
    </li>

    <li>
        <a href="roasting.php" target="_self"><h2>Roasting <b>| </b> </h2> </a>
    </li>

    <li>
        <a href="merch.php" target="_self"><h2 style="color: #e9bcf1">Merchandise </h2> </a>
    </li>




</ul>


<section class="section-beverages-all">

    <div class="grid-layout-merch">

        <div class="gallery-item gallery-2-item-3">
            <img src="images/merch-umbrella.jpg">

            <div class="gallery-item-color">
                <h2>PJ's Umbrella</h2>
                <p>₫495,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-3">
            <img src="images/merch-KeepCup.jpg">

            <div class="gallery-item-color">
                <h2>PJ' KeepCup</h2>
                <p>₫450,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-3">
            <img src="images/merch-bamboo-straw.jpg">

            <div class="gallery-item-color">
                <h2>Bamboo Straw</h2>
                <p>₫50,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-3">
            <img src="images/merch-glass-bottle.jpg">

            <div class="gallery-item-color">
                <h2>Glass Bottle</h2>
                <p>₫400,000</p>
            </div>
        </div>

    </div>

</section>


<?php
require ("php/footer.php")
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        // Din kode her
    });
</script>
</body>
</html>
