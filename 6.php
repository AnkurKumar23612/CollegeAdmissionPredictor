<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="" method="GET">
<p>Enter Candidate id to delete :<input type="text" name="Email" /></p>
<input type="submit" name="ok" value="Submit" />
</form>








</body>
</html>


<?php
$con=mysql_connect("localhost","root","");


$db=mysql_select_db("online_voting_system",$con);
if(isset($_GET["ok"]))
$email=$_GET["Email"];



$qr=mysql_query("DELETE FROM voters WHERE Email='$email'");

?>