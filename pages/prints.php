<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

      
        <link rel="stylesheet" href="../css/prints.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <?php include("header.php");?>
        <?php include("../admin/setup.php");?> 

        <title>Prints</title>
    </head>
      <body>
 
        <br>
<h1>Prints</h1>

<style>
                    p {
                      text-align: center;
                    }

                    h1 {
                      text-align: center;
                    }
                  </style>

        <div class="container1">
          <div class="gallery">

    <?php   
    $sql = "SELECT * FROM prints";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { 
        #debuggin print_r($row);
        $prints_id=$row["prints_id"];
        $name=$row["name"];
        $price=$row["price"];
        $description=$row["description"];
        $image=$row["image"];
        ?>
            <figure class="gallery__item gallery__item--<?php echo $prints_id ;?>">
                <a href="printshop.php?prints_id=<?php print $prints_id;?>">
                   <img src="../images/<?php echo $image ;?>" alt="Gallery image 1" class="gallery__img">
                    <p><u><?php echo $name ;?></u></p></a>
                </figure>  
               <?php } } ?>
            </div>
        </div>
    </body>
</html>