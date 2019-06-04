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
    <title>Roasting - PJ's Coffee Vietnam</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,roast,iced,roasting">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="Roasting - PJ's Coffee Vietnam" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/roast.php" >

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
        <a href="drinks.php" target="_self">Drinks <b>|</b></a>
    </li>

    <li>
        <a href="food.php" target="_self">Food <b>| </b></a>
    </li>

    <li>
        <a href="roasting.php" style="color: #e9bcf1" target="_self">Roasting <b>| </b></a>
    </li>

    <li>
        <a href="merch.php" target="_self">Merchandise</a>
    </li>


</ul>

<section class="section-beverages-all">

    <div class="grid-layout-roasting">

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Dark Roast Espresso Dolce" src="images/Dark-Roast-Espresso-Dolce..jpg">

            <div class="gallery-item-color">
                <p>₫310,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Dark Roast Viennese Blend" src="images/Dark-Roast-Viennese-Blend..jpg">

            <div class="gallery-item-color">
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Dark Roast Windsor Court Blend" src="images/Dark-Roast-Windsor-Court-Blend..jpg">

            <div class="gallery-item-color">
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Dark Roast French Roast" src="images/Dark-Roast-French-Roast..jpg">

            <div class="gallery-item-color">
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Flavored Roast English Toffee" src="images/Flavored-Roast-English-Toffee.jpg">

            <div class="gallery-item-color">
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Flavored Roast Southern Pecan" src="images/Flavored-Roast-Southern-Pecan.jpg">

            <div class="gallery-item-color">
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Flavored Roast Hazelnut" src="images/Flavored-Roast-Hazelnut.jpg">

            <div class="gallery-item-color">
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Decaf Viennese Blend" src="images/Decaf-Decaf-Viennese-Blend..jpg">

            <div class="gallery-item-color">
                <p>₫369,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Medium Roast Anniversary Blend" src="images/Medium-Roast-Anniversary-Blend.jpg">

            <div class="gallery-item-color">
                <p>₫319,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Medium Roast Sumatra Mandheling" src="images/Medium-Roast-Sumatra-Mandheling.jpg">

            <div class="gallery-item-color">
                <p>₫359,000</p>
            </div>
        </div>

        <div class="gallery-item gallery-2-item-1">
            <img alt="PJ's Coffee's Medium Roast Colombia Supremo" src="images/Medium-Roast-Colombia-Supremo.jpg">

            <div class="gallery-item-color">
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
