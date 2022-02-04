
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
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	
<input type="text" name="id" value="<?php echo $rw;?>"><br>
<input type="file" name="fname"><br>
<input type="text" name="details"><br>
<input type="submit" name="s"><br>

</form>
</body>
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