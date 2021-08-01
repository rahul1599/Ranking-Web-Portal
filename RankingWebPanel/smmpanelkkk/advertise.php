<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>

<style>
    header{
        background-image: linear-gradient(to bottom,rgba(0,136,220,0.8),
        rgba(174,67,7,0.5)),url(images/backgroundclients.jpg);
    }

    .pattern:before {
        position: absolute;
        content: '';
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: url(images/pattern-1.png) left top no-repeat;
    }
    .pattern:after {
        position: relative;
        content: '';
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background: url(images/pattern-2.png) left top no-repeat;
    }
</style>

<section class="page-title"
         style="background-image: url(images/user-panel.jpg);">
    <div class="auto-container">
        <div class="content">
            <h1> <span>Advertise</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>&#62pages</li>
                <li style="letter-spacing: 2px;">&#62&#62Advertise</li>
            </ul>
        </div>
    </div>
</section>

<!-- heading of advertisement -->

<header>
    <div class="advertise">
        <h1>SMM advertise <span>panel</span></h1>
        <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore</p>
        <a href="">Read more</a>
    </div>
</header>
<!-- heading of advertisement end -->
<br>



<!-- pricing counter section -->
<section>
    <div class="pricing-area">
        <div class="container ">
            <div class="row ">
                <!-- basic plan -->
                <div class="col-lg-4 col-md-6 pattern ">
                    <div class="single-pricing">
                        <div class="head-text">
                            <h3>Basic</h3>
                        </div>
                        <div class="price-area">
                            $11 <span class="duration">per day</span>
                        </div>
                        <div class="feature-area">
                            <ul>
                                <li>pramote website</li>
                                <li>to trafficless website</li>
                                <li>SEO optimazation</li>
                                <li>advertise your website</li>
                                <li>safe and secure</li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>
                <!-- standard plan -->
                <div class="col-lg-4 col-md-6 pattern">
                    <div class="single-pricing best-deal">
                        <div class="label-area">
                            <span>popular</span>
                        </div>
                        <div class="head-text">
                            <h3>standard</h3>
                        </div>
                        <div class="price-area ">
                            $30 <span class="duration">per month</span>
                        </div>
                        <div class="feature-area">
                            <ul>
                                <li>pramote website</li>
                                <li>to trafficless website</li>
                                <li>SEO optimazation</li>
                                <li>advertise your website</li>
                                <li>safe and secure</li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>
                <!-- professional plan -->
                <div class="col-lg-4 col-md-6  pattern">
                    <div class="single-pricing">
                        <div class="head-text">
                            <h3>profenssional</h3>
                        </div>
                        <div class="price-area">
                            $505 <span class="duration">per year</span>
                        </div>
                        <div class="feature-area">
                            <ul>
                                <li>pramote website</li>
                                <li>to trafficless website</li>
                                <li>SEO optimazation</li>
                                <li>advertise your website</li>
                                <li>safe and secure</li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a href="#">choose plan</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- upload advertise section  -->
<section></section>
<br>
<?php include 'footer_inc.php';?>
