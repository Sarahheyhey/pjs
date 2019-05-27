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


</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
    require ("php/header.php")
?>

<h1>Our Menu</h1>

<ul class="aboutfaner">

    <li>
        <a href="drinks.php" target="_self"><h2 style="color: #e9bcf1">Drinks<b>| </b> </h2> </a>
    </li>

    <li>
        <a href="food.php" target="_self"> <h2>Food <b>| </b>  </h2> </a>
    </li>

    <li>
        <a href="roasting.php" target="_self"><h2>Roasting <b>|</b> </h2> </a>
    </li>

    <li>
        <a href="merch.php" target="_self"><h2>Merchandise</h2> </a>
    </li>


</ul>

<section class="section-coffee-hot">

    <h1 class="menu-sektions-overskrifter">Coffee Hot</h1>

    <div class="grid-layout">

        <div class="gallery-item gallery-item-1">
            <img src="images/Cafe-au-lait.jpg">

            <div class="gallery-item-color">
                <h2>Cafe au Lait</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-2">
            <img src="images/Cappuccino.jpg">

            <div class="gallery-item-color">
                <h2>Cappuccino</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-3">
            <img src="images/Espresso.jpg">

            <div class="gallery-item-color">
                <h2>Espresso<br></h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-4">
            <img src="images/Hot-brew.jpg">

            <div class="gallery-item-color">
                <h2>Americano</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-5">
            <img src="images/Hot-Caramel-Creme.jpg">

            <div class="gallery-item-color">
                <h2>Hot Caramel Creme</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-6">
            <img src="images/Hot-Vienna-Creme.jpg">

            <div class="gallery-item-color">
                <h2>Hot Vienna Creme</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-7">
            <img src="images/Macchiato.jpg">

            <div class="gallery-item-color">
                <h2>Macchiato</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-8">
            <img src="images/cafe-lattejpg.jpg">

            <div class="gallery-item-color">
                <h2>Cafe Latte</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-item-9">
            <img src="images/Hot-brew.jpg">

            <div class="gallery-item-color">
                <h2>Hot Brew</h2>
                <p>₫54,000</p>
            </div>
        </div>

    </div>

</section>

<section class="section-coffee-cold">

</section>

<section class="section-drinks">

</section>

<?php
    require ("php/footer.php")
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her
});
</script>

</body>
</html>
