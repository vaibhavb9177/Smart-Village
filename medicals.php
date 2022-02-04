<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
    #body
    {
   
        background-image: url('med.jpg');
       background-size:1300px 700px; 
       height:1000px;
       width: 1300px;
       background-position:center;
       background-size: cover;
       background-repeat: no-repeat; 

    }
		#box
		{
			
           border:solid black;
           border-radius:5px;
           width: 200px;
           height: 200px;
           margin-left: 10px;
           margin-top: 10px;
           float: left;
           padding: 30px;
          
		}
		#main
		{

			height:430px;
			width: 560px;
			border: solid;
			alignment-baseline: center;
			background-color:#fffACD;
            float: left;
            margin-left: 300px;

		}

	</style>
</head>
<div id="body">
  
   <div id="main">
    
   	<?php
  include ('connection.php');
  $query=mysql_query("SELECT * FROM image WHERE id='1'");
  while($row=mysql_fetch_array($query))
  {?><center><div id="box">
    <?php
       echo "<img src=img/".$row['filename']." width=200 height=200><br>"."</br>";
          echo "<h3>".$row['details']."</h3>";?>
          </div></center>
          <?php
   }
 
   ?>
   
   </div>

</div>
</html>
