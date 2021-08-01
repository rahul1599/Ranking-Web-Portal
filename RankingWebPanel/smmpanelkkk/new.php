<?php
include 'config.php';
$sql = "SELECT `amount` FROM `payment` WHERE `name`='Rahul'";
$res = mysqli_query($conn,$sql) or die("Failed");
$total = 0;
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)){

        $ress = $row['amount'];
        $total = $total + $ress;

    }
    echo $total;
}
$sql = "UPDATE `all-user` SET `amount`='{$total}' WHERE `name`='aman'";
if ($sql) {
    echo "Data Updated.";
}
?>
