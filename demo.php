<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<from action="demo.php" method="POST">	
<input type="text" name="tx">
<input type="text" name="jg">
<input type="submit" name="s">
     <?php
     include('connection.php');
     if(isset($_POST['s']))
     {
     	$a=$_POST['tx'];
     	$b=$_POST['jg'];
     	$query=mysql_query("insert into demo values('$a','$b')");
     }
     ?>
 </from>
</body>
</html>