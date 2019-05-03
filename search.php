<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="" method="GET">
<p>Enter regno to search record :<input type="text" name="Regno" /></p>
<input type="submit" name="ok" value="Submit" />
<input type="submit" name="Disp" value="Display All" />
</form>







</body>
</html>


<?php
$con=mysql_connect("localhost","root","");


$db=mysql_select_db("vit",$con);


if(isset($_GET["ok"]))
{
$reg=$_GET["Regno"];
$qr=mysql_query("SELECT * FROM vellore WHERE REGNO='$reg'");
while($row=mysql_fetch_assoc($qr))
{
echo $row['REGNO']."&nbsp;&nbsp;";
echo $row['NAME']."&nbsp;&nbsp;";
echo $row['GENDER']."&nbsp;&nbsp;";

echo $row['BLOCK']."&nbsp;&nbsp;";

echo $row['ROOM']."&nbsp;&nbsp;";
echo $row['CONTACT']."&nbsp;&nbsp;";

echo "<br/>";
}
}

if(isset($_GET["Disp"]))
{
$qr=mysql_query("SELECT * FROM vellore ");
while($row=mysql_fetch_assoc($qr))
{
echo $row['REGNO']."&nbsp;&nbsp;";
echo $row['NAME']."&nbsp;&nbsp;";
echo $row['GENDER']."&nbsp;&nbsp;";
echo $row['BLOCK']."&nbsp;&nbsp;";
echo $row['ROOM']."&nbsp;&nbsp;";
echo $row['CONTACT']."&nbsp;&nbsp;";
echo "<br/>";
}
}



?>