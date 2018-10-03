<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$pid = $_POST['payment_id'];
	$pdate = $_POST['payment_date'];
	$pamount = $_POST['payment_amount'];
	//$eid = $_POST['employee_id'];
	//echo $eid;
	
	
	$ans = mysql_query("update vepari_payment set payment_date = '$pdate' where payment_id = $pid");
	$ans = mysql_query("update vepari_payment set payment_amount = $pamount where payment_id = $pid");
	//$ans2 = mysql_query("update employee_upad set employee_id = $eid where upad_id = $uid");
	
	

		
	
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

		 echo "<h1>RECORED UPDATED</h1>";
	}
	mysql_close($con);	

?>
</body>
</html>