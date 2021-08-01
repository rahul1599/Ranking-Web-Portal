<?php
include "config.php";
session_start();
if(isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/arman.php");
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->

    <style>
        html,body{
            /*background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');*/
            background-color: white;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container{
            height: 100%;
            align-content: center;
        }
        .card-header
        {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card{
            height: auto;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;

        }
        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

        }
        .login_btn{
            color: black;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color:#6AFB92;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <img class="logo" src="img/logo.jpg">
            <div class="card-header">
                <center><h1 style="color:#fff;">Admin</h1></center>
            </div>
            <div class="card-body">
                <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="">
                    </div><br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="">
                    </div><br>
                    <div class="form-group">
                        <input type="submit" name="Login"  class="btn float-left login_btn btn-warning" value="Login">
                    </div><br>
                </form>
                <!-- Form End -->
                <?php
                if(isset($_POST['Login'])){
                    include "config.php";
                    if(empty($_POST['username']) || empty($_POST['password'])){
                        echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                        die();
                    }else{
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $password = md5($_POST['password']);

                        $sql = "SELECT user_id, username FROM user WHERE username = '{$username}' AND password= '{$password}'";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");

                        if(mysqli_num_rows($result) > 0){

                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION["username"] = $row['username'];
                                $_SESSION["user_id"] = $row['user_id'];

                                header("Location: {$hostname}/admin/arman.php");
                            }
                        }else{
                            echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

