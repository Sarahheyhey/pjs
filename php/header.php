
<header>

    <div class="logo-mobile">
        <a href="index.php"><img src="images/pjs_logo_mobile.png"></a>
    </div>

    <div class="logo-web">
        <a href="index.php"><img src="images/logo.png"></a>
    </div>


    <nav>

        <label for="drop" class="toggle">
            <img src="images/Burger.png" alt="menu">
        </label>

        <input type="checkbox" id="drop" />

        <ul class="menu">

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="aboutushistory.php">About Us</a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="ourmenu.php">Our Menu</a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="blogevents.php">Blog & Events</a>
            </li>
        </ul>
    </nav>


    <div class="header-menu">

        <h2><a href="ourmenu.php">Our Menu</a></h2>

        <h2><a href="aboutushistory.php">About Us</a></h2>

        <h2><a href="blogevents.php">Blog & Events</a></h2>

    </div>

    <div class="sprog-header">
        <a href="#"><img src="images/en.png"></a>
        <a href="#"><img src="images/vi.png"></a>
    </div>

</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('.toggle').click(function () {
        $('.menu').toggle("slow")
    })
</script>