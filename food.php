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
        <a href="drinks.php" target="_self"> <h2>Drinks <b>| </b>  </h2> </a>
    </li>

    <li>
        <a href="food.php" target="_self"><h2 style="color: #e9bcf1">Food <b>| </b> </h2> </a>
    </li>

    <li>
        <a href="roasting.php" target="_self"><h2>Roasting <b>|</b> </h2> </a>
    </li>

    <li>
        <a href="merch.php" target="_self"><h2>Merchandise</h2> </a>
    </li>


</ul>


<section class="section-beverages-all">

    <div class="grid-layout-food">

        <div class="gallery-item gallery-2-item-3">
            <img src="images/Choco-swirl-cheesecake.jpg">

            <div class="gallery-item-color">
                <h2>Choco Swirl Cheesecake</h2>
                <p>₫65,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Brownie.jpg">

            <div class="gallery-item-color">
                <h2>Brownie</h2>
                <p>₫65,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Hot-brew">
            <img src="images/New-Orleans-Bread-Pudding.jpg">

            <div class="gallery-item-color">
                <h2>New Orleans Bread Pudding</h2>
                <p>₫45,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Hot-Caramel-Creme">
            <img src="images/Tiramisu.jpg">

            <div class="gallery-item-color">
                <h2>Tiramisu</h2>
                <p>₫60,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Passion-Mousse.jpg">

            <div class="gallery-item-color">
                <h2>Passion Mousse</h2>
                <p>₫60,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 apple-Strawberry-Mint">
            <img src="images/Muffin.jpg">

            <div class="gallery-item-color">
                <h2>Ham, Chesse & Egg Muffin</h2>
                <p>₫50,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Macchiato">
            <img src="images/Meatloaf.jpg">

            <div class="gallery-item-color">
                <h2>Meatloaf Panini</h2>
                <p>₫65,000</p>
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
