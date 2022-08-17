<?php include("../pages/header.php");?>
<?php include("setup.php");?>

<title>Admin │ Pix Prints</title>

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
  background-color: #04AA6D;
  color: white;
}

</style>


</head>

<!-- Page start -->

<body>
  <br>
  <br>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>

  <!-- Edit table -->

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
      </table>

   

      </body>

      <?php include("../pages/footer.php");?>

      