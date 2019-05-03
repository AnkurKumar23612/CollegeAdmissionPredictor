<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="GET">
<p>Enter regno:<input type="text" name="Regno" /></p>
<p>Enter name:<input type="text" name="Name" /></p>
<p>Enter gender:<input type="text" name="Gender" /></p>
<p>Enter block:<input type="text" name="Block" /></p>
<p>Enter room no:<input type="text" name="Room" /></p>
<p>Enter contact no:<input type="text" name="Contact" /></p>
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("vit",$con);
if(isset($_GET["ok"]))
{
$reg=$_GET["Regno"];
$nam=$_GET["Name"];
$cou=$_GET["Gender"];
$fe=$_GET["Block"];
$rom=$_GET["Room"];
$mob=$_GET["Contact"];
mysql_query("INSERT INTO vellore(REGNO,NAME,GENDER,BLOCK,ROOM,CONTACT) VALUES ('$reg','$nam','$cou','$fe','$rom','$mob')");


/*

$qr=mysql_query("SELECT * FROM kum");
while($row=mysql_fetch_assoc($qr))
{
echo $row['REGNO']."&nbsp;&nbsp;";
echo $row['NAME']."&nbsp;&nbsp;";
/*echo $row['MOBILE'];

echo $row['COURSE'];

echo $row['FEE'];
echo "<br/>";
}*/

}
?>












