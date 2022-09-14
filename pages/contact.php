<?php include("header.php");?>
<?php include("../admin/setup.php");?> 

<title>Contact │ Pix Prints</title>

</head>
<body>

<style>
 /* Style inputs with type="text", select elements and text areas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}


form {
  width: 50%;
  margin-left: 100px;
  margin-top: 50px;
  padding: 10px;
  border: 1px solid #B0C4DE;
  border-radius: 2px;
  background: #f4f4f4;
  float: left;
}

iframe {
  margin-left: 100px;
  margin-top: 50px;
  margin-bottom: 150px;
  padding: 10px;
  border: 1px solid #B0C4DE;
  border-radius: 2px;
  background: #f4f4f4;
  float : inherit;
}

@media (max-width:767px) {
  iframe , form {
    width: 75%;
    padding-bottom:5px;
    margin: none !important;
    float: center;
    margin-left: 50px;

    
  }
}


</style>
<div class="bg">
<div style="background-color: #f2f2f2;">

  <form action="contact_action.php" method="post">
    
<?php if(isset($_SESSION['messages'])){ 
					?><h3><?php echo $_SESSION['messages']; ?><br></h3> <?php
					unset($_SESSION['messages']); }?>
  
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Phone number..">
    
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Your message.." style="height:100px"></textarea>

    <input type="submit" value="Submit">

  </form>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1094.7037175622456!2d174.6568003548961!3d-36.40582608605948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c358f570e40cb!2sMahurangi%20College!5e0!3m2!1sen!2snz!4v1663152845304!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<?php include("footer.php");?>