<!-- SARAH HOFMANN -->

<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Careers - PJ's Coffee Vietnam</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="PJ's Coffee Vietnam">
    <meta name="copyright" content="Copyright PJ's Coffee Vietnam">
    <meta name="description" content="Try our signature drink in
    PJS's Coffee Vietnam. The Granita, an ice cold drink with a
    crystaline texture. The perfect blend of coffee and ice.">
    <meta name="keywords" content="PJs,PJ,Coffee,Vietnam,careers,iced,coffee,">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon der vises i fanen på browseren -->
    <link rel="icon" href="images/favicon-logo.jpg">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <!-- Navn på googles søgningsliste -->
    <meta property="og:title" content="Careers - PJ's Coffee Vietnam" >

    <meta property="og:type" content="website" >

    <meta property="og:url" content="https://pjscoffeevietnam.com/aboutuscareers.php" >

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

<section class="carrers">

    <div class="aboutoverskrift">
        <h1>
            About Us
        </h1>

    </div>

    <ul class="aboutfaner">

        <li>
            <a href="aboutushistory.php" target="_self"> <h2> History <b>| </b>  </h2> </a>
        </li>

        <li>
            <a href="aboutusbeans.php" target="_self"><h2>Beans <b>| </b> </h2> </a>
        </li>

        <li>
            <a href="aboutuscareers.php" target="_self"><h2 style="color: #e9bcf1">Careers</h2> </a>
        </li>


    </ul>

<div class="carrerstext">
    <p style="color: #666666">
        Working in PJ’s Coffee isn’t just a job, it’s an
        opportunity unlike any other. <br> <br> Here you
        will have the opportunity to work with coffee
        experts and experienced baristas. <br>  We have
        some of the most advanced equipment and the staff
        to teach you how to use it.
    </p>
</div>




<div class="carrerindhod">


    <div class="carreroverst">


        <div class="carrers1indhold">

            <div class="carrers1billede"> <img alt="Work at PJ's Coffee" src="images/pjsjob1.jpg"></div>


            <div class="carrers1titl">
                <h2 style="color: white"> Operations Manager  </h2>
            </div>

            <div class="carrers1beskriv">
                <p style="color: white"> Full-time / PJ's Coffee
                    Vietnam </p>
            </div>

            <div class="jobknap">

                <button class="carrersknap" type="button">
                    <a href="https://www.trginternational.com/who-we-are/careers/vacancies/operations-manager-pjs-coffee-vietnam/?slelect_job=42"> <b> Apply Now </b> </a>
                </button>

            </div>


        </div>



        <div class="carrers2indhold">

            <div class="carrers2billede">
                <img alt="Work at PJ's Coffee" src="images/pjsjob2.jpg"></div>




            <div class="carrers2titl">
                <h2 style="color: white"> Barista  </h2>
            </div>

            <div class="carrers2beskriv">
                <p style="color: white"> Full-time / PJ's Coffee Vietnam </p>
            </div>

            <div class="jobknap">

                <button class="carrersknap" type="button">
                    <a href="https://www.trginternational.com/who-we-are/careers/vacancies/barista-pjs-coffee-vietnam/?select_job=43"> <b> Apply Now </b> </a>
                </button>

            </div>
        </div>
    </div>



    <div class="carrernederst">




        <div class="carrers3indhold">

            <div class="carrers3billede">
                <img alt="Work at PJ's Coffee" src="images/pjsjob3.jpg"></div>




            <div class="carrers3titl">
                <h2 style="color: white"> Assistant Store Manager </h2>
            </div>

            <br><br>

            <div class="carrers3beskriv">
                <p style="color: white"> Full-time / PJ's Coffee Vietnam </p>
            </div>

            <div class="jobknap">

                <button class="carrersknap" type="button">
                    <a href="https://www.trginternational.com/who-we-are/careers/vacancies/assistant-store-manager/?select_job=44"> <b> Apply Now </b> </a>
                </button>

            </div>


        </div>



        <div class="carrers1indhold">

            <div class="carrers1billede">
                <img alt="Work at PJ's Coffee" src="images/pjsjob4.jpg"></div>




            <div class="carrers1titl">
                <h2 style="color: white"> Shift Supervisor/ Leader </h2>
            </div>

            <div class="carrers1beskriv">
                <p style="color: white"> Full-time / PJ's Coffee Vietnam </p>
            </div>

            <div class="jobknap">

                <button class="carrersknap" type="button">
                    <a href="https://www.trginternational.com/who-we-are/careers/vacancies/shift-leader-supervisor/?select_job=45"> <b> Apply Now </b> </a>
                </button>

            </div>


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
