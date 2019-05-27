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

<section class="aboutContainer">

    <div class="aboutoverskrift">
        <h1>
            About Us
        </h1>

    </div>

         <ul class="aboutfaner">

           <li>
               <a href="aboutushistory.php" target="_self"> <h2 style="color: #e9bcf1">History <b>| </b>  </h2> </a>
           </li>

            <li>
            <a href="aboutusbeans.php" target="_self"><h2>Beans <b>| </b> </h2> </a>
            </li>

            <li>
            <a href="aboutuscareers.php" target="_self"><h2>Careers</h2> </a>
            </li>


        </ul>

        <div class="aboutindhold">


            <div class="about1">


                <div class="aboutone">

                    <div class="about1overskrift">

                        <h2>
                            The Founder Of It All
                        </h2>

                    </div>



                    <div class="about1text">

                        <p>
                            The“PJ” in our name stands for Phyllis Jordan, our founder who opened her first coffee house over three decades ago in New Orleans, USA.  She’s a pioneers of sustainable coffee – her idea was to create unique coffee blends and roast the beans in small batches. <br> <br> The same way we still do it today in our roasting facility in the US.
                        </p>

                    </div>

                </div>

                <div class="about1billede">

                    <img src="images/kvindemobil.jpg"</div>
            </div>


        </div>




                <div class="aboutindhold2">



                    <div class="abottwo">


                        <div class="about2overskrift">

                            <h2>
                                History of the Roast
                            </h2>

                        </div>


                        <div class="about2text">

                            <p>
                                New Orleans, Louisiana is the home of PJ’s Coffee. Coffee first arrived in 1720 when French Explorers introduced it to the city. <br> <br> Today, one third of all the coffee in North America arrives first on the docks of the Crescent City.  New Orleans is the coffee capital of the USA and the largest coffee roasting plant in the world is located there

                            </p>

                        </div>

                    </div>

                    <div class="about2billedemobile">
                        <img src="images/menneskermobil.jpg">
                    </div>

                </div>




        <div class="aboutindhold3">

            <div class="abouttree">

                <div class="about3overskrift">

                    <h2>
                        Quality Coffee
                    </h2>

                </div>

                <div class="about3text">

                    <p>
                        Since 1978, well before the coffee craze, the first PJ’s coffee opened on Maple Street. Ever since, PJ’s has been mastering the art of roasting every bean to bring out its unique aroma and flavor. <br> <br> Early on customers sought out coffee they knew had been roasted by hand in small batches.

                    </p>

                </div>

            </div>


            <div class="about3billede">
                <img src="images/kaffeplantemobile.jpg">
            </div>
        </div>




        <div class="aboutindhold4">



             <div class="aboutfour">


                 <div class="about4overskrift">

                     <h2>
                         Pj´s Coffee vietnam
                     </h2>

                 </div>


                 <div class="about4text">

                     <p>
                         Rick Yvanovich being an expat, grew a love of Vietnamese coffee. <br> <br> He  thought that the quality and styles of international coffee coming into Viet Nam, were not the greatest and while they might be trendy, they did not match Vietnamese “tastes” or educate the Vietnamese consumer about coffee or create a unique coffee experience. <br> <br>

                         New Orleans has a hot and sticky climate that is similar to Vietnam, a history, culture and gastronomy that are French inspired. Where we today mix Vietnamese, American and French roast to create a unique coffee experience for you.

                     </p>


                 </div>
             </div>


            <div class="about4billede">
                <img src="images/rickmobile.jpg"
            </div>


        </div>







</section>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    // Din kode her
});
</script>

</body>
</html>
