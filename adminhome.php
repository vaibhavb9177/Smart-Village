<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Homepage</title>
	<style>
          
	#container
	{
		height:1000px;
		width:auto; 
	}
    #header
    {
    	width:1300px;
    	height: 250px; 
    }
    #mainbody
    {
    	 
    	  background-image: url('admin.jpg');
    	 background-size:1300px 700px; 
    	 height:1000px;
    	 width: 1300px;
    	 background-position:center;
    	 background-size: cover;
    	 background-repeat: no-repeat; 
    
    }

    #mainbody #menu
    {
        width:1300px;
        height:50px;
        background-color:grey;   
    }
    #menu ul
    {
      padding: 0px;
      margin-left: -3px; 
      font-family: sans-serif;
      background:rgb(0,0,0,0.5); 
      list-style: none; 
    }
    #menu ul li
    {
       float: left;
       background-color:grey;
       width:200px;
       height: 50px;
       line-height: 50px;
       font-size:20px;   
       list-style: none;
       text-align:center; 
       margin-left:20px;
       text-decoration-color:yellow; 
    }
    #menu ul li ul
    {
      display: none;
    }
    #menu ul li:hover>ul
    {
       display:block;

    }
    #menu ul li:hover
    {
      background-color:red;
      transition: 2s ease;
      position: relative;
      
    }
    #menu a
    {
       color: white;
    }
</style>
</head>
<body>
	<center>
	
	  <div id="header">
	  	<img src="HE.jpg"width ="1300px"height="250px">
	  </div>
	  <div id="menu">
	  	<ul>
                  <li><a href="adminhome.php?page=houseinfo">ADD HOUSE INFO</a></li>
                  <li><a href="adminhome.php?page=taxinfo">CREAT TAX</a></li>
                  <li><a href="adminhome.php?page=billinfo3">BILL INFO</a>
                    <ul>
                       <li><a href="adminhome.php?page=showcomplaint">Show Complaints</a></li>
                    </ul>

                  </li>
                  <li><a href="adminhome.php?page=uploadimg"> MANAGE SERVICES</a></li>
                  <li><a href="adminhome.php?page=uploadpdf">GOV.SCHEMES</a></li>
                  <li><a href="adminhome.php?page=logout">LOG OUT</a></li>
             </ul> 
	  </div>
	  <div id="mainbody">
	  	
          <?php
         
      
            
            if(isset($_GET['status']))
            {
              echo "<script type=text/javascript>alert('Record Saved...');</script>";
            }

             if($_SESSION['u']==true)
             {
              if (isset($_GET['page'])) 
              {
				
			           	$p=$_GET['page'];
			          	$fp=$p.'.php';
			          	include($fp);
			        }

            
            }
            else
            {
                 header('location:Index.php');
            }
           
          ?>

	  </div>
	</center>
   
</body>
</html>