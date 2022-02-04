<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	div{


		border: solid blue;
		border-radius: 8px;
		height:250px;
		width: 250px;
		margin-left: 10px;
		margin-top: 10px;
		float: left;
		padding: 30px;
		background-color: white;
	}
	#main{


		height: 100%;
		width: 1000px;
		border: solid;
		alignment-baseline: central;
		background-color: gray;
	}

	</style>
</head>
<body>
	<div id="main">
<?php

	include ('connection.php');


	$q=mysql_query("select * from imgpdf");

	while ($r=mysql_fetch_array($q)) {
		?>
		
		<div>
			<?php
		echo $r['id']."<br>";
		echo "<img src=img/".$r['iname']." width=240 height=240><br>";
		echo "<h3>".$r['details']."</h3>";
?>
</div>
		<?php
	}
	


?>

</div>
</body>
</html>