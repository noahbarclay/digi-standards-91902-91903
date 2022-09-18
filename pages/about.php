<?php include("header.php");?>
<title>About │ Pix Prints</title>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 40px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 90%;
    display: block;
  }
}

a {
    color: white;
}


</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
</div>
<br>

<h4 STYLE="padding: 50px">
Pix Prints is a year 13 business group at Mahurangi College selling framed prints of our local region. We want to promote our environment, beautiful beaches, forests and wildlife.

We are donating a percentage of our profits to a local environmental cause (Tawharanui Regional Park). This ties in with the purpose of our product and how we want to promote our beautiful natural environment and also raise awareness. We are also wanting to use upcycled frames we purchase from hospice to mitigate the effects on the environment.

This is also innovative because you are not able to buy nice photos and prints of specific places that aren't as popular, meaning there is a gap in the market. Places such as Warkworth, Kaipara, Leigh, and Matakana don't actually have anywhere where you can purchase nice prints. Another point of difference is that we are having an online presence with a library where customers can easily browse and purchase images. They are going to be competitively charged. 

We are also going to have environmentally friendly packaging.</h4>

<h2 style="text-align:center">Our Team</h2>



<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/jesse.jpg" alt="Jesse" style="width:100%">
      <br>
      <div class="container">
        <h2>Jesse Attwood</h2>
        <p class="title">CEO</p>
        <p>ja54@mahurangi.school.nz</p>
        <button class="button"><a href = "mailto: ja54@mahurangi.school.nz">Contact</a></button>
      </div>
      <br>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/scott.jpg" alt="Scott" style="width:100%">
      <br>
      <div class="container">
        <h2>Scott van Bakel</h2>
        <p class="title">Marketing and Comms Director</p>
        <p>sv15@mahurangi.school.nz</p>
        <button class="button"><a href = "mailto: sv15@mahurangi.school.nz">Contact</a></button>
      </div>
      <br>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../images/will.jpg" alt="Will" style="width:100%">
      <br>
      <div class="container">
        <h2>Will Turner</h2>
        <p class="title">Finance Officer</p>
        <p>wt40@mahurangi.school.nz</p>
        <button class="button"><a href = "mailto: wt40@mahurangi.school.nz"><p1>Contact<p1></a></button>
      </div>
      <br>
    </div>

  </div>
</div>


<br>
<br>
<br>
<br>

</body>

<?php include("footer.php");?>