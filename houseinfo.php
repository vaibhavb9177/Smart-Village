<!DOCTYPE html>
<html>
<head>
   <title>login page</title>
   <style>
   #body
   {
       width: 1300px;
       height: 1000px;
       background-image: url('home.jpg');
       background-size:1300px 1000px; 
       height:1000px;
       width: 1300px;
       background-position:cover;
       background-repeat: no-repeat; 
   }
   #box
   { 
          
          padding:150px;
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
          margin-right:370px;
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
   table
   {
       background-color:skyblue;
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
   }
  </style>
</head>
    <div id="body">
           <div id="box">
          <div id="img"><img src="himg.png"width="90px"height="90px"></div>
          <form action="houseinfo.php"method="POST"><br><br><br>
            <h1>House Information</h1><br>
          <center>  
          <table border="2">
            <tr>
                 <td><p>House No<p></td><td><input type="text" name="txthno"placeholder="Enter House No"></td>
                  <td><p>House Holder Name<p></td><td><input type="text" name="txthhn"placeholder="Enter House Holder Name"></td>
            </tr>
            <tr>
                 <td><p>House Type<p></td><td>&nbsp RCC<input type="radio" name="txtrde" value="11">&nbsp MUD<input type="radio" name="txtrde" value="12"></td>
                  <td><p>No Of Floor<p></td><td><input type="text" name="txtf"xtplaceholder="Enter No.of Floor"></td>
           </tr>
           <tr>
                 <td><p>Area<p></td><td><input type="text" name="txtarea"placeholder="Enter Area"></td>
                 <td><p>No Of Water Connection<p></td><td><input type="text" name="txtwc"placeholder="Enter Water Connection"></td>
           </tr>
           <tr>
                 <td><p>Light Bill<p></td><td><input type="text" name="txtlight"></td>
                 <td><p>Contact No<p></td><td><input type="text" name="txtcon"placeholder="Enter Contact"></td>
           </tr>
           <tr>
                 <td><input type="submit" value="Insert" name="s"></td>
                 <td><input type="submit" value="Delete" name="s"></td>
                 <td><input type="submit" value="Update" name="s"></td>
                 <td><input type="submit" value="Select" name="s"></td>
           </tr>
          </table>
        </center>
        </from>
        </div>
      </body>
</html>
<?php
include('connection.php');
    if(isset($_POST['s']))
    {
      $bt=$_POST['s'];
      echo $bt;
      $tid=$_POST['txtrde'];
      if($bt=="Insert")
      {
        $a=$_POST['txthno'];
        $b=ucwords($_POST['txthhn']);
        $c=$_POST['txtf'];
        $d=$_POST['txtarea'];
        $e=$_POST['txtwc'];
        $f=$_POST['txtlight'];
        $g=$_POST['txtcon'];
        $query=mysql_query("insert into house_info values('$a','$b','$tid','$c','$d','$e','$f','$g')");
      
        if($query)
        {
          //echo "Saved..";
         
          //echo "<script type=text/javascript>alert('Record Saved...');</script>";
          header("location:adminhome.php?page=houseinfo&status=1");
        }
        else
        {
        die(mysql_error());
          header("location:adminhome.php?page=houseinfo&status=2");
        }
  
      }
      else if($bt=="Update")
      {
            
            $a=$_POST['txthno'];
            $b=$_POST['txthhn'];
            $c=$_POST['txtf'];
            $d=$_POST['txtarea'];
            $e=$_POST['txtwc'];
            $f=$_POST['txtlight'];
            $g=$_POST['txtcon'];
            $query=mysql_query("update house_info set holder_name='$b',floors='$c',area='$d',water_connection='$e',light_bill='$f',contact='$g' where house_no=$a");
  
            if($query)
            {
                echo "Updated..";
              }
            else
            {
              die(mysql_error());
            }
     
         }
         else if($bt=="Delete")
         {
              
               $a=$_POST['txthno'];
               $b=$_POST['txthhn'];
               $c=$_POST['txtf'];
               $d=$_POST['txtarea'];
               $e=$_POST['txtwc'];
               $f=$_POST['txtlight'];
               $g=$_POST['txtcon'];              

               $query=mysql_query("delete from house_info where house_no=$a");
      
               if($query)
               {
                    echo "Deleted..";
               }
              else
               {
                   die(mysql_error());
               }
              
      
          }
      
    } 
          
?>