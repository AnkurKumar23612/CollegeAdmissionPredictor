<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Nurse_Id<input type="text" name="Nid" /></p>
<p>Enter Name:<input type="text" name="Nname" /></p>
<p>Enter Qualification:<input type="text" name="Nqualification" /></p>
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$hos=$_GET["Nid"];
$hosnam=$_GET["Nname"];
$hosadd=$_GET["Nqualification"];



mysql_query("INSERT INTO nurse_details(NURSE_ID,NAME,QUALIFICATION) VALUES ('$hos','$hosnam','$hosadd')");



}
?>












