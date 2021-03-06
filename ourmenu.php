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
<meta name="description" content="Try our signature drink in
PJS's Coffee Vietnam. The Granita, an ice cold drink with a
crystaline texture. The perfect blend of coffee and ice.">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">

<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
<link href="css/styles.css" rel="stylesheet" type="text/css">

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

<h1>Our Menu</h1>

<a href="drinks.php">Drinks</a>

<a href="food.php">Food</a>

<a href="roasting.php">Roasting</a>

<a href="merch.php">Merchandise</a>

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
