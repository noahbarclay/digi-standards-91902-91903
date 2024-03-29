
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/b901cbb01d.js" crossorigin="anonymous"></script>
  <link rel="icon" type="png" href="../images/logo.png">
  
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB for Carousel -->
    <link rel="stylesheet" href="../css/mdb.min.css"/>
    <!-- Carousel styles -->
    <link rel="stylesheet" href="../css/carousel_style.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">


     
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="../js/script.js"></script>

    </head>
    <!--Main Navigation-->
    <br>
    <br>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['admin'] == 1) {
?>
<!-- Start Members-->
<?php include('admin_nav_home.php'); ?>
<!-- End Members -->
<?php

} else {
?>
<!-- Start Guest -->
<?php include('nav_check.php'); ?>
<!-- End Guest -->
<?php
};?>


