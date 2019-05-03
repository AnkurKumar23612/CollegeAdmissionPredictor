<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="" method="GET">
<p>Enter Candidate id to Edit record :<input type="text" name="Email" /></p>
<input type="submit" name="ok1" value="Submit" />
</form>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("online_voting_system",$con);
if(isset($_GET["ok1"]))
{
	
$email=$_GET["Email"];
$qr=mysql_query("SELECT * FROM voters WHERE Email='$email'");
while($row=mysql_fetch_assoc($qr))
{
?>





<form action="" method="GET">
<p>Enter username:<input type="text" name="Username"  value=" <?php echo $row['Username'] ?>" /></p>
<p>Enter name:<input type="text" name="Name" value=" <?php echo $row['Name'] ?>" /></p>
<p>Enter email:<input type="text" name="Email"  value=" <?php echo $row['Email'] ?>" /></p>
<p>Enter password:<input type="text" name="Password" value=" <?php echo $row['Password'] ?>" /></p>
<p>Enter aadhar:<input type="text" name="Aadhar"  value=" <?php echo $row['Aadhar'] ?>" /></p>
<p>Enter age:<input type="text" name="Age"  value=" <?php echo $row['Age'] ?>" /></p>
<p>Enter mobile:<input type="text" name="Mobile" value=" <?php echo $row['Mobile'] ?>"/></p>
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
 $username=$_GET["Username"];
 $name=$_GET["Name"];
 $email=$_GET["Email"];
 $password=$_GET["Password"];
 $aadhar=$_GET["Aadhar"];
 $age=$_GET["Age"];
 $mobile=$_GET["Mobile"];



mysql_query("UPDATE voters SET Username='$username',Name='$name',Email='$email', Password='$password',Aadhar='$aadhar',Mobile='$mobile' WHERE Email='$email' ");
}
?>

