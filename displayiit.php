<html>
<link href="css/9.css" rel="stylesheet"/>

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST["checkiit"]))
{
  $marks = test_input($_POST["amark"]);
    $conn=new mysqli("localhost","root","","colleges");
         if ($conn->connect_error) 
         {
    die("Connection failed: ".$conn->connect_error);
       } 

    $sql="SELECT * FROM COLLEGE WHERE MARKS<='$marks'";
    $res=$conn->query($sql);
    
	
	echo"<span style='color:blue;font-size:20px;'>From the given MARKS that you entered, you are applicable for the following college</span>";
	echo"</br></br>";
	 echo "<table border='1'>
	<thead>
	<tr>
    <th>NAME</th>
	<th>LOCATION</th>
	<th>TYPE</th>
	<th>FEE</th>
	<th>MARKS</th>
	
	</tr>
	</thead>"; 
	echo"<br/>"; 
	
    while($row=$res->fetch_assoc())
  {
       
	
	
	 
	 echo   "<tbody>";  
	   
	    echo "<tr><td>".$row['name']."</td><td>".$row['location']."</td><td>".$row['type']."</td><td>".$row['fees']."</td><td>".$row['marks']."</td></tr>";
   echo"</tbody>";
  }
	echo"</table>";
   
   
   
}
    
    
    ?>
    </html>