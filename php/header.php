
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
                <a href="aboutushistory.php">About Us <i class="fas fa-chevron-down"></i></a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="ourmenu.php">Our Menu <i class="fas fa-chevron-down"></i></a>
            </li>

            <li>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
                <a href="blogevents.php">Blog & Events <i class="fas fa-chevron-down"></i></a>
                <hr class="menuHrLinje" noshade="noshade" style="width: 90%;">
            </li>
        </ul>
    </nav>


    <div class="header-menu">

        <h2><a href="ourmenu.php">Our Menu <i class="fas fa-chevron-down"></i></a></h2>

        <h2><a href="aboutushistory.php">About Us <i class="fas fa-chevron-down"></i></a></h2>

        <h2><a href="blogevents.php">Blog & Events <i class="fas fa-chevron-down"></i></a></h2>

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