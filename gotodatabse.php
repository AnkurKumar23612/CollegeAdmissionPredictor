<?php 

session_start();


 ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Online Portal</title>
	<link rel="Shortcut icon" href="file:///C|/xampp/htdocs/ANKURM/Icon.png">
	<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/ANKURM/Online_voting_system.css">
	<script type="text/javascript" src="file:///C|/xampp/htdocs/ANKURM/Online_voting_system.js"></script>
	<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/ANKURM/css/bootstrap.min.css">
	<script src="file:///C|/xampp/htdocs/ANKURM/js/bootstrap.min.js"></script>
	<script src="file:///C|/xampp/htdocs/ANKURM/jquery.js"></script>
 
	
</head>
<body>
	<div id="Home" class="jumbotron">
		<header>
				
			<h1>GO TO DATABASE</h1>
		</header>
		<nav class="active">
<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=hospital_management_system&token=e525e2a9097e777371038da9b69a512d"><span style="color:red;"><h1>Click Here</h1></span></a>
			
		</nav>
		<main id="main">
			<section id="section">
            <br/>
            <br/>
				
				
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
		<footer>Copyright &copy ankura2zstuff.com</footer>
	</div>
</body>
</html>