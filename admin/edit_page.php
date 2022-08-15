<?php include("pages/headnav.php");?>
<?php include("admin/setup.php");?>

<link rel="stylesheet" type="text/css" href="css/form.css">

</table>
</body>

      <form 
<div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>


      <?php include("pages/footer.php");?>

      