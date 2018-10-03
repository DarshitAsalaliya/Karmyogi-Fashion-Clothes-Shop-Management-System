<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
		
	$date = $_POST['date'];
	$mname = $_POST['mname'];
	$amount = $_POST['total_amount'];
	
	
	include("../connection.php");
	//$con=mysql_connect("localhost","root");
	mysql_select_db("karmyogifashion");
	/*if(!$con)
		echo 'connect can not connect';
	else 
		echo 'connection successfully';*/
		
	$ans = mysql_query("insert into maintance values('','$date','$mname',$amount)");

	if($ans==1)
		header("location: http://localhost/karm/insertmsg.php");
		
	mysql_close($con);
?>
