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
        <a href="drinks.php" target="_self"><h2 style="color: #e9bcf1">Drinks <b>| </b> </h2> </a>
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



<section class="section-beverages-all">

    <div class="grid-layout-drinks">

        <div class="gallery-item gallery-2-item-3">
            <img src="images/cold-brew-iced-coffe.jpg">

            <div class="gallery-item-color">
                <h2>Cold Brew Iced Coffee</h2>
                <p>₫69,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-orange.jpg">

            <div class="gallery-item-color">
                <h2>Orange</h2>
                <p>₫64,000</p>
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
            <img src="images/Hot-brew.jpg">

            <div class="gallery-item-color">
                <h2>Hot Brew</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Hot-Caramel-Creme">
            <img src="images/Hot-Caramel-Creme.jpg">

            <div class="gallery-item-color">
                <h2>Hot Caramel Creme</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Cold-brew-iced-mocha-1.jpg">

            <div class="gallery-item-color">
                <h2>Cold Brew Iced Mocha</h2>
                <p>₫69,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 apple-Strawberry-Mint">
            <img src="images/drinks-apple-Strawberry-Mint.jpg">

            <div class="gallery-item-color">
                <h2>Apple Strawberry Mint</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Macchiato">
            <img src="images/Macchiato.jpg">

            <div class="gallery-item-color">
                <h2>Macchiato</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-blueberry-Mango-Yogurt.jpg">

            <div class="gallery-item-color">
                <h2>Blueberry Mango Yoghurt</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫47,000</p>
            </div>
        </div>
        <div class="gallery-item gallery-2-item-1">
            <img src="images/Cappuccino.jpg">

            <div class="gallery-item-color">
                <h2>Cappuccino</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/cold-mocha-velvet-ice-black.jpg">

            <div class="gallery-item-color">
                <h2>Mocha Velvet Ice</h2>
                <p>₫87,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/cafe-lattejpg.jpg">

            <div class="gallery-item-color">
                <h2>Cafe Latte</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Cafe-au-lait.jpg">

            <div class="gallery-item-color">
                <h2>Cafe Au Lait</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-peach-Lemon-Tea.jpg">

            <div class="gallery-item-color">
                <h2>Peach Lemon Tea</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-3">
            <img src="images/drinks-green-Tea-Velvet-Ice-small.jpg">

            <div class="gallery-item-color">
                <h2>Green Tea Velvet Ice</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/cold-ca-phe-sua-da.jpg">

            <div class="gallery-item-color">
                <h2>Ca Phe Sua Da</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-iced-tea-black-small.jpg">

            <div class="gallery-item-color">
                <h2>Hot/Iced Tea</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-green-Tea-Latte-small.jpg">

            <div class="gallery-item-color">
                <h2>Green Tea Latte</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Hot-brew.jpg">

            <div class="gallery-item-color">
                <h2>Americano</h2>
                <p>₫47,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Hot-Vienna-Creme.jpg">

            <div class="gallery-item-color">
                <h2>Hot Vienna Creme</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Vanilla-Velvet-Ice.jpg">

            <div class="gallery-item-color">
                <h2>Vanilla Velvet Ice</h2>
                <p>₫87,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫54,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/Espresso.jpg">

            <div class="gallery-item-color">
                <h2>Cafe Au Lait</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-watermelon.jpg">

            <div class="gallery-item-color">
                <h2>Watermelon</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-orange-Mango.jpg">

            <div class="gallery-item-color">
                <h2>Orange Mango Smoothie</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/granita-blackjpg.jpg">

            <div class="gallery-item-color">
                <h2>Granita</h2>
                <p>₫89,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-banana-apple-yogurt.jpg">

            <div class="gallery-item-color">
                <h2>Banana Apple Yoghurt</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-chocolate-milk.jpg">

            <div class="gallery-item-color">
                <h2>Chocolate Milk</h2>
                <p>₫59,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">

            <div class="gallery-item-color">
                <h2>Farve</h2>
                <p>₫39,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-green-Tea-Tropics.jpg">

            <div class="gallery-item-color">
                <h2>Green Tea Tropics</h2>
                <p>₫64,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-hot-Chocolate.jpg">

            <div class="gallery-item-color">
                <h2>Hot Chocolate</h2>
                <p>₫59,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-strawberry-banana.jpg">

            <div class="gallery-item-color">
                <h2>Strawberry Banana Yoghurt</h2>
                <p>₫74,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img src="images/drinks-lemonade.jpg">

            <div class="gallery-item-color">
                <h2>Lemonade</h2>
                <p>₫64,000</p>
            </div>
        </div>



    </div>

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
