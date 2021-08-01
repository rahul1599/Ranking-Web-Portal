<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
?>

<?php include 'header.php';?>
<?php include 'sidebar.php';?>

        <h1>Components</h1>
        <!--===== MAIN JS =====-->
<?php include 'footer.php';?>      