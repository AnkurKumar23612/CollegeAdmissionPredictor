  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="myModulee">
<head>
<script src="js/angular.js"></script>
<script src="js/11rou.js"></script>
<link href="css/11rou.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>							

<body ng-controller="myControllerr">
  
<!--
search:<input type="text" placeholder="Search employees" ng-model="searchText"/> 

-->  

 
  search by name:<input type="text" placeholder="Search name" ng-model="searchText.name"/> 

  search by location:<input type="text" placeholder="Search location" ng-model="searchText.marks"/> 

  <input type="checkbox" ng-model="exactMatch"/> Exact match
<br/><br/>
<br/><br/>	
<br/>



 <table>
    <thead>
     <tr>
	   <th>Rank</th>
	   <th>Name</th>
		<th>Date of Estb.</th>
		<th>Location</th>
		<th>Fee</th>
		<th>Type</th>
        <th><=Marks</th>
	 </tr>

</thead>

<tbody>
    <tr ng-repeat="employee in employeess |filter:searchText :exactMatch">
	
	   <td>{{employee.sno}}</td>
	    <td>{{employee.name | uppercase}}</td>
		 <td>{{employee.dateofbirth | date:"dd/MM/yyyy"}}</td>
		  <td>{{employee.location | lowercase}}</td>
		   <td>{{employee.fee |number:2}}</td>
		    <td>{{employee.type}}</td>
             <td>{{employee.marks}}</td>
		    
	</tr>
	
</table>
<br/><br/>
<br/><br/><br/><br/>





 

</body>
</html>
  