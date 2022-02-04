<?php
$cn=mysql_connect("localhost","root");

	if(!$cn)
	{

		die(mysql_error());
	}
	else
	{
		//echo "Connected....";
	}
	mysql_select_db('smart_village');
?>