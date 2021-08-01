<body>
<?php session_start(); ?>
<!-- company tag--->
<section>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-4 col-4">

            </div>
            <div class="col-md-8 col-8">
                <a href="#"><img src="images/Comp-1-00003.gif" style="
    width: 100%;
    height: 75px;
"></a>
            </div>
        </div>
    </div>
</section>
<br>
<!-- content box --->
<section class="sticky-top">

    <nav class="navbar navbar-expand-md navbar-dark bg-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">RANKINGS </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">OVERALL STATS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="advertise.php">ADVERTISE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about-us.php">ABOUT US</a>
                </li>
                <?php if (isset($_SESSION["is_login_user"]) && $_SESSION["is_login_user"] == 1){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="userpanel.php">PROFILE</a>
                    </li>
                <?php } else{?>
                    <li class="nav-item active">
                        <a class="nav-link" href="userlogin.php">REGISTRATION & LOGIN</a>
                    </li>
                <?php }?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</section>