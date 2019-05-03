<?php 

session_start();


 ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Online Portal</title>
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
		<main id="main">
			<section id="section">
				
				<?php
				if(isset($_SESSION['u_name']))	
				echo "logged in"; 
				?>

				<?php 

				if(isset($_SESSION['u_name'])){

				echo '<form action="include/logout.inc.php" method="POST">
					<button name="submit" type="submit">Logout</button>
				</form>';
				}
				else


				{

    				}
				 ?>
				
    			
			</section>
			<aside id="aside">
			<h4></h4>
				
		</main>
		<footer>Copyright &copy ankur.com</footer>
	</div>
</body>
</html>