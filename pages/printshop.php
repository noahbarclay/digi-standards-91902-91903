<?php include("../admin/setup.php");?>  <!-- This is the setup file. -->
        <?php 
    print_r($_GET);
    $prints_id= $_GET["prints_id"]; ?>


    <?php   
    $sql = "SELECT * FROM prints where prints_id= $prints_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
        $prints_id=$row["prints_id"];
        $name=$row["name"];
        $price=$row["price"];
        $description=$row["description"];
        $image=$row["image"];
       
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>


    <?php include("header.php")?>
    
    <link rel="newest stylesheet" href="../css/shop.css" rel="stylesheet"/>
    
    <div class="container">
    <div class="grid second-nav">
      <div class="column-xs-12">
        <nav></nav>
          <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="prints.php">Prints</a></li>
            <li class="breadcrumb-item active"><?php echo "$name" ?></li>
       
        <!-- Product section-->
        <form action="buynow.php" method="post" >
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../images/<?php echo "$image" ?>" alt="..." /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder"><?php echo "$name"; ?></h1>
                        <div class="fs-5 mb-5">
                        <div class="small mb-1"><?php echo "$description"?></div>
                          
                            <span>$<?php echo "$price" ?></span>
                        </div>
                       
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem"/>
                            <input class="btn btn-outline-dark flex-shrink-0" type="submit" value="         Order Now          "> 
                                <i class="bi-cart-fill me-1"></i>
                            </input>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>


</footer>