<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>

<style>
    .review-img{
        background-image: url(images/website.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<section class="post-content-section">
    <section class="post-content-section">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
                </div>
                <div  class="col-lg-12 col-md-9 col-sm-12">
                    <!--input registration section --->
                    <section>
                        <div class="registration-form">
                            <div class="container registration">
                                <div class="rg-tittle">Registration</div>
                                <!-- ======================================= Php code Start  ====================================== -->
                                <?php
                                include 'config.php';
                                $up_id = $_SESSION["user_id"];
                                /* query record for modify*/
                                $sql = "SELECT * FROM `all-user` WHERE `user_id`='{$up_id}'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                <form action="save-update-userdetails.php" method="POST" enctype="multipart/form-data">
                                    <div class="rg-details">
                                        <div class="rg-input">
                                            <span class="details">Full name</span>
                                            <input type="text" name="up_name" value="<?php echo $row['name'] ?>" required>
                                        </div>
                                        <div class="rg-input">
                                            <span class="details">Address</span>
                                            <input type="text" name="up_address" value="<?php echo $row['address'] ?>" required>
                                        </div>
                                        <div class="rg-input">
                                            <span class="details">Phone-no:</span>
                                            <input type="number" name="up_phone_no" value="<?php echo $row['phone_no'] ?>" autocomplete="off" required>
                                        </div>
                                        <div class="rg-input">
                                            <span class="details">Web-Tittle</span>
                                            <input type="text" name="up_web_tittle" value="<?php echo $row['web_tittle'] ?>" required>
                                        </div>
                                        <div class="rg-input">
                                            <span class="details">Web-Description</span>
                                            <input type="text" name="up_web_description" value="<?php echo $row['web_description'] ?>" required>
                                        </div>
                                        <div class="rg-input">
                                            <span class="details">Web Pic</span>
                                            <input type="file" name="up_fileToUpload" class="form-control">
                                            <input type="hidden" name="old_fileToUpload" value="<?php echo $row['web_pic']; ?>" >
                                        </div>

                                        <div class="rg-button">
                                            <input type="submit" name="submit" value="Update">
                                        </div>
                                        <a href="userpanel.php"><div class="cancel-button">
                                                <input type="submit" value="Cancel">
                                            </div></a>
                                    </div>
                                </form>
                            </div>

                            <?php } } ?>

                            <!-- ============================== All Php code  End  Here ============================== -->
                        </div>
                    </section>
                </div>
            </div>

            <div class="col-lg-3  col-md-3 col-sm-12 ">

            </div>
        </div>
        <!-- /container -->
    </section>
</section>


<?php include 'footer_inc.php';?>
