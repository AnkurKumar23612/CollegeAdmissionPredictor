<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Hospital_Id<input type="text" name="Hosid" /></p>
<p>Enter Name:<input type="text" name="Hosname" /></p>
<p>Enter Address:<input type="text" name="Hosaddress" /></p>
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$hos=$_GET["Hosid"];
$hosnam=$_GET["Hosname"];
$hosadd=$_GET["Hosaddress"];



mysql_query("INSERT INTO hos_details(HOS_ID,HOS_NAME,HOS_ADDRESS) VALUES ('$hos','$hosnam','$hosadd')");



}
?>












