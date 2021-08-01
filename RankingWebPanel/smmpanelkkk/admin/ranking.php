<?php
include "config.php";
session_start();

if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
}
?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Browse All SMM Panels in One Place - Rankings - All Sites</title>
<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dZEJcYT.png">
<!--bootstrap.css------>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--- link style .css--->
<link rel="stylesheet" type="text/css" href="../css/table.css">

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Products</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-product.php">add product</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                    <th>S.No.</th>
                    <th>Product-Name</th>
                    <th>current-price</th>
                    <th>Image-1</th>
                    <th>Image-2</th>
                    <th>Image-3</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class='id'>1</td>
                        <td>hello</td>
                        <td>world</td>
                        <td>say</td>
                        <td>something</td>
                        <td>new</td>
                        <td class='edit'><a href=""><i class='fa fa-edit'></i></a></td>
                        <td class='delete'><a href=""><i class="fa fa-trash-alt"></i></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

<?php include 'footer.php'; ?>
