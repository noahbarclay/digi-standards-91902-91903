
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['admin'] == 1) {
?>

<?php
    #print_r($_POST);
    $prints_id $_POST["prints_id"];
    $acounts_id = $_POST["account"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    

    include"setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)

    $sql = "INSERT INTO order (account, product)
    VALUES ('$account', '$prints_id');




    else {
			// Incorrect password
			echo 'Incorrect username and/or password!';
			header('Location: ../admin/login.php');
			$_SESSION['message'] = "Please log in to place an order!";