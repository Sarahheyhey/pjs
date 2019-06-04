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
    <title>Food - PJ's Coffee Vietnam</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,food,iced,coffee,">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="Food - PJ's Coffee Vietnam" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/food.php" >

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

<h1>Our Menu</h1>

<ul class="aboutfaner">

    <li>
        <a href="drinks.php" target="_self">Drinks <b>| </b></a>
    </li>

    <li>
        <a href="food.php" style="color: #e9bcf1" target="_self">Food <b>| </b></a>
    </li>

    <li>
        <a href="roasting.php" target="_self">Roasting <b>|</b></a>
    </li>

    <li>
        <a href="merch.php" target="_self">Merchandise </a>
    </li>


</ul>


<section class="section-beverages-all">

    <div class="grid-layout-food">

        <div class="gallery-item gallery-2-item-3">
            <img alt="PJ's Coffee's Choco Swirl Cheesecake" src="images/Choco-swirl-cheesecake.jpg">

            <div class="gallery-item-color">
                <h2>Choco Swirl Cheesecake</h2>
                <p>₫65,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Brownie" src="images/Brownie.jpg">

            <div class="gallery-item-color">
                <h2>Brownie</h2>
                <p>₫65,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-2">


        </div>

        <div class="gallery-item gallery-2-item-2">


        </div>

        <div class="gallery-item gallery-2-item-1 Hot-brew">
            <img alt="PJ's Coffee's New Orleans Pudding" src="images/New-Orleans-Bread-Pudding.jpg">

            <div class="gallery-item-color">
                <h2>New Orleans Bread Pudding</h2>
                <p>₫45,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Hot-Caramel-Creme">
            <img alt="PJ's Coffee's Tiramisu" src="images/Tiramisu.jpg">

            <div class="gallery-item-color">
                <h2>Tiramisu</h2>
                <p>₫60,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Passion Mousse" src="images/Passion-Mousse.jpg">

            <div class="gallery-item-color">
                <h2>Passion Mousse</h2>
                <p>₫60,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 apple-Strawberry-Mint">
            <img alt="PJ's Coffee's Ham, Cheese & Egg Muffin" src="images/Muffin.jpg">

            <div class="gallery-item-color">
                <h2>Ham, Chesse & Egg Muffin</h2>
                <p>₫50,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1 Macchiato">
            <img alt="PJ's Coffee's Meatloaf Panini" src="images/Meatloaf.jpg">

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
