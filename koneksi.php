<?php 
	$host ="localhost";
	$username = "root";
	$pass = "";
	$database = "login";
	$conn = mysql_connect($host,$username,$pass,$database) or die(mysql_error());
	mysql_select_db($database,$conn) or die(mysql_error());

 ?>