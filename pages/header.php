<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<!-- Start Members-->
<?php include('navlogin.php'); ?>
<!-- End Members -->
<?php

} else {
?>
<!-- Start Guest -->
<?php include('navlogout.php'); ?>
<!-- End Guest -->
<?php
};?>
