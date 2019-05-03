<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter Bill_No:<input type="text" name="Docid" /></p>
<p>Enter Bill_Date:<input type="text" name="Name" /></p>
<p>Enter Patient_id:<input type="text" name="Address" /></p>
<p>Enter Admit_Date:<input type="text" name="Phoneno" /></p>
<p>Enter Discharge_Date:<input type="text" name="Qualification" /></p>
<p>Enter Room_Charge:<input type="text" name="Room" /></p>

<p>Enter Pathology_Charge:<input type="text" name="Gender" /></p>
<p>Enter Doctor_Fee:<input type="text" name="Department"/></p>
<p>Enter Mischallenous:<input type="text" name="Hosid" /></p>
<p>Enter Total_Amount:<input type="text" name="Hosi" /></p>

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
$rom=$_GET["Room"];
$gen=$_GET["Gender"];
$dep=$_GET["Department"];

$hos=$_GET["Hosid"];

$hose=$_GET["Hosi"];


mysql_query("INSERT INTO bill_details(BILL_NO,BILL_DATE,P_ID,ADMIT_DATE,DISCHARGE_DATE,ROOM_CHARGE,PATHOLOGY_CHARGE,DOCTOR_FEE,MISCHALLENOUS,TOTAL_AMOUNT) VALUES ('$doc','$nam','$add','$pho','$qua','$rom','$gen','$dep','$hos','$hose')");



}
?>












