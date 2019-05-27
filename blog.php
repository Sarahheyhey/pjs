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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
    require ("php/header.php")
?>

<div id="blogs">

<h1>Blogs</h1>

    <ul class="aboutfaner">

        <li>
            <a href="aboutusbeans.php" target="_self"><h2 style="color: #e9bcf1">Blogs<b>|</b></h2></a>
        </li>

        <li>
            <a href="events.php"><h2>Events</h2> </a>
        </li>

    </ul>

    <div class="blogindlaeg-container">

        <div class="blogindlaeg">
            <img src="images/stop-plastic-straws.jpg">
            <h2>Why you should stop using plastic straws today!</h2>
            <h3>Jun 25, 2018 | News, Sustainable Living</h3>
            <p>When you think of a straw, you usually think of the small plastic tube that conveniently comes
                along with your drink most of the time. However, such small piece of utensil has a huge
                negative impact on the environment. Plastic is designed to last forever, but a single...</p>

            <a href="#"><button class="blog-knap"><h2>Read It Now</h2></button></a>
        </div>

        <div class="blogindlaeg">
            <img src="images/3cand6r.jpg">
            <h2>3C & 6R – PJ’s Coffee Sustainable Goals</h2>
            <h3>Jun 23, 2018 | News, Sustainable Living</h3>
            <p>As we have mentioned in our previous articles, plastic waste is a serious problem that Vietnam
                is currently facing. An alarming amount of 12.7 tons of plastic is dumped into our ocean
                every year. If we don’t come up with a solution, this figure will certainly double...</p>

            <a href="#"><button class="blog-knap"><h2>Read It Now</h2></button></a>
        </div>

        <div class="blogindlaeg">
            <img src="images/bamboo-straws-jar.jpg">
            <h2>Say “YES” to Reusable Items to Protect the Environment</h2>
            <h3>Jun 15, 2018 | News, Sustainable Living</h3>
            <p>There is a sad truth that we are living in a "throw-away society." We mass produce disposable
                products made from plastics because they are convenient and does not cost much. We change our
                smartphones, accessories, electronic items constantly and often have the...</p>

            <a href="#"><button class="blog-knap"><h2>Read It Now</h2></button></a>
        </div>

        <div class="blogindlaeg">
            <img src="images/coffee-work.jpg">
            <h2>TRG Talk: Project Management with IPMAV</h2>
            <h3> Apr 28, 2017 | Events</h3>
            <p>PJ’s Coffee Sala is proud to coordinate with TRG
                International and SEA Management Consulting Company to
                host the event: TRG Talk: Project Management with IPMAV
                Project Management is all around us and is part and
                parcel of normal working life. Getting things...</p>

            <a href="#"><button class="blog-knap"><h2>Read It Now</h2></button></a>
        </div>

        <div class="blogindlaeg">
            <img src="images/3cand6r.jpg">
            <h2>3C & 6R – PJ’s Coffee Sustainable Goals</h2>
            <h3>Jun 23, 2018 | News, Sustainable Living</h3>
            <p>As we have mentioned in our previous articles, plastic waste is a serious problem that Vietnam
                is currently facing. An alarming amount of 12.7 tons of plastic is dumped into our ocean
                every year. If we don’t come up with a solution, this figure will certainly double...</p>

            <a href="#"><button class="blog-knap"><h2>Read It Now</h2></button></a>
        </div>


    </div>

</div>

<?php
    require ("php/footer.php")
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {



});
</script>

</body>
</html>
