
<?php 

session_start();


 ?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet" href="20.css" />


<link rel="Shortcut icon" href="file:///C|/xampp/htdocs/ANKURM/Icon.png">
	<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/ANKURM/Online_voting_system.css">
	<script type="text/javascript" src="file:///C|/xampp/htdocs/ANKURM/Online_voting_system.js"></script>
	<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/ANKURM/css/bootstrap.min.css">
	<script src="file:///C|/xampp/htdocs/ANKURM/js/bootstrap.min.js"></script>
	<script src="file:///C|/xampp/htdocs/ANKURM/jquery.js"></script>


</head>

<body>

<marquee behavior="alternate" scrollamount="30" bgcolor="#003333" border-radius="20px">
        <h1><span style="color:#300;font-family:'Jolly Lodger',cursive;	text-align:center;">Welcome to student information page</span></h1>
    </marquee>

<marquee behavior="scroll" direction="right" bgcolor="#333333">
        <h1><span style="color:green;font-family:'Jolly Lodger',cursive;	text-align:center;">Welcome to student information page</span></h1>
    </marquee>

<marquee behavior="scroll" bgcolor="#339999">
        <h1><span style="color:yellow;font-family:'Jolly Lodger',cursive;	text-align:center;">Welcome to student information page</span></h1>
    </marquee>




    </marquee>

<div id="bd">
<div class="b">
<a href="enter.php" target="abc"><h3>ENTER YOUR DATA</h3></a> 
<br/>
<br/>
<br/>
<br/>
<a href="search.php" target="abc"> <h3>SEARCH YOUR DATA</h3></a>
<br/>
<br/>
<br/>
<br/>
<a href="delete.php"  target="abc"><h3> DELETE YOUR DATA</h3></a>
<br/>
<br/>
<br/>
<br/>
<a href="modify.php"  target="abc"><h3>MODIFY YOUR DATA</h3></a>

</div>
<div id="c">
<iframe name="abc" width="99%" height="98%"></iframe>
<!-- (for image insertion) iframe name="abc" img src="we.jpg"height="300px"width="1500px" border="10px"  width="99%" height="98%"-->
</div>
</div>





<div id="Home" class="jumbotron">
		<header>
				
			
		<nav class="active">

			
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
