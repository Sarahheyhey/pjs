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

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div id="worldmap"></div>
        </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="dist/jquery.twism.js"></script>
<script>
    $(document).ready(function() {
        $('#worldmap').twism("create",
            {
                map: "world",
                color: "#cecece",
                border: "none",
                hoverColor: "none",
                hoverBorder: "none",
                backgroundColor: "none",
                disableCountries: ['ar', 'cn', 'ca'],
                individualCountrySettings: [{
                    name: "co",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "gt",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "hn",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "br",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "et",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "id",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }, {
                    name: "pg",
                    color: "#6a2976",
                    hoverColor: "#e9bcf1"
                }]
            }, function() {
                //callback function after map loads
                $('#worldmap').twism("setCountry", {
                    name: "ca",
                    color: "#cecece",
                    hoverColor: "#cecece",
                    hoverBorder: "none",
                });
            });
    });
</script>

</body>
</html>
