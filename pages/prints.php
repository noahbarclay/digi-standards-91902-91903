
<?php include("../pages/header.php");?>

<?php include("../admin/setup.php");?>

<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Gallery</h2>

  <?php   
    $sql = "SELECT * FROM prints";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { 
        #debuggin print_r($row);
        $id=$row["id"];
        $name=$row["name"];
        $price=$row["price"];
        $description=$row["description"];
        $image=$row["image"];
        ?>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="../images/<?php echo $image ;?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><?php echo $name ?></div>
	<div class="desc"><?php echo $description ?></div>
	<h5><button type="button" onclick="location.href='printshop.php?id=<?php print $id;?>';">Buy now</button></h5> 
	<p><?php echo $name ?></p>
  </div>
</div>

<div class="clearfix"></div>

  
  <?php
      }
    }?>

  



</body>

</html>