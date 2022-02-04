<!DOCTYPE html>
<html>
<head>
  <title>billing information</title>
  <style>
       body
       {
         margin-top: 150px;
       }   
       table
       {
          background-color:pink;
          height:0px;
          width:500px; 

       }
       th
       {
           background-color: orange; 
       }
       td
       {
          background-color: white;
          text-decoration:color:red; 
          width: 50px;

       }
       p
       {
         color: black;
         font-size:20px; 
       }
       input[type="submit"]
       {
            color:red;

       }
       h
       {
         color:red;
       }
       #body
       {
            width:500px;
            height:auto;
            
       }
  </style>
</head>
<body>

<form action="billinfouser.php" method="POST">

 <center>
  <p> ENTER HOUSE NO </p> <input type="text" name="txthn">
 </center><br>

 <center> <input type="submit" name="s"> </center><br><br>
 <center>  
 <div id="body"> <h1> Bill Information </h1> 
   <?php

  include('connection.php');

    if(isset($_POST['s']))
    {
      
      $n=$_POST['txthn'];
      $query=mysql_query("select * from house_info where house_no=$n");
      echo "<center>";
      echo "<table border=0 cellpadding=10 cellspecing=6>";
      while ($r=mysql_fetch_array($query)) 
      {
        $details[]=$r;
         echo "<tr>";
         echo "<td colspan=6> House Holder Name -".$r['holder_name']."</td>";
       echo "</tr>";

      }
      echo "</br>";
           $id=$details[0]['house_type'];
           $query1=mysql_query("select * from house_tax where ht_id=$id");
           //echo "<table border=2 cellpadding=6 cellspecing=5>";
           echo "<tr>";
           echo "<th colspan=6> House Tax information </th>";
           echo "</tr>";
           echo "<tr><th>house type</th><th>house rate</th><th>Area</th><th>Floors</th><th>Total</th><tr>";

            $query3=mysql_query("select * from house_info where house_no=$n");

           while($r=mysql_fetch_array($query1) )
           {
            echo "<tr>";
                 $rate[]=$r;
                 echo "<td>".$r['ht_name']."</td>"."<td>".$r['squrfeet_rate']."</td>";
                  while($a=mysql_fetch_array($query3))
                  { 
                    echo"<td>".$a['area']."</td>";
                    echo"<td>".$a['floors']."</td>";
                    
                }
                 $ht=$rate[0]['squrfeet_rate'];
          $total=$ht*$details[0]['area']*$details[0]['floors'];
         echo"<td>".$total."</td>";
         echo "</tr>";  
           }    
              
         
           echo "</center>";
          echo "<br>";
         
            $query2=mysql_query("select * from water_bill where w_id");
             $query4=mysql_query("select * from house_info where house_no=$n");

            echo "<table border=0 cellspecing=6 cellpadding=6>";
            echo "<tr><th colspan=5>Water Tax Information</th></tr>";
            echo "<tr><th>water connection</th><th>water rate</th><th>total</th><tr>";

            echo"<tr>";

            while ($b=mysql_fetch_array($query4))
            {  
                     
                    echo "</tr>";
                    echo "<td>".$b['water_connection']."</td>";
                    
            
                   while ($w=mysql_fetch_array($query2)) 
                  {
                      $wrate[]=$w;
                      echo "<td>".$w['w_rate']."</td>";
                  
                      
                   }
                    $ht=$wrate[0]['w_rate'];
                   $wtotal=$ht*$details[0]['water_connection'];
          
                 echo "<td>".$wtotal."</td>";
                echo "</tr>";

             }
             echo "</table>";
              $query6=mysql_query("select * from house_info where house_no=$n");
              $query7=mysql_query("select * from health_tax where hl_id");

            echo "<table border=0 cellspecing=6 cellpadding=6>";
            echo "<tr><th colspan=5>Light Tax & Health Tax Information</th></tr>";
            echo "<tr><th>Light Tax</th><th>Health Tax</th><th>total</th><tr>";

            echo"<tr>";

            while ($b=mysql_fetch_array($query6))
            {  
                     
                    echo "</tr>";
                    echo "<td>".$b['light_bill']."</td>";
                    
            
                   while ($h=mysql_fetch_array($query7)) 
                  {
                      $hrate[]=$h;
                      echo "<td>".$h['rate']."</td>";
                  
                      
                   }
                    $ht=$hrate[0]['rate'];
                   $htotal=$ht+$details[0]['light_bill'];
          
                 echo "<td>".$htotal."</td>";
                echo "</tr>";

             }
             echo "</table>";
            echo "<table border=0 cellpadding=6 cellspecing=10>";
            echo "<tr>";
           echo "<th colspan=6> Total Tax Bill  Information </th>";
           echo "</tr>";
              $atotal=$total+$wtotal+$htotal;
             echo"<td colspan=6>" .$atotal."</td>";
             echo "</table>";
    }   
?>

 </div>
</center>

</form>

</body>
</html>