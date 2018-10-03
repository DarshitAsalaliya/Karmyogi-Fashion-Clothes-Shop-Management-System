<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$workid = $_POST['work_id'];
	$dateofwork = $_POST['date_of_work'];
	$sariordress = $_POST['sari'];
	$type = $_POST['type'];
	$priceofonepease = $_POST['price_of_one_pease'];
	$totalpease = $_POST['total_pease'];
	$totalprice = $_POST['total_price'];
//	$employeeid = $_POST['eid'];

	$ans = mysql_query("update employee_work set date_of_work = '$dateofwork' where work_id = $workid"); 
	$ans = mysql_query("update employee_work set sari_or_dress='$sariordress'  where work_id = $workid"); 
	$ans = mysql_query("update employee_work set type='$type' where work_id = $workid"); 
	$ans = mysql_query("update employee_work set price_of_one_pease = $priceofonepease where work_id = $workid"); 
	$ans = mysql_query("update employee_work set total_pease = $totalpease where work_id = $workid"); 
	$ans = mysql_query("update employee_work set total_price = $totalprice where work_id = $workid"); 
//	$ans = mysql_query("update employee_work set employee_id = $employeeid where work_id = $workid"); 
if($ans==1)
		echo "<h1>RECORD UPDATED</h1>";
?>
<html>
<head>
<style>
h1{
	text-align:center;
	font-family:sans-serif;
}
<style>
</head>
<body>
<?php

	if($ans==1)
		echo "<h1>RECORD UPDATED</h1>";
	else
		echo "<h1>SOME PROBLEM OCCURE</h1>";
?>
</body>
</html>