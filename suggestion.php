<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form action="" method="GET">
<p>Enter your id no     :<input type="text" name="Regno" /></p>
<p>Enter your name      :<input type="text" name="Name" /></p>
<p>Enter your suggestion:<input type="text" name="Suggestion" /></p>
<input type="submit" name="ok" value="Submit" />
</form>








</body>
</html>


<?php
$con=mysql_connect("localhost","root","");


$db=mysql_select_db("webtech",$con);
if(isset($_GET["ok"]))
{
$reg=$_GET["Regno"];
$nam=$_GET["Name"];
$sug=$_GET["Suggestion"];


mysql_query("INSERT INTO suggestion(REGNO,NAME,SUGGESTION) VALUES ('$reg','$nam','$sug')");

}
?>












