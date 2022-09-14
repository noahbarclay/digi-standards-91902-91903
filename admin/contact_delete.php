<?php
    print_r($_GET);
    $id= $_GET["id"];

    include"setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "DELETE FROM contact WHERE id=' $id'";

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
    header("Location: forms.php"); #redirect to the admin page if successful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
}

$conn->close();# this closes the connection to database
    ?>