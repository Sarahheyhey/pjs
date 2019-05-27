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
require("php/header.php")
?>

<section class="beanscontainer">

    <div class="aboutoverskrift">
        <h1>
            About Us
        </h1>

    </div>

    <ul class="aboutfaner">

        <li>
            <a href="aboutushistory.php" target="_self"> <h2>History <b>| </b>  </h2> </a>
        </li>

        <li>
            <a href="aboutusbeans.php" target="_self"><h2 style="color: #e9bcf1">Beans <b>| </b> </h2> </a>
        </li>

        <li>
            <a href="aboutuscareers.php" target="_self"><h2>Careers</h2> </a>
        </li>


    </ul>

    <div class="beansindhold">
        <div class="beans1text">
            <p>PJ’s Coffee of New Orleans experts travel around the world to learn as much as they can about the quality of coffee they buy. No detail is too small to be considered, from farming methods to climate and cloud coverage.
            </p>
        </div>

        <div class="beans2text">
            <h2 style="color: #3e2516"> Click on the map to get the info! </h2>
        </div>
    </div>


<div class="beansmap">

    



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
