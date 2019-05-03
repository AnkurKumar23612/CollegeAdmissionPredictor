<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="" method="GET">
<p>Enter Candidate id to search :<input type="text" name="Email" /></p>
<input type="submit" name="ok" value="Submit" />
<input type="submit" name="Disp" value="Display All" />
</form>







</body>
</html>


<?php
$con=mysql_connect("localhost","root","");


$db=mysql_select_db("online_voting_system",$con);


if(isset($_GET["ok"]))
{
$email=$_GET["Email"];
/*$qr=mysql_query("SELECT * FROM kum WHERE REGNO='$reg'");
$qr=mysql_query("SELECT REGNO, NAME, FEE FROM kum");
$qr=mysql_query("SELECT * FROM kum");*/
$qr=mysql_query("SELECT * FROM voters WHERE Email='$email'");
while($row=mysql_fetch_assoc($qr))
{
echo $row['Username']."&nbsp;&nbsp;";
echo $row['Name']."&nbsp;&nbsp;";
echo $row['Email']."&nbsp;&nbsp;";
/*
echo $row['Password']."&nbsp;&nbsp;";*/
echo $row['Aadhar']."&nbsp;&nbsp;";

echo $row['Age']."&nbsp;&nbsp;";

echo $row['Mobile']."&nbsp;&nbsp;";
echo "<br/>";
}
}

if(isset($_GET["Disp"]))
{
$qr=mysql_query("SELECT * FROM voters ");
while($row=mysql_fetch_assoc($qr))
{
echo $row['Username']."&nbsp;&nbsp;";
echo $row['Name']."&nbsp;&nbsp;";
echo $row['Email']."&nbsp;&nbsp;";
/*
echo $row['Password']."&nbsp;&nbsp;";*/
echo $row['Aadhar']."&nbsp;&nbsp;";

echo $row['Age']."&nbsp;&nbsp;";

echo $row['Mobile']."&nbsp;&nbsp;";
echo "<br/>";
}
}



?>