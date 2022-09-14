<?php include("../admin/setup.php");?> 
<?php include("permissions.php");?> 

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

<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: grey;
    color: white;
  }</style>


</header>
<div class="bg-gray-200 text-sm">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
              <li class="breadcrumb-item"><a class="fw-light" href="admin.php">Home</a></li>
              <li class="breadcrumb-item active fw-light" aria-current="page">Forms  </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Page Header-->
      <header class="py-4">
        <div class="container-fluid py-2">
          <h1 class="h3 fw-normal mb-0">Form Submissions</h1>
        </div>
      </header>
      <!-- Forms Section-->
      <section class="pb-5"> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Contact</h3>

                  <form action="edit_action_page.php" method="post" >
        
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Message</th>
    </tr>
<?php  
   // $message= $_SESSION["message"];
    //  print $message;
    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
        #print_r($row); #debugging 
        $id=$row["id"]; 
        $name=$row["name"];
        $email=$row["email"];
        $phone=$row["phone"];
        $message=$row["message"];
?>
    <tr>
      <td><?php print $id; ?>
          <a href='contact_delete.php?id=<?php print $id; ?>'>Delete?</a>
          </td>
      <td><?php print $name; ?></td>
      <td><?php print $email; ?></td>
      <td><?php print $phone; ?></td>
      <td><?php print $message; ?></td>
    </tr>
<?php
    }
    } else {
        echo "There are no messages!";
    }
$conn->close();
?>
      </table>
      </div>
            </div>
          </div>
        </div>
    </div>




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
</html>