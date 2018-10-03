<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		

	$date_of_work = $_POST['date_of_work'];
	$sari  =  $_POST['sari'];
	$type = $_POST['type'];
	$one_pease_price = $_POST['one_pease_price'];
	$total_pease = $_POST['total_pease'];
	$total_price = $_POST['total_price'];
	$eid = $_POST['eid'];
	$color = $_POST['color'];
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	/*if($con)
		echo 'connection successess';
	else
		echo 'no connect';*/
		 
	$ans = mysql_query("insert into employee_work values('','$date_of_work','$sari','$type',$one_pease_price,$total_pease,$total_price,$eid,'$color')");


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
	mysql_close($con);	

?>
</body>
</html>