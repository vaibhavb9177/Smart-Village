<?php
 include('connection.php');
 $query=mysql_query("select count(*) from pdf ");
 while ($row=mysql_fetch_array($query))
  {
    $row=$row['count(*)']+1;
    echo $row;
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="pdf.php" method="POST" enctype="multipart/form-data">
	 <input type="text" name="id" ><br>
	 <input type="file" name="fname"><br>
	 <p>details</p><textarea cols="40"row="40" name="details"></textarea><br>
	 <input type="submit" name="s"><br>
	 </form>
</body>
</html>
	 <?php
	     include ('connection.php');
	     if (isset($_POST['s']))
	      {
	          $i=$_POST['id'];
	          $d=$_POST['details'];
	          $n=$_FILES['fname']['name'];
	          //echo $_FILES['fname']['type'];
	         // echo $n;
	         if(!$query=mysql_query("insert into pdf values($i,'$n','$d')"))
	         {

	         	die(mysql_error());
	         	 echo "uploaded...";
	         }
	        // if($_FILES['fname']['type']=="application/pdf")
	         //{
	          if (move_uploaded_file($_FILES['fname']['tmp_name'],"PDF/".$n)) 
	          {

	          	   // header("refresh:0");
	               echo "uploaded...";
	              
	          }
	          else
	          {
	          	echo "upload fail..";
	          }
	      /*}
	      else
	      {
	      	  echo "not pdf";
	      }*/
	      
	     }
	 ?>
	
