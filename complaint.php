<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
  #body
  {
       width: 1400px;
       height: 1000px;
       background-image: url('compl.jpg');
       background-size:1400px 1000px; 
       height:1000px;
       width: 1400px;
       background-position:cover;
       background-repeat: no-repeat; 
     

  }
	table
	{ 

		font-size: 20px;
		width:400px;
		height: 400px;
	}
	#box
	{
     
		width:400px;
		height:430px;
		background-color:grey;
	}
	#box table td
	{
		color:skyblue;
		font-size: 26px;
	}
	#bodx input[type="submit"]
	{
		color:red;
		background-size:15px;
		font-size: 26px;
	}
</style>
</head>
<div id="body">
  <center>
<div id="box">
	   <table border="0" cellspacing="5" cellpadding="0">
	   <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <from action="" method="POST">
	   <tr>	
       <td><lable>Enter House no</lable><input type="text" name="tn"></td></tr>
       <tr>
       <td><center><label>Type complaint</label></center><td>
       </tr>
       <tr>
       	<td><center><textarea cols="30" rows="10" name="tr"></textarea></center></td>
       </tr>
       <br>
       <tr>
       <td><center> <input type="submit" name="s"></center><center> <input type="submit" name="l" value="Logout"></center></td>
       </tr>
   </table>
       <?php
           include('connection.php');


              if(isset($_POST['s']))
           {
               
                $a=$_POST['tn'];
           	    $b=$_POST['tr'];
              $query1=mysql_query("select * from house_info where house_no = $a");

              $num=mysql_num_rows($query1);
              if($num > 0)
              {
                $query=mysql_query("insert into complaint values ('$a','$b')");
                if ($query) 
                {
                   echo "<script type=text/javascript>alert('Complaint Send...');</script>";
                   header("loction:Index.php"); 
                }
                else
                {
                  
                   echo "<script type=text/javascript>alert('complaint Not Send...');</script>";
                       
                }

                
              }
              else
              {
                 echo "<script type=text/javascript>alert('Enter Correct House No...');</script>";

              }
              

           }

           ?>
           <?php

               include('connection.php');


                 if(isset($_POST['l']))
                {
                     header("location:Index.php");
                 }    
           ?>


</div>
</center>
</body>
</html>