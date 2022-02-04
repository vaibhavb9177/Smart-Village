<!DOCTYPE html>
<html>
<head>
   <title>login page</title>
   <style>
      #container
   {
       height: 1000px;
       width:auto;
       margin-top: 11px;
    }
    #header
    {
      height: 250px;
      width: 1300px;
      background-color:red;
    }
   #menu
   {
      height:50px;
      width:1300px; 
      background-color:pink;  
   }
   ul
   {
       float: left;
      list-style-type: none;
      margin-left:10px; 

   }
   ul li
   {
      display: inline-block;

   }
   ul li a
   {
      text-decoration: none;
      color: black;
      padding: 5px 20px;
      border: 1px solid transparent ;
      letter-spacing: 2px;
      word-spacing: 10px;
      margin-left:60px; 

   }
   ul li a:hover
   {
      background-color: #fff;
      color: black;
   }
   #mainbody
   {
      height:600px;
      width:1300px;
      background-color:yellow;

   }
   #footer
   {
      height:100px;
      width:1300px;
      background-color:navy;  
   }
   #loginbox
   {
          position:absolute;
          top:50%;
          left: 50%;
          transform: translate(-50%,10%); 
          width:500px; 
          background: rgba(0,0,0,.8);
          box-sizing: border-box;
          box-shadow: 0 15px 25px rgba(0,0,0,.4);
          border-radius:10px;
          margin-bottom:200px; 
          width:500px;
          height:500px;  
    }
    #img
    {
         width:100px;
         height:100px;
         transform: translate(40%,-0%);
         transform: translateY(-60%);
         
          margin-right:30px;
          margin-left: 165px;
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
           margin-left:170px;
           font-size:22px;

    }
    #placeholder
    {
      color:#fff;
    }
    #loginbox a
    {
      font-size:22px; 
      margin-left:130px;
      color: yellow; 
    }
   </style>
</head>
<body>
     <div id="header">
      <img src="HE.JPG"height="250px"width="1300px"></div>
      <div id="menu">
            <ul>
               <li><a href="#">HOME</a></li>
               <li><a href="#">ABOUT US</a></li>
               <li><a href="#">EVENTS</a></li>
               <li><a href="#">SERVICES</a></li>
               <li><a href="#">LOGIN</a></li>
               <li><a href="#">DOWNLOAD</a></li>
            </ul>
      </div>
      <div id="mainbody"><img src="rv.jpg"width="1300px"height="600px"> 
        <div id="loginbox">
         <div id="img"><img src="login.png"width="150px"height="150px"></div>
        <form>
         <h1>User Login</h1></br>
           <p>User Name</p> 
           &nbsp&nbsp<input type="text"name=""id""placeholeder="Enter User Name">
           <p>Password</p>
           &nbsp&nbsp
           <input type="password" name=""id""placeholeder="Enter Your Password"></br></br>
           <input type="submit" name="" value="Login"></br></br>
           <a href="#">New Registration</a>
           <
        </form>     
        </div>
      </div>
      <div id="footer"></div>
</body>
</html>