<?php

	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	$pid = $_POST['payment_id'];

	$ans = mysql_query("delete from vepari_payment where payment_id = $pid");
	
	
?>
	<html>
<head>
<style>
h1{
	text-align:center;
	font-family:sans-serif;
	color:red;
}

</style>
</head>
<body>
<?php 
	if($ans==1)
	{

		 echo "<h1>RECORED DELETED</h1>";
	}
	else
	{
		echo "<h1>YOU CAN NOT DELETE THIS RECORD .<h1>";
	}
	mysql_close($con);	

?>
</body>
</html>