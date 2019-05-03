<?php
if(isset($_POST['ok']))
{
 $id=$_POST['id'];
 $pass=$_POST["pass"];	

if($id=='ankur' && $pass=='ank123' )
{
header("location: 22.php");
}
else
{
   
	header("location: wel.html");
}
}
?>
