<!DOCTYPE html>
<html>
<head>
	<title>Show Complaint </title>
	<style>
	
	#body
	{
		width: 1300px;
          height: 1000px;
          background-image: url('compl.jpg');
          background-size:1300px 1000px; 
          height:1000px;
          width: 1300px;
          background-position:cover;
          background-repeat: no-repeat;
	}
	 #box
       {
           padding-top: 200px;
          width: 1300px;
          height: 1000px;
          
       }  
       table
       {
          background-color:pink;
          height:0px;
          width:500px; 

       }
       th
       {
           background-color:orange; 
       }
       td
       {
          background-color: white;
          text-decoration:color:red; 
          width: 50px;

       }
   </style>
</head>
<div id="body">
	<center>
     <div id="box">
     	<table>
     		<tr><th>House No</th><th>Compliant</th></tr>
     		<?php

     		   include('connection.php');
     		   $query=mysql_query("select * from complaint");
     		   while ($r=mysql_fetch_array($query))
     		   {
     		   	  echo"<tr>";
     		   	  echo "<td>".$r['house_no']."</td>"."<td>".$r['complaint']."</td>";
     		   	  echo"</tr>";
     		   }
     		?>
</table>
</div>
</center>
</body>
</html>