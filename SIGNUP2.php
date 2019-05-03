<? php
echo "hii";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
		<link rel="Shortcut icon" href="Icon.png">
	<link rel="stylesheet" type="text/css" href="Online_voting_system.css">
	<script type="text/javascript" src="Online_voting_system.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
</head>
<body>

	<div id="Home" class="jumbotron">
		<header>
			<h1>Online Voting Portal</h1>
		</header>
		<nav class="active">

			<a href="Home.php">
				<li>Home</li>
			</a>
			<a href="Candidate.php">
				<li>Candidates</li>
			</a>
			<a href="SignUp.php">
				<li>Sign Up</li>
			</a>
			<a href="AboutUs.php">
				<li>About Us</li>
			</a>
			<a href="Voterlogin.php">
				<li>Voter Login</li>
			</a>
			<a href="Candidatelogin.php">
				<li>Candidate Login</li>
			</a>
			<a href="Contact.php">
				<li>Contact</li>
			</a>
		</nav>
		<main>
			<section>
				<h3>Sign Up</h3>
				<form action="include/signup.inc.php" method="POST">
  						<div class="container">
    						<label><b>UserName</b></label>
    								<input type="text" placeholder="Enter UserName" name="UserName" required>
    						<label><b>Name</b></label>
    								<input type="text" placeholder="Enter Full Name" name="Name" >
    						<label><b>Email</b></label>
    								<input type="text" placeholder="Enter Email" name="email" >
    						<label><b>Password</b></label>
    								<input type="Password" placeholder="Password" name="psw" >
    						<label><b>Aadhar Card Number</b></label>
    								<input type="Number" placeholder="Aadhar Card Number" name="Aadhar" >
    						<label><b>Age</b></label>
    								<input type="Number" placeholder="Age" name="Age" >
    						<label><b>Contact Number</b></label>
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
	
</body>
</html>