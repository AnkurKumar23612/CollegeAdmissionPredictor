<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Room_No:<input type="text" name="Rid" /></p>
<p>Enter Room_Type:<input type="text" name="Rtype" /></p>
<p>Enter Bed_Type:<input type="text" name="Btype" /></p>
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$hos=$_GET["Rid"];
$hosnam=$_GET["Rtype"];
$hosadd=$_GET["Btype"];



mysql_query("INSERT INTO room_details(ROOM_NO,TYPE,BED_TYPE) VALUES ('$hos','$hosnam','$hosadd')");



}
?>












