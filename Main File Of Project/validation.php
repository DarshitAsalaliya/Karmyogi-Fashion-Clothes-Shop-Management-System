<?php 
	
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//$con = mysql_connect('localhost','root');
	include("connection.php");
	mysql_select_db('karmyogifashion');
	
	if(!$con)
		echo 'connect can not connect';
	else 
		echo 'connection successfully';
		
	$q = "select * from admin where admin_name = '$username' and admin_password = '$password'";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);
	
	if($num==1)
	{
		$_SESSION['username'] = $username;
		header("location:http://localhost/karm/task.php");}
	else
	{	header("location:http://localhost/karm/login.php");}
 
?>