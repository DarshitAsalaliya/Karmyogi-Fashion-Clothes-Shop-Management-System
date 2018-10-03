<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		

	$date_of_work = $_POST['date_of_work'];
	$sari  =  $_POST['sari'];
	$type = $_POST['type'];
	$color = $_POST['color'];
	$one_pease_price = $_POST['one_pease_price'];
	$total_pease = $_POST['total_pease'];
	$total_price = $_POST['total_price'];
	$vid = $_POST['vid'];
	
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	/*if($con)
		echo 'connection successess';
	else
		echo 'no connect';*/
		 
	$ans = mysql_query("insert into vepari_work values('','$date_of_work','$sari','$type','$color',$one_pease_price,$total_pease,$total_price,$vid)");


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