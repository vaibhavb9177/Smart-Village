<?php
 include('connection.php');
 $query=mysql_query("select count(*) from image ");
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
	<style>
	 #body
       {
        
          width: 1300px;
          height: 1000px;
          background-image: url('ser.png');
          background-size:1300px 1000px; 
          background-position:cover;
          background-repeat: no-repeat;  
      }
      #box table
       {
          background-color:pink;
          height:0px;
          width:100px; 

       }
       #box tr
       {
           color: red; 
       }
       td
       {
          background-color:orange;
          text-decoration:color:grey; 
          width:10px;

       }
      #box p
       {
         color: black;
         font-size:20px; 
       }
   </style>
</head>
<div id="body">
	<div id="box">
		<center>
	<table border="5" cellspacing="3" cellpadding="6">
		<tr>
<form action="uploadimg.php" method="POST" enctype="multipart/form-data">
	<td><p>Id</p> <input type="text" name="id" ></td>
	</tr>
	<br>
	<tr>
	 <td><input type="file" name="fname"></td>
	 </tr>
	 	<br>
	 	<tr>
	<td> <p>details</p><textarea cols="40"row="40" name="details"></textarea></td>
		</tr>
		<br>
		<tr>
	<td> <input type="submit" name="s"><td>
	</tr>
		<br>
	 <p> filename <p><input type="text" name=""><input type="submit" name="d" value="Delete"></ins>
	 </form>

	</table>
</center>
</div>
</body>
</html>
	 <?php
	     include ('connection.php');
	     if (isset($_POST['s']))
	      {
	          $i=$_POST['id'];
	          $d=$_POST['details'];
	         $n=$_FILES['fname']['name'];
	        echo $n."<br>";
	         if(!$query=mysql_query("insert into image values($i,'$n','$d')"))
	         {

	         	die(mysql_error());
	         }
	          if (move_uploaded_file($_FILES['fname']['tmp_name'],"img/".$n)) 
	          {

	          	   
	               echo "Uploaded...";
	              
	          }
	          else
	          {
	          	echo "upload fail..";
	          }
	     }
	

	        
	      if(isset($_POST['d']))
          {
               
                $i=$_POST['id'];
	            $d=$_POST['details'];
	            $n=$_FILES['fname']['name'];
                 $query1=mysql_query("delete from image where filename=$n");
      
              if($query1)
              {
                  echo "Deleted..";
              }
              else
              {
                  die(mysql_error());
              }

            }  
            
            ?>
	 

	
