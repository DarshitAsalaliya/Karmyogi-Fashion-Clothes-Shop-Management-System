<?php
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
	
	
	$con=mysql_connect("localhost","root");
	mysql_select_db("karmyogifashion");
	
	//if($con)
		//echo "conneted";
?>