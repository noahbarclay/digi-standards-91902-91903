
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
    $id= $_GET["id"]; ?>

			<div class="content">
			<h2>Edit page</h2>
	
		<?php   
    $sql = "SELECT * FROM prints where id= $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
        $id=$row["id"]; 
        $name=$row["name"];
        $image=$row["image"];
        $description=$row["description"];
        $price=$row["price"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

!-- Disable notices  -->
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php include("../admin/setup.php");?> 

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit │ Pix Prints</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->

    <!-- Favicon-->
    <link rel="shortcut icon" href="../images/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <link rel="stylesheet" href="../css/edit_page.css">

  </head>
  <body>
  <?php include("navbar.php");?>

    <!--new stuff -->
    </header>
      <!-- Breadcrumb-->
      <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
              <li class="breadcrumb-item"><a class="fw-light" href="admin.php">Home</a></li>
              <li class="breadcrumb-item active fw-light" aria-current="page">Product Edit Page <?php print $id ?>  </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Page Header-->
      <header class="py-4">
        <div class="container-fluid py-2">
        </div>
      </header>
      <section class="tables">   
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Edit Product</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0">
    <form action="products_edit_action.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Product ID</label>
      </div>
      <div class="col-75">
    <?php print $id ?>
          <input type="hidden" id="id" name="id" value= "<?php print $id ?>">
      </div>
    </div>

<!-- Name -->

    <div class="row">
      <div class="col-25">
        <label for="title1">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" value="<?php print $name ?>">
      </div>
    </div>
    

<!-- Description -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="description" name="description" value="<?php print $description ?>">
      </div>
    </div>

    <!-- Price -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" value="<?php print $price ?>">
      </div>
    </div>

    <!-- Image -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Image</label>
      </div>
      <div class="col-75">
        <input type="text" id="image" name="image" value="<?php print $image ?>">
      </div>
    </div>
    
<br>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

<!-- End of my code -->
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <?php include("setup.php");?> 

<br><br><br>
<link href="../css/edit_page.css" rel="stylesheet" type="text/css">



  </body>

	</body>
</html>