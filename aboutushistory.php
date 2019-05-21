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

<div class="aboutContainer">

    <div class="aboutoverskrift">
        <h1>
            About Us
        </h1>
    </div>

    <ul class="aboutfaner">

        <li>

            <a href="aboutushistory.php" target="_self"> <h2>History</h2> </a>
        </li>

        <li>
            <a href="aboutusbeans.php" target="_self"><h2>Beans</h2> </a>
        </li>

        <li>
            <a href="aboutuscareers.php" target="_self"><h2>Careers</h2> </a>
        </li>


    </ul>

        <div class="aboutindhold">
            <div class="about1">

                <div class="about1overskrift">

                    <h2>
                        The Founder Of It All
                    </h2>

                </div>
                <div class="about1text">

                    <p>
                        The“PJ” in our name stands for Phyllis Jordan, our founder who opened her first coffee house over three decades ago in New Orleans, USA.  She’s a pioneers of sustainable coffee – her idea was to create unique coffee blends and roast the beans in small batches – the same way we still do it today in our roasting facility in the US.

                    </p>

                </div>
                <div class="about1billede">

                </div>
            </div>
        </div>





</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her
});
</script>

</body>
</html>
