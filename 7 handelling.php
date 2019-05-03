  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="myModulee">
<head>
<script src="js/angular.js"></script>
<script src="js/7.js"></script>
<link href="css/7.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body ng-controller="myControllerr">

<table>
   <thead>
		<tr>
		
		<th>Names</th>
		<th>Likes</th>
		<th>Dislikes</th>
		<th>Like/Dislikes</th>

	    </tr>    
   </thead>

   <tbody>
      <tr ng-repeat="appi in appp">
	      <td>{{appi.name}}</td>
		   <td>{{appi.likes}}</td>
		    <td>{{appi.dislikes}}</td>
			 <td>
			 <input type="button" value="Like" ng-click="incrementLikes(appi)">
			 <input type="button" value="Dislike" ng-click="incrementDislikes(appi)">
			 </td>
	  </tr>
   </tbody>
    
</table>

</body>
</html>
  