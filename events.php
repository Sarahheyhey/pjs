<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Events</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!-- Titel, description og keywords skal være forskellige på alle undersider -->

    <meta property="og:title" content="titel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.domain.dk">
    <meta property="og:image" content="https://www.domain.dk/img.jpg">
    <meta property="og:description" content="Beskrivelse">
    <meta property="og:locale" content="da_DK">


    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/timeline.min.css" rel="stylesheet">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/header.php")
?>

<div class="kalender">
    <a name="target_kalender"></a>

    <h1>Kalender</h1>

    <div class="kalender_kalender">
        <div class="timeline">
            <div class="timeline__wrap">
                <div class="timeline__items">
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>13. juni</h2>
                            <p>Afdelingsmøde / training.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>August</h2>
                            <p>Sommerfest og valgforsamling
                                (endnu ikke fastsat dato).</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>8. august</h2>
                            <p>Afdelingsmøde / Den gyldne mikrofon</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>12. september</h2>
                            <p>Afdelingsmøde / virksomhedbesøg</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>10. oktober</h2>
                            <p>Afdelingsmøde / åbent arrangement</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>9. november</h2>
                            <p>Awardsaften</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>14. november</h2>
                            <p>Afdelingsmøde / Snak så de'batter</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <h2>12. december</h2>
                            <p>Afdelingsmøde / hygge + brainstorm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

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
