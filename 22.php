













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php and sql</title>
<style>

#head{
	width:100%;
	height:100px;
	background:#966;
	box-shadow:blue 2px 2px 2px;
	position:relative;
	<!--TEXT-ALIGN:center;
	COLOR:green;-->
	margin-top:-10px;	
}

#logo
{
	height:90px;
	width:90px;
	position:absolute;
	top:5px;
	left:30px;
}
#text{
	position:absolute;
	top:-10px;
	left:600px;
	color:yellow;
	font-size:24px;
	
	
}
#logo1
{
	height:90px;
	width:90px;
	position:absolute;
	top:5px;
	right:30px;
}


#bd{
width:100%;
height:300px;
background:grey;
border:3px solid violet;
border radius:15px;
}
.b 
{
width:25%;
height:280px;
border:blue solid 2px;
background:green;
position:absolute;
border-radius:15px;
margin-top:5px;

}
#c
{
width:72%;
height:280px;
border:green solid 2px;
background:red;
position:absolute;
border-radius:15px;
margin-top:5px;
left:27%;
}
#a
{
	text-decoration:none;
}
</style>
</head>

<body>

<div id="head">
	<div id="logo">
		<img SRC="17.jpg" / height="90" width="75" align="left">
	</div>
    <div id="text"><center><h1>WELCOME</h1></center>
<!--<span style="font-size:15px; background-color:red;">Well educated and highly motivated person</span>-->

      </div>

	<div id="logo1">

	<img SRC="5.jpg"/ height="90" width="75" align="left">
	</div>


</div>
<br/>
<div id="bd">
<div class="b">

<a href="4s.php" target="abc"> <h3>SEARCH CANDIDATE</h3></a>
<br/>
<a href="6.php" target="abc"><h3> DELETE CANDIDATE</h3></a>
<br/>

<a href="edit.php" target="abc"><h3> MODIFY CANDIDATE </h3></a>

</div>
<div id="c">
<iframe name="abc" width="99%" height="98%"></iframe>
<!-- (for image insertion) iframe name="abc" img src="we.jpg"height="300px"width="1500px" border="10px"  width="99%" height="98%"-->
</div>
</div>
</body>
</html>