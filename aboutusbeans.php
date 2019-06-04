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
    <title>About our beans - PJ's Coffee Vietnam</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,beans,iced,coffee,">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="About our beans - PJ's Coffee Vietnam" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/aboutusbeans.php" >

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
            <p>PJ’s Coffee of New Orleans experts travel around
                the world to learn as much as they can about the
                quality of coffee they buy. No detail is too small
                to be considered, from farming methods to climate
                and cloud coverage.
            </p>
        </div>

        <div class="beans2text">
            <h2 style="color: #3e2516"> Click on the map to get the info! </h2>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div id="worldmap"></div>
            </div>
        </div>
    </div>

</section>




<?php
require ("php/footer.php")
?>


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
                disableCountries: ['ar', 'cn', 'ca', 'in'],
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
                    hoverBorder: "none"
                    });

            });
    });



  </script>
</body>
</html>
