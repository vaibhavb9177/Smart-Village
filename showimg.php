<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="showimg.php" method="POST">
	</form>

</body>
</html>
<?php
           include ('connection.php');
           $q=mysql_query("select * from image where id");
           while($row=mysql_fetch_array($q))
           {
   	         
   	           echo "<img src=img/".$row['filename']." width=200 height=200><br>";
   	           echo "<h3>".$row['details']."</h3>";
   	        
            }
                     
?>