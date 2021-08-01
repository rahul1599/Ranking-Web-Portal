<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_name'])) {
    header("Location: {$hostname}/userlogin.php");
}
?>

<?php include 'linkheader_inc.php';?>

<section class="page-title" style="background-image: url(images/user-panel.jpg);">
    <div class="auto-container">
        <div class="content">
            <h1>User Profile</h1>
            <ul class="page-breadcrumb">
                <li class=""><a href="index.php">Home</a></li>
                <li style="letter-spacing: 2px;">&#62&#62Profile</li>
            </ul>
        </div>
    </div>
</section>

<section class="post-content-section">
    <section class="post-content-section">
        <div class="container-fluid">

            <div class="row" style="padding-left: 40px; padding-top: 17px;">
                <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <section>
                        <!-- ===================================== php code ===================================== -->
                        <?php

                        $sql = "SELECT `user_id`, `name`, `email`, `address`, `phone_no`, `url`, `web_tittle`, `web_description`, `web_pic` FROM `all-user` WHERE  `user_name` = '{$_SESSION['user_name']}'";
                        $result = mysqli_query($conn,$sql) or die("Query Failed");

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="row">
                                    <div class="colmd-5 col-sm-5">
                                        <div class="card shadow" >
                                            <img src="images/profilep.jpg" class="img-fluid" alt="website">
                                            <img src="upload/<?php echo $row['web_pic']; ?>" class="rounded-circle profile-img" alt="website">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card Tittle</h5>
                                                <p class="card-text">Some quick example text to build on the card tittle and make up the bulk of the card's content.</p>
                                            </div>
                                            <div class="card-header profile-menu ">
                                                <span><a href="#Timeline">Timeline</a></span>
                                            </div>
                                            <div class="card-header profile-menu mt-3">
                                                <span><a href="#website">website details</a></span>
                                            </div>
                                            <div class="card-header profile-menu mt-3">
                                                <span><a href="payment.php">Payment</a></span>
                                            </div>
                                            <div class="card-header profile-menu mt-3">
                                                <span><a href="logout.php">Logout</a></span>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="Timeline" class="colmd-7 col-sm-7">
                                        <div class="card-body">
                                            <p class="card-title profile-header">Timeline</p>
                                            <hr>
                                            <p class="profile-description">User Information</p>
                                            <ul class="about">
                                                <li class="about-items">
                                                    <i class="fas fa-user"></i>
                                                    <span class="about-item-name">Full Name:</span>
                                                    <span class="about-item-detail"><?php echo $row["name"]; ?></span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fas fa-home"></i>
                                                    <span class="about-item-name">Address:</span>
                                                    <span class="about-item-detail"><?php echo $row["address"]; ?> </span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fas fa-envelope-square"></i>
                                                    <span class="about-item-name">Email :</span>
                                                    <span class="about-item-detail"><?php echo $row["email"]; ?></span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <span class="about-item-name">Phone No :</span>
                                                    <span class="about-item-detail"><?php echo $row["phone_no"]; ?></span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fas fa-portrait"></i>
                                                    <span class="about-item-name">Web Pic :</span>
                                                    <span class="about-item-detail"><?php echo $row['web_pic']; ?></span>
                                                </li>
                                            </ul>
                                            <div class="profile-button">
                                                <button class="btn-lg btn-secondary"><a href="update-userdetails.php"> Edit profile</a> </button>
                                            </div>
                                        </div>
                                        <div  class="card-body">
                                            <p id="website" class="card-title profile-header">Website Details</p>
                                            <hr>
                                            <p class="profile-description">User Website</p>
                                            <ul class="about">
                                                <li class="about-items">
                                                    <i class="fab fa-firefox"></i>
                                                    <span class="about-item-name">Https://URL: </span>
                                                    <span class="about-item-detail"> <?php echo $row['url']; ?></span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fab fa-chrome"></i>
                                                    <span class="about-item-name">Web Tittle:</span>
                                                    <span class="about-item-detail"> <?php echo $row['web_tittle']; ?></span>
                                                </li>
                                                <li class="about-items">
                                                    <i class="fas fa-window-maximize"></i>
                                                    <span class="about-item-name">Web Description:</span>
                                                    <span class="about-item-detail"> <?php echo $row['web_description']; ?></span>
                                                </li>
                                            </ul>
                                            <div class="profile-button">
                                                <button class="btn-lg btn-secondary"><a href="#">Add More</a> </button>
                                            </div>
                                            <hr>
                                        </div>

                                    </div>
                                </div>
                                <!-- ===================================== php code ===================================== -->
                                <?php
                            }
                        }
                        ?>
                    </section>
                </div>

                <div class="col-lg-3  col-md-3 col-sm-12 ">
                    <?php include 'sidebar_inc.php';?>
                </div>
            </div>
        </div> <!-- /container -->
    </section>
</section>

<?php include 'footer_inc.php';?>
