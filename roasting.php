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
        <a href="roasting.php" target="_self"><h2 style="color: #e9bcf1">Roasting <b>| </b> </h2> </a>
    </li>

    <li>
        <a href="merch.php" target="_self"><h2>Merchandise</h2> </a>
    </li>


</ul>

<section class="section-beverages-all">

    <div class="grid-layout-roasting">

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Dark-Roast-Espresso-Dolce..jpg">

            <div class="gallery-item-color">
                <h2>Espresso Dolce</h2>
                <p>₫310,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Dark-Roast-Viennese-Blend..jpg">

            <div class="gallery-item-color">
                <h2>Viennese Blend</h2>
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Dark-Roast-Windsor-Court-Blend..jpg">

            <div class="gallery-item-color">
                <h2>Windsor Court Blend</h2>
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Dark-Roast-French-Roast..jpg">

            <div class="gallery-item-color">
                <h2>French Toast</h2>
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Flavored-Roast-English-Toffee.jpg">

            <div class="gallery-item-color">
                <h2>English Toffee</h2>
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Flavored-Roast-Southern-Pecan.jpg">

            <div class="gallery-item-color">
                <h2>Southern Pecan</h2>
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Flavored-Roast-Hazelnut.jpg">

            <div class="gallery-item-color">
                <h2>Hazelnut</h2>
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Decaf-Decaf-Viennese-Blend..jpg">

            <div class="gallery-item-color">
                <h2>Decaf Viennese Blend</h2>
                <p>₫369,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Medium-Roast-Anniversary-Blend.jpg">

            <div class="gallery-item-color">
                <h2>Anniversary Blend</h2>
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Medium-Roast-Sumatra-Mandheling.jpg">

            <div class="gallery-item-color">
                <h2>Sumatra Mandheling</h2>
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Medium-Roast-Colombia-Supremo.jpg">

            <div class="gallery-item-color">
                <h2>Colombia Supremo</h2>
                <p>₫319,000</p>
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
