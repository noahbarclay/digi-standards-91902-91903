<table id="customers">
    <tr>
      <th>Page Num</th>
      <th>Title1</th>
      <th>img1</th>
    </tr>
<?php  
   // $message= $_SESSION["message"];
    //  print $message;
    $sql = "SELECT * FROM pages";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
        #print_r($row); #debugging 
        $pageID=$row["id"]; 
        $title1=$row["title1"];
        $img1=$row["img1"];
?>
    <tr>
      <td><?php print $pageID; ?>
          <a href='edit_page.php?id=<?php print $pageID; ?>'>Edit</a>
          </td>
      <td><?php print $title1; ?></td>
      <td><?php print $img1; ?></td>
    </tr>
<?php
    }
    } else {
        echo "There are no records in this table";
    }
$conn->close();
?>