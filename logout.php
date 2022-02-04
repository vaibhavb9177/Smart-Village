<?php
session_start();
if($_SESSION['u']==true)
{

	
	header("location:adminhome.php");
	session_destroy();
}
else
{
	header('location:Index.php');
}
?>
