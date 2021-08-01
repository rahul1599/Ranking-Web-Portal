<?php
   include 'config.php';
  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin");
  }
?>
        <script src="../js/main.js"></script>
    </body>
</html>