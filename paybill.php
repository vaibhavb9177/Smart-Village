<!DOCTYPE html>
<html>
<head>
	<title>pay bill</title>
	<style>
	    #body
	    {
             background-image: url('pay.jpg');
    	     background-size:1300px 700px; 
    	     height:1000px;
    	     width: 1300px;
    	     background-position:center;
    	     background-size: cover;
    	     background-repeat: no-repeat; 
	    }
		#box
		{
			width: 800px;
			height: 700px;
			color: black;

		}
		label
		{
			color:red;
			font-size: 20px;
		}
        h1
        {
        	color:white;
        }
        h3
        {
        	color:white; 
        }
        table
        {
          width: 300px;
          height: 200px;
          bottom-top:500px;
        }
	</style>
</head>
<div id="body">
  <center>
<div id="box">
         <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
	   <center>

	  <br><br><h1> Pay Bill </h1>
    <table border="2">
        <tr>
	  <td><h3> Select Payment Method </h3></td>
  </tr>
	   <tr>
 <td><input type="radio" name="Credit" value="Credit"><label>Credit Card</label></td>&nbsp
 </tr>
 <tr>
	  <td><input type="radio" name="Debit" value=""><label>Debit Card</label>&nbsp</td>
   </tr>
   
     <tr>
	  <td><input type="radio" name="Net" value="" > <label>Net Banking</label>&nbsp</td>
  </tr>
    
      <tr>
	   <td> <label> Card.No</label>&nbsp<input type="text" name="cn"></td>
    </tr>
  
    <tr>
	  <td><label>CCV.No</label>&nbsp<input type="text" name="ccv"></td>
    </tr>
    <tr>
	    <td><label>Expire Date</label>&nbsp<input type="Date" name="edate"></td></tr>
      
      <tr>
	    <td><label>Bill Pay Date</label>&nbsp<input type="Date" name="bdate"></td></tr><br><br>
      <tr>
	   <td><center><input type="submit" name="s"></center></td>
     <td><center><input type="submit" name="L" value="logout"></center></td>
   </tr>
   </table>
	 

      <?php
        include('connection.php');
        if(isset($_POST['s']))
        {
   
                echo "<script type=text/javascript>alert('Bill payde...');</script>";        

        }        
        else
        {
                         
                die(mysql_error());

        }

          


                 if(isset($_POST['L']))
                {
                     //header('location:Index.php');
                   echo"hello";
                }    
           ?>

                 
</div>
</center>
</from>
</body>
</html>