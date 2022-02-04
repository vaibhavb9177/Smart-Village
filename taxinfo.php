<!DOCTYPE html>
<html>
<head>
   <title>login page</title>
   <style>
   #body
   {
       width: 1300px;
       height: 1000px;
       background-image: url('htax.jpg');
       background-size:1300px 1000px; 
       height:1000px;
       width: 1300px;
       background-position:cover;
       background-repeat: no-repeat; 
   }
   #box
   { 

          padding:90px;
          margin-left: 60px;
          box-shadow: 0 15px 25px rgba(0,0,0,.4);
          border-radius:50px;
          width:800px;
          height:450px;
          background: transparent;

          
         
   }
   #img
   {
         width:40px;
         height:40px;
         transform: translate(40%,-0%);
         transform: translateY(-2%);
          margin-right:30px;
          margin-left: 350px;
   }
   #box p
   {
     color:black;
     margin-left:50px;
     font-size: 18px;
     font-family:sans-serif;
   }
   #box h1
   {
        font-size:30px;
        margin:0;
         padding: 0;
         text-align: center;
         color:white;
         position: center;

    }
   }
   #box input[type="text"]
   {
       margin-left:20px;
       font-size:16px;
       width:200px;
   }
   #box input[type="submit"]
   {
      margin-left:70px;
      font-family: serif;
      font-size:21px;
      color: red;
   }
   #box table
   {
       background-color:violet;
       box-shadow: 0 15px 25px rgba(0,0,0,.4);
        border-radius:10px;
        
      
   }
   td
   {
     color: orange;
   }
   tr
   {
      color:black;
      position: center;
   }
  </style>
</head>
    <div id="body">
          <div id="box">
          <h1>Tax Information</h1>  
          <form action="taxinfo.php" method="POST">
          
          <table border="10" cellpadding="2" cellspacing="2">
            <tr> 
           <th><h2>House Tax </h2></center> </th>

            </tr>  
            <tr>
                 <td><p>House_type id<p></td><td><input type="text" name="txthoi"placeholder="Enter House No"></td>
                  <td><p>Hous_type Name<p></td><td><input type="text" name="txthon"placeholder="Enter House Holder Name"></td>
            </tr>
            <tr>
                  <td><p>squfeet/rate<p></td><td><input type="text" name="txtsquf"placeholder="Enter House No"></td>
            </tr>
            <br>
            <th><center><h2>Water Tax</h2></center></th>
            
            <tr>
                 <td><p>Water_id<p></td><td><input type="text" name="txtwi"placeholder=" Enter House Type_ID"></td>
                 <td><p>Rate<p></td><td><input type="text" name="txtwrate"placeholder="Enter No.of Floor"></td>
           </tr>
         <th><center><h2>Health Tax</h2></center></th>
        
          <tr>
               <td><p>Health id<p></td><td><input type="text" name="txthl"placeholder="Enter House No"></td>
                  <td><p>Rate<p></td><td><input type="text" name="txthrate"placeholder="Enter House Holder Name"></td>
            </tr>
      
         <br>
           <tr>
                 <td><input type="submit" value="insert" name="s"></td>
                 <td><input type="submit" value="Update" name="s"></td>
                 <td><input type="submit" value="Delete" name="s"></td>
           </tr>
          </table>
        </from>
        </div>
      </body>
</html>
<?php
  
    include('connection.php'); 

    if(isset($_POST['s']))
    { 

      $bt=$_POST['s'];
      echo$bt;
      if ($bt=='insert')
       {
        
            $a=$_POST['txthoi'];
            $b=$_POST['txthon'];
            $c=$_POST['txtsquf'];
            $e=$_POST['txtwi'];
            $f=$_POST['txtwrate'];
            $g=$_POST['txthl'];
            $h=$_POST['txthrate'];
      
            $query1=mysql_query("insert into house_tax values('$a','$b','$c')");
            $query2=mysql_query("insert into water_bill values('$e','$f')");
            $query3=mysql_query("insert into health_tax values('$g','$h')"); 
            if($query1 && $query2 && $query3 )
            {
                echo "Saved..";
            }
            else
            {
                die(mysql_error());
            }
        }   
  
        else if($bt=="Delete")
              {
               
                 $a=$_POST['txthoi'];
                 $b=$_POST['txthon'];
                 $c=$_POST['txtsquf'];
                 $e=$_POST['txtwi'];
                 $f=$_POST['txtwrate'];
                 $g=$_POST['txthl'];
                 $h=$_POST['txthrate'];
                 $query1=mysql_query("delete from house_tax where ht_id=$a");
                 $query2=mysql_query("delete from water_bill where w_id =$e");
                 $query3=mysql_query("delete from health_tax where hl_id=$g");
      
              if($query1 && $query2 && $query3)
              {
                  echo "Deleted..";
              }
              else
              {
                  die(mysql_error());
              }
      
      
         }
         else if($bt=="Update")
         {
                 $a=$_POST['txthoi'];
                 $b=$_POST['txthon'];
                 $c=$_POST['txtsquf'];
                 $e=$_POST['txtwi'];
                 $f=$_POST['txtwrate'];
                 $g=$_POST['txthl'];
                 $h=$_POST['txthrate'];
                 $query1=mysql_query("update house_tax set ht_name='$b', squrfeet_rate='$c' where ht_id='$a'");
                 $query2=mysql_query("update water_bill set w_rate='$f' where w_id='$e'");
                 $query3=mysql_query("update health_tax set rate='$h' where hl_id='$g'");
      
              if($query1 && $query2 && $query3)
              {
                  echo "update....";
              }
              else
              {
                  die(mysql_error());
              }
         }
    }
?>