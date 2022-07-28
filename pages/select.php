<!DOCTYPE html>
<html lang="en">

<head>
<title>Pix Prints</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/jpg" href="images/logo.jpg" />
<link rel="stylesheet" href="style.css" />
<link rel="script" href="script.js" />
<script src="https://kit.fontawesome.com/7b1535357d.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/carousel.css" />

<?php include "setup.php";

//$sql = "SELECT results_id, standardnum, title, core_id, result, date FROM results";
$sql= "SELECT `standardnum`,`title`,`result`,`date`,firstname,surname
FROM results
INNER JOIN Core ON results.core_id = core.core_id
WHERE core.core_id = 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    
  while($row = $result->fetch_assoc()) {
      //print_r ($row);
    echo "<br>"."id: " . " - Name: " . $row["standardnum"]. " " . $row["title"]." ".$row["firstname"]." ".$row["result"]." ".$row["date"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!-- New select code? -->
<?php include"setup.php";
    
    $sql = "SELECT * FROM pages where pagenum=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["image1"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>
</head>