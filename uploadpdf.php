
<?php

	include ('connection.php');

	$q=mysql_query("select count(*) from imgpdf");

	while ($r=mysql_fetch_array($q)) {
		# code...
			$rw=$r['count(*)']+1;
			//echo $rw;
		}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	#body
       {
          top-bottom:100px; 
          width: 1300px;
          height: 1000px;
          background-image: url('govs.png');
          background-size:1300px 1000px;
          background-position:cover;
          background-repeat: no-repeat; 
          height:1000px;
          width: 1300px; 
         }
         #box
         {
         	
         	width: 1300px;
         	height: 1000px;
         } 
     </style>
     
</head>
<div id="body">
	<div id="box">
<table border="3">  
<body>
<form action="uploadpdf.php" method="POST" enctype="multipart/form-data">
<tr>	
<td><p>ID</p><input type="text" name="id" value="<?php echo $rw;?>"></td><br>
</tr>
<tr>
<td><input type="file" name="fname"></td>
</tr>
<br>
<tr>
<td><p>Details</p><input type="text" name="details"></td>
</tr>
<br>
<tr>
<td><input type="submit" name="s"></td>
</tr>
<br>

</form>
</div>
</div>
</table>
</html>
<?php

    include ("connection.php");   
	if (isset($_POST['s'])) {
		# code...

		$i=$_POST['id'];
		$d=$_POST['details'];


		$n=$_FILES['fname']['name'];
		echo "Name of Image ".$n."<br>";

		$s=$_FILES['fname']['size'];
		echo "Size of Image ".$s."<br>";

		$t=$_FILES['fname']['type'];
		echo "Type of Image ".$t."<br>";

		$q=mysql_query("insert into imgpdf values($i,'$n','$d')");

if(move_uploaded_file($_FILES['fname']['tmp_name'], "PDF/".$n))
{
	echo "Uploaded.....";
	header("Refresh:0");

}
else
{
	echo "Upload Fail.....";
}

	}

?>