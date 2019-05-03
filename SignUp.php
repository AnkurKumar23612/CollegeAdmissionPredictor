

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
		<link rel="Shortcut icon" href="Icon.png">
	<link rel="stylesheet" type="text/css" href="Online_voting_system.css">
    <link rel="stylesheet" type="text/css" href="signupstyle.css">

	<script type="text/javascript" src="Online_voting_system.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
</head>
<body>

	<div id="Home" class="jumbotron">
		<div id="style1">
		<main>
			<section>
			<center>	<span style="color:blue;"><b><h1>Sign Up</h1></b></span></center>
				<form action="include/signup.inc.php" method="POST">
  						<div class="container">
    						<label> <span style="color:blue;"><b>UserName</b></span></label>
    								<input type="text" placeholder="Enter UserName" name="UserName" required>
    						<label><span style="color:blue;"><b>Name</b></span></label>
    								<input type="text" placeholder="Enter Full Name" name="Name" >
    						<label><span style="color:blue;"><b>Email</b></span></label>
    								<input type="text" placeholder="Enter Email" name="email" >
    						<label><span style="color:blue;"><b>Password</b></span></label>
    								<input type="Password" placeholder="Password" name="psw" >
    						<label><span style="color:blue;"><b>Aadhar Card Number</b></span></label>
    								<input type="Number" placeholder="Aadhar Card Number" name="Aadhar" >
    						<label><span style="color:blue;"><b>Age</b></span></label>
    								<input type="Number" placeholder="Age" name="Age" >
    						<label><span style="color:blue;"><b>Contact Number</b></span></label>
    								<input type="Number" placeholder="Contact Number" name="number" ><br>    						
    					<div class="clearfix">
      							<button type="button"  class="cancelbtn">Cancel</button>
      							<button type="submit" name="submit" class="signupbtn">submit</button>
   						 </div>
 						 </div>
				</form>
			</section>
			<aside></aside>
		</main>
		<footer>Copyright &copy OnlineVotingPortal.com</footer>
	</div>
    </div>
	
</body>
</html>