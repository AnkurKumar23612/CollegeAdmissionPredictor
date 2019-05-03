<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="" method="GET">
<p>Enter regno to modify record :<input type="text" name="Regno" /></p>
<input type="submit" name="ok1" value="Submit" />
</form>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("vit",$con);
if(isset($_GET["ok1"]))
{
	
$reg=$_GET["Regno"];
$qr=mysql_query("SELECT * FROM vellore WHERE REGNO='$reg'");
while($row=mysql_fetch_assoc($qr))
{
?>





<form action="" method="GET">
<p>Enter regno:<input type="text" name="Regno"  value=" <?php echo $row['REGNO'] ?>" /></p>
<p>Enter name:<input type="text" name="Name" value=" <?php echo $row['NAME'] ?>" /></p>
<p>Enter GENDER:<input type="text" name="Gender"  value=" <?php echo $row['GENDER'] ?>" /></p>
<p>Enter BLOCK:<input type="text" name="Block"  value=" <?php echo $row['BLOCK'] ?>" /></p>
<p>Enter ROOM:<input type="text" name="Room" value=" <?php echo $row['ROOM'] ?>"/></p>
<p>Enter CONTACT:<input type="text" name="Contact" value=" <?php echo $row['CONTACT'] ?>"/></p>

<input type="submit" name="ok" value="Submit" />
</form>


<?php
}
}
?>



</body>
</html>


<?php

if(isset($_GET["ok"]))
{
$reg=$_GET["Regno"];
$nam=$_GET["Name"];
$cou=$_GET["Gender"];
$fe=$_GET["Block"];
$rom=$_GET["Room"];
$mob=$_GET["Contact"];


mysql_query("UPDATE vellore SET REGNO='$reg',NAME='$nam',GENDER='$cou', BLOCK='$fe', ROOM='$rom', CONTACT='$mob' WHERE REGNO='$reg' ");
}
?>

