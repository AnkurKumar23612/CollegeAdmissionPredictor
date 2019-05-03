<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>











</body>
</html>


<?php
$con=mysql_connect("182.50.133.86:3306","ankurkumar","Aa@9534701749");
$db=mysql_select_db("ANKUR",$con);

$qr=mysql_query("SELECT * FROM kum ");
while($row=mysql_fetch_assoc($qr))
{
echo $row['REGNO']."&nbsp;&nbsp;";
echo $row['NAME']."&nbsp;&nbsp;";
echo $row['FEE'];
echo "<br/>";
}



?>