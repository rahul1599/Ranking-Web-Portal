<?php
  include "config.php";
  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/styles.css">

        <title>Sidebar menu responsive</title>
    </head>
    <body id="body-pd">