<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="Shortcut icon" href="Icon.png">
	<link rel="stylesheet" type="text/css" href="Online_voting_system.css">
     <link rel="stylesheet" type="text/css" href="signupstyle.css">
	<script type="text/javascript" src="Online_voting_system.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
	<title>VoterLogin</title>
</head>
<body>
<div id="Home" class="jumbotron">
<div id="style1">
<span style="color:blue;"><b><h1>Login</h1></b></span>
	
	</form>
    			<form action="include/login.inc.php" method="POST">
				<br>
    			<label><span style="color:blue;"><b>Username</b></span></label>
    					<input type="text" placeholder="Enter Username" name="votername" required>
				<label><span style="color:blue;"><b>Password</b></span></label>
    					<input type="Password" placeholder="Password" name="psd" required>
    		<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=hospital_management_system&token=e525e2a9097e777371038da9b69a512d">	<button type="submit" name="submit">Login</button></a>
    </form>
    </div>
    </div>
    
   
</body>
</html>