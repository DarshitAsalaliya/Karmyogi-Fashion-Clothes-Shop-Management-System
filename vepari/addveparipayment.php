<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
		
	$paymentdate = $_POST['payment_date'];
	$paymentamount = $_POST['payment_amount'];
	$vid = $_POST['vid'];
	
	
	include("../connection.php");
	//$con=mysql_connect("localhost","root");
	mysql_select_db("karmyogifashion");
	/*if(!$con)
		echo 'connect can not connect';
	else 
		echo 'connection successfully';*/
		
	$ans = mysql_query("insert into vepari_payment values('','$paymentdate',$paymentamount,$vid)");
	
	
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
<?php 
	if($ans==1)
	{

		 echo "<h1>RECORED INSERTED</h1>"; ?>	
	
	
<?php	} mysql_close($con);	

?>
