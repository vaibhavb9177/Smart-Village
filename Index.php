<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
 
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
    	 background-image: url('mbi.jpg');
    	 background-size:1300px 1000px; 
    	 height:1000px;
    	 width: 1300px;
    	 background-position:cover;
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
       width:169px;
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
    #box
          {
              width:1300px;
              height:700px;
              
              padding: 0px;

          }
          #slider
          {
            
              float: left;
          }
          #sider
          {
              width:600px;
              height:350px; 
              background-color: green;
              float: right;
          }
          

    </style>
</head>
<body>
	<center>
	  <div id="header">
      <from action="Index.php" metode="POST">
	  	<img src="HE.jpg"width ="1300px"height="250px">
	  </div>
	  <div id="menu">
	  	<ul>
                  <li><a href="?page=Home">HOME</a></li>
                  <li><a href="?page=About">ABOUT US</a></li>
                  <li><a href="?page=Event">EVENTS</a></li>
                  <li><a href="?page=Services">SERVICES</a>

                     <ul>
                          <li><a href="?page=medicals">Hospital & Pharmacy</a></li>
                          <li><a href="?page=mobs">Mobile Shop</a></li>
                          <li><a href="?page=hotels">Hotels</a></li>
                    </ul>
                  </li>
                  <li><a href="?page=Login">LOGIN</a>
                    <ul>
                         
                          <li><a href="?page=Admin">Admin login</a></li>
                    </ul>
                  </li>
                   <li><a>USER</a>
                    <ul><li><a href="?page=userinfo">Bill Info</a></li>
                        <li><a href="complaint.php">Complaint Box</a></li>
                    </ul>
                   </li>
                  <li><a href="?page=show">GOV.SCHEMES</a></li>
             </ul> 
	  </div>
	  	   <div id="mainbody"> 
          
          <?php
          if (empty($_GET['page'])) 
          {
             include ('homepage1.php');
            # code...
          }
          if(isset($_GET['page']) && $_GET['page']=="Home")
          {
                include ('homepage1.php');
          }
           if(isset($_GET['page']) && $_GET['page']=="medicals")
          {
                include ('medicals.php');
          }
           if(isset($_GET['page']) && $_GET['page']=="mobs")
          {
                include ('mobs.php');
          }
           if(isset($_GET['page']) && $_GET['page']=="hotels")
          {
                include ('hotels.php');
          }
           if(isset($_GET['page']) && $_GET['page']=="Admin")
          {
                include ('adminlogin.php');
          }
           if(isset($_GET['page']) && $_GET['page']=="show")
          {
                include ('showpdf.php');
          }
          if(isset($_GET['page']) && $_GET['page']=="userinfo")
          {
                include ('userinfo.php');
          }
          if(isset($_GET['page']) && $_GET['page']=="About")
          {
                include ('aboutus.php');
          }
          if(isset($_GET['page']) && $_GET['page']=="Event")
          {
                include ('event.php');
          }

          ?>
	</div>
</div>
	</center>
</from>
</body>
</html>