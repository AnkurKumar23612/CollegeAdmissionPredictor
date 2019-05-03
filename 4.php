<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Doctor_id:<input type="text" name="Docid" /></p>
<p>Enter Name:<input type="text" name="Name" /></p>
<p>Enter Address:<input type="text" name="Address" /></p>
<p>Enter Phone number:<input type="text" name="Phoneno" /></p>
<p>Enter Qualification:<input type="text" name="Qualification" /></p>
<p>Enter Gender:<input type="text" name="Gender" /></p>
<p>Enter Department:<input type="text" name="Department"/></p>
<p>Enter Hospital Id<input type="text" name="Hosid" /></p>
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$doc=$_GET["Docid"];
$nam=$_GET["Name"];
$add=$_GET["Address"];
$pho=$_GET["Phoneno"];
$qua=$_GET["Qualification"];
$gen=$_GET["Gender"];
$dep=$_GET["Department"];

$hos=$_GET["Hosid"];


mysql_query("INSERT INTO doctor_details(D_ID,NAME,ADDRESS,PHONE_NO,QUALIFICATION,GENDER,DEPARTMENT,HOS_ID) VALUES ('$doc','$nam','$add','$pho','$qua','$gen','$dep','$hos')");



}
?>












