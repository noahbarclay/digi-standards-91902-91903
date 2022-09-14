<?php
    #print_r($_POST);
    $id=$_POST["id"]; 
    $name=$_POST["name"];
    $image=$_POST["image"];
    $description=$_POST["description"];
    $price=$_POST["price"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    
    include"setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "UPDATE prints set name='$name', description='$description', price='$price',price='$price' where id= '$id'";
#print $sql;

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
    header("Location: products.php"); #redirect to the admin page if successful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
}

$conn->close();# this closes the connection to database
    ?>