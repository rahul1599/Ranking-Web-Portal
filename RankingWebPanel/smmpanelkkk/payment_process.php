<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_name'])) {
	header("Location: {$hostname}/userlogin.php");
}


if (isset($_POST['payment_id']) && isset($_POST['amt'])  && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['url'])) {

	$payment_id=$_POST['payment_id'];
	$user_id=$_SESSION["user_id"];
	$package_id=$_POST['package_id'];
	$amt=$_POST['amt'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$payment_status="completed";
	$added_on=date('Y-m-d h:i:s');
	$monthFromToday = date("Y-m-d", strtotime("+1 month", strtotime(date("Y/m/d"))));

	mysqli_query($conn ,"insert into payment(name, email, user_id, package_id, amount, url, payment_status, payment_id, added_on) values('$name', '$email', '$user_id', '$package_id', '$amt','$url','$payment_status', '$payment_id', '$added_on')");

	
	mysqli_query($conn ,"update `all-user` set package_id = '$package_id', package_expire ='". $monthFromToday ."' where user_id = '$user_id'");
}
?>



