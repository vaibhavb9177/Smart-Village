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
      height:900px;
      width:1300px;
      background-color:yellow;

   }
   #box
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
          height:700px;
          color:grey;   
   }
   #img
   {
         width:100px;
         height:100px;
         transform: translate(40%,-0%);
         transform: translateY(-60%);
         
          margin-right:30px;
          margin-left: 150px;
   }
   #box h1
   {
        color:white;
        margin-left:130px;
        margin-right:30px;
   }
   #box p
   {
     color:white;
     margin-left:100px;
     font-size: 20px;
   }
   #box input[type="text"]
   {
       margin-left:100px;
       font-size:16px;
       width:200px;
   }
   #box input[type="submit"]
   {
      margin-left:200px;
      font-family: serif;
      font-size:22px;
      color: black;
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
      <div id="mainbody"><img src="rgb.jpg"width="1300px"height="900px">
        <div id="box">
          <form>
            <div id="img"><img src="rgim.png"width="150px"height="150px"></div>
             <h1>Registration Form</h1>
            <p>First Name</p>
          <input type="text" name="">
            <p>Last Name</p>
          <input type="text" name="">
            <p>E-mail</p>
          <input type="text" name="">
            <p>Contact</p>
          <input type="text" name="">
            <p>Addresse</p>
          <input type="text" name=""></br></br>
          <input type="submit" name=""value="Submit">
          </form>
        </div>
      </div>
      </body>
</html>