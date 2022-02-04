<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>login page</title>
   <style>
      

   #body
   {
       padding-top:50px;
       width: 1300px;
       height: 1000px;
       background-image: url('ad.jpg');
       background-size:1300px 1000px; 
       background-position:cover;
       background-repeat: no-repeat; 
   }
   #loginbox
   {     
          
          width:1300px;
          height:1000px;
          background: transparent;
          margin-left:-70px;
    }
    #img
    {
       padding:50px;
       margin-top:100PX;
         width:100px;
         height:100px;
       
         margin-bottom: 100px;
          margin-right:30px;
          margin-left: 50px;
    }
    #loginbox h1
    {
         margin:0;
         padding: 0;
         text-align: center;
         color: #fff;
    }
    #lable
    {
           font-size:10px;
           color:red; 
    }
    
    #loginbox p
    {
      font-size:20px;
      color: red;
      margin-left:50px;  
    }
    #loginbox input[type="text"],input[type="password"]
    {
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height:20px;
      width:300px; 
      color:#fff;
      margin-left: 50px;
      font-size: 18px;
    }
    #loginbox input[type="submit"]
    {
           color:red; 
           margin-left:60px;
           font-size:22px;

    }
   </style>
   
</head>
<div id="body">

        <div id="loginbox">
         <div id="img"><img src="adm.png"width="150px"height="150px"></div>
        <form action="adminlogin.php"method="POST">
         <h1>Admin Login</h1></br>
           <p>User Name</p> 
           &nbsp&nbsp<input type="text"name="txtname"placeholeder="Enter User Name">
           <p>Password</p>
           &nbsp&nbsp
           <input type="password" name="txtpass"placeholeder="Enter Your Password"></br></br>
           <input type="submit"value="Login" name="login">
        </form>     
        </div> 
</body>
</html>
<?php

   
    include ('connection.php');
    if(!mysql_select_db('smart_village'))
    {
      die(mysql_error());
    }

    if(isset($_POST['login']))
     {
         
       $n=$_POST['txtname'];
       $p=$_POST['txtpass'];
      $query=mysql_query("select * from admin");
      $r=mysql_num_rows($query);
       echo $r;
     while($row=mysql_fetch_array($query))
       {
        
          if(($row['user_name']==$n) && ($row['password']==$p))
          {

            $_SESSION['u']=$n;
            header("location:adminhome.php");
            echo "login success";
          }
          else
          {
              header('location:Index.php');
              echo "incorrect username and password";
          }
      }   
   }
 ?>