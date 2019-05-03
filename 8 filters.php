  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="myModulee">
<head>
<script src="js/angular.js"></script>
<script src="js/8.js"></script>
<link href="css/8.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body ng-controller="myControllerr">




	<br/>

	<h2>Rows to <b>Display</b></h2>
	<br/>
	<input type="number" step="1" min="0" max="5" ng-model="rowLimit"/>
	<br/><br/><br/>


	<table>
   <thead>
     <tr>
	   
	   <th>Name</th>
		<th>Date of birth</th>
		<th>Gender</th>
		<th>Salary(number)</th>
		<th>Salary(currency)</th>

	 </tr>

</thead>

<tbody>

    <tr ng-repeat="employee in employeess |limitTo:rowLimit">
	<!--
	<tr ng-repeat="employee in employeess |limitTo:2:1">
<tr ng-repeat="employee in employeess |limitTo:2">
<tr ng-repeat="employee in employeess |limitTo:3:2">


	-->
	    <td>{{employee.name | uppercase}}</td>
		 <td>{{employee.dateofbirth | date:"dd/MM/yyyy"}}</td>
		  <td>{{employee.gender | lowercase}}</td>
		   <td>{{employee.salary |number:2}}</td>
		    <td>{{employee.salary |currency:"#":1}}</td>
	</tr>
	
</table>



</body>
</html>
  