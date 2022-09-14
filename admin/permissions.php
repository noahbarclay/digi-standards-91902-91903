<?php
session_start();
if ($_SESSION['admin'] == 0) {
?>
<!-- Start Members-->
<?php header('Location: ../pages/index.php'); }?>
<!-- End Members -->
