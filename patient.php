<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Patient_id:<input type="text" name="Patid" /></p>
<p>Enter Name:<input type="text" name="Name" /></p>
<p>Enter Age:<input type="text" name="Age" /></p>
<p>Enter Gender:<input type="text" name="Gender" /></p>
<p>Enter Address:<input type="text" name="Address" /></p>
<p>Enter Admit_date:<input type="text" name="Admit" /></p>
<p>Enter Contact_no:<input type="text" name="Contact" /></p>
<p>Enter Room_no:<input type="text" name="Room"/></p>
<p>Enter Nurse_Id:<input type="text" name="Nid" /></p>
<p>Enter Doctor_id:<input type="text" name="Docid" /></p>

<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("hospital_management_system",$con);
if(isset($_GET["ok"]))
{
$doc=$_GET["Patid"];
$nam=$_GET["Name"];
$add=$_GET["Age"];
$pho=$_GET["Gender"];
$qua=$_GET["Address"];
$gen=$_GET["Admit"];
$dep=$_GET["Contact"];

$hos=$_GET["Room"];
$nid=$_GET["Nid"];
$docid=$_GET["Docid"];


mysql_query("INSERT INTO patient_details(P_ID,NAME,AGE,GENDER,ADDRESS,ADMIT_DATE,CONTACT_NO,ROOM_NO,N_ID,D_ID) VALUES ('$doc','$nam','$add','$pho','$qua','$gen','$dep','$hos','$nid','$docid')");



}
?>












