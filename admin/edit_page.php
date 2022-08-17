<?php include("../pages/header.php");?> 
<?php include("setup.php");?> 

<br><br><br>
<link href="../css/edit_page.css" rel="stylesheet" type="text/css">

<!-- Disable notices  -->
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<?php 
    print_r($_GET);
    $pageID= $_GET["id"]; ?>


			<div class="content">
			<h2>Edit page</h2>
	
		<?php   
    $sql = "SELECT * FROM pages where id= $pageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
		$pageID=$row["id"];
        $title1=$row["title1"];
        $img1=$row["img1"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

    <!--new stuff -->

    <form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pageID ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>

<!-- Title One -->

    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>
    

<!-- Image One -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="img1" name="img1" value="<?php print $img1 ?>">
      </div>
    </div>
    
<br>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

	</body>
</html>