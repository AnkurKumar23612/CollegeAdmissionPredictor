<?php session_start(); ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>user in</title>
    </head>
    <body>
    
            <form method="post" action="displayiit.php">
        <?php// include 'errorregister.php'; ?>
        <label for="amark"><h1> Enter your Marks</h1> </label><br>
       &nbsp;&nbsp;&nbsp; <input type="text" name="amark">
        <br/>
        <input style="position: relative;
    left:30px;top:50px;" type="submit" name="checkiit" value="Search IIT">
      <input type="reset" style="position: relative;
    left:50px;top:50px;">
                
       </form>
   
 
    </body>
    
</html>