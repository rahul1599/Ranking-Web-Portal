<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_name'])) {
    header("Location: {$hostname}/userlogin.php");
}
?>

<?php include 'linkheader_inc.php';?>
<?php include 'linkheader_inc.php';?>
<section class="page-title" style="background-image: url(images/user-panel.jpg);">
    <div class="auto-container">
        <div class="content">
            <h1>Payment For Rank</h1>
            <ul class="page-breadcrumb">
                <li><a href="userpanel.php" style="color: #ec0000;">Back</a></li>
                <li style="letter-spacing: 2px;">&#62&#62PayMent</li>
            </ul>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!--

<form action="">
<div class="">
  <div class="col">
    <input type="text" class="form-control" id="name" placeholder="First name" aria-label="First name">
  </div><br>

  <div class="col">
    <input type="text" class="form-control"  id="email" placeholder="Email" aria-label="email">
  </div><br>
  <div class="col">
    <input type="number" class="form-control" id="amt" placeholder="amount" aria-label="amount">
  </div>

		  <div >
		      <input type="button" name="" id="btn" value="Pay Now" onclick="pay_now()"></input>
		  </div>
</div>
</form>
-->

<!-------- checkout js----------->
<style>
    .contact{
        background-image: url(images/6.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width: 100%;
        height: 100vh;
    }
</style>

<!-- payment section  start ---->
<section class="contact">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div  class="col-lg-12">
                                <div class="contact-head text-center text-white py-3">
                                    <h3>Payment For Rank</h3>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <form>
                                <div class="form-row my-5">
                                    <div class="col-lg-6">
                                        <input type="text" class="effect-1" id="name" placeholder="Name" aria-label="name" value="<?php echo $_SESSION["user"]['name'] ?>">
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="effect-1" id="email" placeholder="Email" aria-label="email" value="<?php echo $_SESSION["user"]['email'] ?>">
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="effect-1" id="package" aria-label="package">
                                            <?php
                                            $sql = "SELECT * FROM `package`";
                                            $package = mysqli_query($conn,$sql) or die("Query Failed");

                                            if (mysqli_num_rows($package) > 0) {
                                                while ($row = mysqli_fetch_assoc($package)) {
                                                    ?>
                                                    <option value="<?php echo $row['id'].','.$row['price'] ?>"><?php echo $row['package_name'] ?></option>
                                                <?php }
                                            }?>
                                        </select>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>

                                <div class="form-row pt-4">
                                    <div class="col-lg-6">
                                        <p><input type="checkbox" name="">&nbsp&nbsp i m not a robot</p>
                                    </div>
                                    <div class=" offset-2 col-lg-4">
                                        <input type="button" name="" class="btn1" id="btn" value="Pay Now" onclick="pay_now()"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function pay_now() {
        var name=jQuery('#name').val();
        var email=jQuery('#email').val();

        var package = jQuery('#package').val();
        var packageArr = package.split(','); // split string on comma space
        var package_id = packageArr[0];
        var amt = packageArr[1];

        var options = {
            "key": "rzp_test_HObkbzCBmsZ62s",
            "amount": amt*100,
            "currency": "INR",
            "name": "Smm Panel",
            "description": "Test Transaction",
            "image": "https://image.shutterstock.com/image-vector/fast-shopping-logo-design-stock-260nw-1262110969.jpg",

            "handler": function (response)
            {
                jQuery.ajax({
                    type: 'post',
                    url:  'payment_process.php',
                    data: "payment_id="+response.razorpay_payment_id+"&package_id="+package_id+"&amt="+amt+"&name="+name+"&email="+email,
                    success: function(result)
                    {
                        window.location.href="thankyou.php";
                    }
                });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>
<!-------- checkout js----------->