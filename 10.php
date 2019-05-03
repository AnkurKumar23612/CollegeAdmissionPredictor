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
       <li><a href="SMAIN.php">HOME</a></li>
       
      
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>COLLEGE ADMISSION PREDICTOR</h1> 
  <br/><br/>
  <a href="#"><button class="btn btn-default btn-lg">ENTER YOUR MARKS</button></a>
  &nbsp;&nbsp;&nbsp;
  <a href="#"><button class="btn btn-default btn-lg">FILTER COLLEGE </button></a>
  &nbsp;&nbsp;&nbsp;
  <a href="#"><button class="btn btn-default btn-lg">YOUR FEEDBACK</button></a>
</div>











<!-- Container (Pricing Section) -->







<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Welcome to our Admission predictor portal</h2>
    <h4>How can we help you???</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>FEEDBACK &#8681</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Important?</strong></p>
          <p>For helping to improve our website for student</p>
          <p>Your trust matters</p>
        </div>
        <div class="panel-footer">
          <a href="suggestion.php"><button class="btn btn-lg">Your Suggestion</button></a>
          
          
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>ENTER YOUR MARKS &#8681</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Important??</strong></p>
          <p>For helping to see college list ACCORDING TO YOUR MARKS</p>
          <p>Your trust matters</p>
        </div>
        <div class="panel-footer">
          <a href="iitcheck.php"><button class="btn btn-lg">YOUR MARKS</button></a>
          
          
        </div>
      </div>      
    </div>   
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>FILTER COLLEGE &#8681</h1>
        </div>
        <div class="panel-body">
          <p><strong>Why Important??</strong></p>
          <p>For helping to Filter college according to your choice</p>
          <p>Your trust matters</p>
        </div>
        <div class="panel-footer">
          <a href="13sorting.php"><button class="btn btn-lg">Filter College</button></a>
          
          
        </div>
      </div>      
    </div>  
  </div>
</div>












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
