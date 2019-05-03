<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Online Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#about">ABOUT US</a></li>
       
      <li><a href="#portfolio">WHY US</a></li>
        <li><a href="SignUp.php">SIGNUP</a></li>
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>COLLEGE ADMISSION PREDICTOR</h1> 
  <p>Click to login</p> 
  <a href="Voterlogin.php"><button class="btn btn-default btn-lg">LOGIN</button></a>
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Our Portal</h2><br>
      <h4>Our Portal is suitable for all devices as it's fully responsive in nature. We've used the bootstrap framework for making it responsive in nature.</h4><br>
      <p>Our this portal is a web tool whose aim is to provide some basic facilities to students who are part of engineering . Student can login and can check the availaibilty of college . Students can filter the college according to their choice ..</p>
      <br>
      <!--<a href="suggestion.php"><button class="btn btn-default btn-lg">Your Suggestion</button></a>-->
    </div>
    <div class="col-sm-4">
    <video  width="100%" height="100%"controls tableindex="0"  >
<source src="osp.mp4" type="video/mp4">
</video
    
     ><!-- <img class="img-responsive float-right" src="col.jpg"  alt="VIT" width="400" height="150"> -->
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
       <h2>Our Aim</h2><br>
      <h4><strong>MISSION:</strong>The Aim of this project is to  make a simple web application which will shift the entire Student Admission process details online for the benefit of the students.
</h4><br>
      <p><strong>VISION:</strong> The web app will store and display the data  from the time of registration of users who are taking part in admission enquiry process. This software will take care of all the basic processes that take place in an Admission Process in a <b>Transparent</b> as well as <b>Secure</b> manner.
</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>OUR SERVICES</h2>
  <h4>Here's what we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">OUR DEDICATION</h4>
    </div>
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
    </div>
    <div class="col-sm-4">
    <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>WE'RE CERTIFIED</h4>
      
    </div>
  </div>
  
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">

  <div class="row text-center slideanim">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
    </div>
  </div><br>
  
  <h2>What use COLLEGE ADMISSION PREDICTOR System?</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Safe, Secure and Reliable"</h4>
      </div>
      <div class="item">
        <h4>"Can Connect With user across the India"</h4>
      </div>
      <div class="item">
        <h4>"Just a button away from LOGIN"</h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>









<!-- Container (Pricing Section) -->



<!--



<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Make a Donation</h2>
    <h4>Three ways to donate to us</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Net Banking</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Donate?</strong></p>
          <p>For helping the poor student who need it the most to take admission in VIT</p>
          <p>Your trust matters</p>
        </div>
        <div class="panel-footer">
          <h3>$30</h3>
          
          <button class="btn btn-lg">Donate</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Debit Card</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Donate?</strong></p>
          <p>For helping the poor student who need it the most to take admission in VIT</p>
          <p>Your trust matters</p>
        </div>
        <div class="panel-footer">
          <h3>$30</h3>
          
          <button class="btn btn-lg">Donate</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Credit Card</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Donate?</strong></p>
          <p>For helping the poor student who need it the most to take admission in VIT</p>
          <p>Your trust matters</p>
          
        </div>
        <div class="panel-footer">
          <h3>$30</h3>
       
          <button class="btn btn-lg">Donate</button>
        </div>
      </div>      
    </div>    
  </div>
</div>






-->




<!-- Container (Contact Section) -->
<div id="open" style="background-color:#003">
<div id="contact" class="container-fluid bg-RED">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Vellore, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 12345678789</p>
      <p><span class="glyphicon glyphicon-envelope"></span> ankurking320@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <form action="" method="GET">
        <div class="col-sm-6 form-group"> 
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="ok" type="submit">Send</button>
    
        </div>
       
      </div>
      </form>
    </div>
  </div>
</div>

</div>


<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$hos=$_GET["name"];
$hosnam=$_GET["email"];
$hosadd=$_GET["comments"];



mysql_query("INSERT INTO contact_details(NAME,EMAIL,CONTACT) VALUES ('$hos','$hosnam','$hosadd')");



}
?>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><b>Developed by <span style="color:blue;"> <strong><b>ANKUR KUMAR </b></strong> </span>as a part of Open Source PROJECT</p></b>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
