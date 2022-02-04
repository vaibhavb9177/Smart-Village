<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
	table
	{
		font-size: 20px;
		width:400px;
		height: 400px;
	}
	#body
	{
		width:400px;
		height:430px;
		background-color:grey;
	}
	#body table td
	{
		color:skyblue;
		font-size: 26px;
	}
	#body input[type="submit"]
	{
		color:red;
		background-size:15px;
		font-size: 26px;
	}
</style>
</head>
<div id="body">
	   <table border="0" cellspacing="5" cellpadding="0">
	   <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
	   <tr>	
       </tr>
       <tr>
       <td><center><label>Type complaint</label></center><td>
       </tr>
       <tr>
       	<td><center><textarea cols="30" rows="10" name="tr"></textarea></center></td>
       </tr>
       <br>
       <tr>
       <td><center> <input type="submit" name="s"></center></td>
       </tr>
   </table>
       <?php
           include('connection.php');
           

              if(isset($_POST['s']))
           {
               
                $a=$_POST['tn'];
           	    $b=$_POST['tr'];
              $query1=mysqli_query($conn,"select * from house_info where house_no = $a");

              $num=mysqli_num_rows($query1);
              if($num > 0){
                $query=mysqli_query($conn,"insert into complaint values ('$a','$b')");
                if ($query) {
                  echo "insert";
                  # code...
                }
                else
                {
                  echo "not inset";
                }
              }
              else
              {
                echo " please Enetr your correct house no";
              }
              
                    
           }
           ?>
</body>
</html>