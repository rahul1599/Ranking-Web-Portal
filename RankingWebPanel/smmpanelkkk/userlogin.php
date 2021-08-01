

<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>

<style>
    .box-image{
        background: url(images/website.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<section class="post-content-section">
    <section class="post-content-section">
        <div class="container-fluid">

            <div class="row" style="padding-left: 40px; padding-top: 17px;">
                <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12" >

                    <section>
                        <?php
                        if(isset($_POST['submit'])){
                            include "config.php";
                            if(empty($_POST['user_name']) || empty($_POST['password'])){
                                echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                            }else{
                                $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
                                $password = md5($_POST['password']);
                                $sql = "SELECT * FROM `all-user` WHERE `user_name` = '{$user_name}' AND `password` = '{$password}'";
                                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                                //echo $result; die();
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        session_start();
                                        $_SESSION["user"] = $row;
                                        $_SESSION["user_name"] = $row['user_name'];
                                        $_SESSION["user_id"] = $row['user_id'];
                                        $_SESSION["is_login_user"] = 1;

                                        header("Location: {$hostname}/userpanel.php");
                                    }
                                }else{
                                    echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                                }
                            }
                        }
                        ?>
                        <div class="row box-image">
                            <form class="box" action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
                                <h1>login</h1>
                                <input type="varchar" name="user_name" placeholder="username" autocomplete="off">
                                <input type="password" name="password" placeholder="password" autocomplete="off">
                                <input type="submit" name="submit" value="login">
                                <h5><a href="#" class="text-light">Forgot password ?</a></h5>
                                <element class="text-light" >Don't have account <span><a href="registration.php">&nbspRegister here !</a></span></element>
                            </form>
                        </div>
                    </section>
                    <br>
                    <section>
                        <h5 class="instruction">Requirements for Smm panel</h5>
                        <p></p>
                        <ul class="listu">
                            <li>1. Social Media Marketing panel is a website where people buy Services.</li>
                            <li>2. boost their social media accounts followers, post's likes and views in a very cheap price. </li>
                            <li>3. We can also say that an SMM Panel is a wholesale .</li>
                            <li>4. website for many retailers who sell these services on their website for a very huge price.</li>
                        </ul>
                    </section>
                    <br>
                    <!-- count section  -->
                    <section class="counter-section" style="background-image:url(images/6.jpg);width: 109%;margin-left: -54px;">
                        <div class="auto-container">
                            <!-- Fact Counter -->
                            <div class="fact-counter style-three">
                                <div class="row clearfix">
                                    <!--Column-->
                                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                            <div class="icon-box">
                                                <span class="fas fa-rocket"></span>
                                            </div>
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="1500ms" data-stop="790">790</span>+
                                                <div class="counter-title">Finishing Projects</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                            <div class="icon-box">
                                                <span class="fas fa-network-wired"></span>
                                            </div>
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="2000" data-stop="45">45</span>
                                                <div class="counter-title">Team Member</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                                            <div class="icon-box">
                                                <span class="fas fa-handshake"></span>
                                            </div>
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="2000" data-stop="850">850</span>+
                                                <div class="counter-title">Happy Clienta</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft animated" data-wow-delay="900ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInLeft;">
                                            <div class="icon-box">
                                                <span class="fas fa-stopwatch"></span>
                                            </div>
                                            <div class="count-outer count-box counted">
                                                <span class="count-text" data-speed="1500" data-stop="13">13</span>+
                                                <div class="counter-title">Years Experience</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- review  Section Four -->
                    <section class="about-section-four">
                        <div class="auto-container">
                            <!-- Sec Title Three -->
                            <div class="sec-title-three">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="title">Intro</div>
                                        <h2>About us</h2>
                                    </div>
                                    <div class="pull-right">
                                        <div class="text">we are always up & running. Looking for a new SMM Panel? Sign-Up today and Pay for Quality. All services work. Grow Your Accounts Now. Enhance Audience Growth. Best SMM Services and content creation. Our immaculate service has made us a name to reckon with.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <!-- Content Column -->
                                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-1"><img src="images/about_new.jpg" alt=""></div>

                                    </div>
                                </div>
                                <!-- Skills Column -->
                                <div class="skills-column col-lg-7 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="row clearfix">
                                            <!-- Services Block Thirteen -->
                                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span  class="fas fa-headset"></span>
                                                    </div>
                                                    <h5>24/7 full <br> online support</h5>
                                                </div>
                                            </div>
                                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="fas fa-audio-description"></span>
                                                    </div>
                                                    <h5>Creative <br>live add</h5>
                                                </div>
                                            </div>
                                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span  class="fas fa-database"></span>
                                                    </div>
                                                    <h5>Rank your<br> Website</h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-3  col-md-3 col-sm-12 ">
                    <?php include 'sidebar_inc.php';?>
                </div>
            </div>
        </div> <!-- /container fluid -->
    </section>
</section>


<?php include 'footer_inc.php';?>
