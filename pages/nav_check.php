<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
?>
<!-- Start Members-->
<?php include('navlogout.php'); ?>
<!-- End Members -->
<?php

} else {
?>
<!-- Start Guest -->
<?php include('navlogin.php'); ?>
<!-- End Guest -->
<?php
};?>
