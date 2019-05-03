   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="myModulee">
<head>
<script src="js/angular.js"></script>
<script src="js/prakhar2.js"></script>
<link href="css/9.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body ng-controller="myControllerr">

Order by:<br/>
<br/>
  <select ng-model="sortColum">
  <option value="sno">Rank</option>
 <option value="name">Name</option>
 <option value="dateofbirth">Date of Estd.</option>
 <option value="location">Location</option>
 <option value="fee">College Fee</option>
 <option value="type">Type</option>
<option value="marks">Marks</option>
  
  
  
  </select>
  
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Enter Your Marks:
  
   
        <input type="text" ng-model="searchText.marks"><br>

   
  
 

  Search by College:<input type="text" placeholder="Search College" ng-model="searchText.name"/> 


&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

  Search by Location:<input type="text" placeholder="Search Location" ng-model="searchText.location"/> 
  

  <input type="checkbox" ng-model="exactMatch"/> Exact match
  
  
  <br/>
<br/><br/>
<br/><br/> 
  <br/>
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
    <tr ng-repeat="employee in employeess |orderBy:sortColum |filter:searchText :exactMatchh " >
	<!--  

	if we don't use ng-model=sortcolumn or select tag in this html,then we can sort by this metgod
	
	<tr ng-repeat="employee in employeess |orderBy: '-salary'  ">
	<tr ng-repeat="employee in employeess |orderBy: '+salary'  ">
	 <tr ng-repeat="employee in employeess |orderBy: 'salary':false  ">

	  <tr ng-repeat="employee in employeess |orderBy: 'name':true  ">


	
	-->
	    <td>{{employee.sno}}</td>
	    <td>{{employee.name | uppercase}}</td>
		 <td>{{employee.dateofbirth | date:"dd/MM/yyyy"}}</td>
		  <td>{{employee.location | lowercase}}</td>
		   <td>{{employee.fee |number:2}}</td>
		    <td>{{employee.type}}</td>
             <td>{{employee.marks}}</td>
		    
	</tr>
	
</table>



</body>
</html>
  