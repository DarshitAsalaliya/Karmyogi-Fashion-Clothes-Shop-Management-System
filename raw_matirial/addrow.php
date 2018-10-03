<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		

	$date_of_work = $_POST['date_of_work'];
	
	$type = $_POST['type'];
	
	$total_price = $_POST['total_price'];
	
	$vid = $_POST['vid'];
	
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	/*if($con)
		echo 'connection successess';
	else
		echo 'no connect';*/
		 
	$ans = mysql_query("insert into row values('','$date_of_work','$type',$vid,$total_price)");


?>
	<html>
<head>
<style>
h1{
	text-align:center;
	font-family:sans-serif;
	color:green;
}

</style>
</head>
<body>
<?php 
	if($ans==1)
	{

		 echo "<h1>RECORED INSERTED</h1>";
	}
	else
	{
		echo "<center><h1>MAY BE YOUR GIVEN VALUE WRONG</h1></center>";
	}
	mysql_close($con);	

?>
</body>
</html>