<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_name'])) {
    header("Location: {$hostname}/userlogin.php");
}
?>

<?php
if(isset($_POST['submit'])) {
    include "config.php";
    $file_name = $_FILES['up_fileToUpload']['name'];
    $old_image = $_POST['old_fileToUpload'];

    // About Old Image 1
    if($file_name != ''){
        $new_fileToUpload = $file_name;
    }else{
        $new_fileToUpload = $old_image;
    }
    $target_dir = "upload/";
    $target_file = $target_dir . basename($new_fileToUpload);
    move_uploaded_file($_FILES["up_fileToUpload"]["tmp_name"], $target_file);
    $up_id = $_SESSION["user_id"];
    $up_name = $_POST['up_name'];
    $up_address = $_POST['up_address'];
    $up_phone_no = $_POST['up_phone_no'];
    $up_web_tittle = $_POST['up_web_tittle'];
    $up_web_description = $_POST['up_web_description'];

    /* query for update category table */
    $sql = "UPDATE `all-user` SET `name`='{$up_name}',`address`='{$up_address}',`phone_no`='{$up_phone_no}',`web_tittle`='{$up_web_tittle}',`web_description`='{$up_web_description}',`web_pic`='{$new_fileToUpload}' WHERE `user_id`='{$up_id}'";
    //print_r($sql); die();

    $res = mysqli_query($conn, $sql) or die("Data not update.");
    if ($res){
        // redirect all category page
        header("location: {$hostname}/userpanel.php");
    }
}
?>
