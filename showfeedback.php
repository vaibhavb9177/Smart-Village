<!DOCTYPE html>
<html>
<head>
	<title>show feedback</title>
</head>
<body>

  <?php
  include('connection.php');
  $query=mysql_query(" select * from complaint");
  echo"<table border=2>";
  echo"<tr> <th>House No </th><th> Complaint </th> </tr>";
  while ($r=mysql_fetch_array($query))
   {
   	   echo"<tr>";
   	   echo"<td>".$r['house_no']."</td>"."<td>".$r['complaint']."</td>";
   	   echo"<tr>";
   } 
  echo"</table>";
  ?>
</body>
</html>