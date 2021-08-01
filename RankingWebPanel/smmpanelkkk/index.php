<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>
<?php include "config.php"; ?>
    <style>
        .img-jumbo{
            background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(images/poster.png);
            background-repeat: no-repeat;
            background-size: 100% , 100%;
        }

        .carousel-item {
            height: 400px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.2);
        }
    </style>
    <section class="post-content-section">
        <section class="post-content-section">
            <div class="container-fluid">

                <div class="row" style="padding-left: 40px; padding-top: 17px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div>
                            <!--Professional Ranking Page-->
                            <!--<button type="button" class="btn btn-warning ribbon font-weight-bold">#1 buy tiktok followers and Likes</button>
                            <div class="jumbotron shadow img-jumbo">
                                <p class="text-center text-light text_jumbo  ">Best Site for buy cheap tiktok followers and likes or Views instantly from India. Instafaster is the Main Provider of TikTok Services. we have all type of tiktok services.<br>
                                    <small class="text-light">Category:<a href="#"> SMM Panel</a></small>
                                </p>
                                <center>
                                    <button class="btn-pre btn ">
                                        <a href="#" class="text-white" style="text-decoration: none;"> Visit</a>
                                    </button>
                                </center>
                            </div>-->

                            <?php
                            $sql = "SELECT * FROM `all-user` WHERE package_id = 3";
                            $professional = mysqli_query($conn,$sql) or die("Query Failed");
                            if (mysqli_num_rows($professional) > 0) {
                                $rows = []; //create array
                                while($professional_info=mysqli_fetch_assoc($professional)) {
                                    $rows[] = $professional_info; //assign whole values to array
                                }
                                ?>
                                <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php foreach($rows as $key => $row){?>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>" <?php if ($key == 0){?> class="active" <?php }?>></li>
                                        <?php }?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php foreach($rows as $key => $row){?>
                                            <div class="carousel-item <?php if ($key == 0){?> active <?php }?>">
                                                <button type="button" class="btn btn-warning ribbon font-weight-bold">#<?php echo $row['web_tittle'] ?></button>
                                                <img class="d-block w-100" src="upload/<?php echo $row['web_pic'] ?>" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5><?php echo $row['web_description'] ?></h5>
                                                    <button class="btn-pre btn">
                                                        <a href="<?php echo $row['url'] ?>" target="_blank" class="text-white" style="text-decoration: none;"> Visit</a>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php }?>

                            <!--Standard Ranking Page-->
                            <?php
                            $sql = "SELECT * FROM `all-user` WHERE package_id = 2";
                            $standard = mysqli_query($conn,$sql) or die("Query Failed");
                            if (mysqli_num_rows($standard) > 0) {
                                $rows = []; //create array
                                while($standard_info=mysqli_fetch_assoc($standard)) {
                                    $rows[] = $standard_info; //assign whole values to array
                                }
                                ?>
                                <section>
                                    <div class="row">
                                        <?php foreach($rows as $key => $row){?>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="card shadow " style="background: aliceblue;">
                                                    <div class="card-header p-2 bg-warning">
                                                        <h4 class="pre-tittle mt-2">#<?php echo $row['web_tittle'] ?></h4>
                                                    </div>
                                                    <img src="upload/<?php echo $row['web_pic'] ?>" class="card-img-top" alt="poster">
                                                    <div class="card-body pre-body" style="margin-bottom: -20px;">
                                                        <p class="text_jumb1">
                                                            <?php echo $row['web_description'] ?>
                                                        </p>
                                                        <button class=" btn btn-warning pull-right mb-2">
                                                            <a href="<?php echo $row['url'] ?>" class="text-dark" style="text-decoration: none;">Visit<span>&#8594</span></a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </section>
                            <?php }?>
                        </div>

                        <!--Basic Ranking Page-->
                        <?php
                        $sql = "SELECT * FROM `all-user` WHERE package_id = 1";
                        $standard = mysqli_query($conn,$sql) or die("Query Failed");
                        if (mysqli_num_rows($standard) > 0) {
                            $rows = []; //create array
                            while($standard_info=mysqli_fetch_assoc($standard)) {
                                $rows[] = $standard_info; //assign whole values to array
                            }
                            ?>
                            <div>
                                <button type="button" class="btn btn-secondary ribbon font-weight-bold mt-3">#<?php echo $row['web_tittle'] ?></button>
                                <?php foreach($rows as $key => $row){?>
                                    <div class="card shadow">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div><img src="upload/<?php echo $row['web_pic'] ?>" class="img-fluid"></div>
                                            </div>
                                            <div class="col-md-8">
                                                <div>
                                                    <p class="text-center">
                                                        <?php echo $row['web_description'] ?>
                                                    </p>
                                                    <center>
                                                        <button class=" btn btn-pre1 ">
                                                            <a href="<?php echo $row['url'] ?>" class="text-white" style="text-decoration: none;">Visit</a>
                                                        </button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-12 ">
                        <?php include 'sidebar_inc.php';?>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>
    </section>

<?php include 'footer_inc.php';?>