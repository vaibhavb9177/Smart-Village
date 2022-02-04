
<style>
	     #box
       {   
          padding: 20px;
          margin-bottom:100px;
                   
          background-image: url('pdf.jpg');
          background-size:1300px 1000px; 
          height:1000px;
          width: 1300px;
          background-position:cover;
          background-repeat: no-repeat;
       }      
       }
       table
       {
          background-color:#455a64;
          height:0px;
          width:500px; 



       }
       th
       {
           background-color:#b0bec5; 
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
       
       #body
       {
                 
            width:1300px;
            height:auto;
                       
       }
       h1
       {
          font-family: sans-serif;
          color:white;
       }
</style>
<div id="body">
  <div id="box">
<center><h1> Government Schemes </h1></center> 
<center>
<?php
include ('connection.php');
$q=mysql_query("select * from imgpdf ");


echo"<table cellpadding=5>";

  echo "<tr>";
  echo	"<th>Id</th><th>Details</th><th>Download</th>";
  echo "</tr>";
while ($r=mysql_fetch_array($q)) {
	# code...
   echo"<tr>";
	echo "<td>".$r['imgid']."</td>"."<td>".$r['details']."</td>"."<td>"."<a href=s.php?file=".urlencode($r['iname'])."   target=_blank><center>Show..</a><center>"."</td>";
	echo"</tr>";
}
echo"</table>";
?>
</div>
</div>
</center>