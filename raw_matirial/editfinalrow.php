<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	
//	$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$rowid = $_POST['row_id'];
	$dateofwork = $_POST['date_of_work'];
	$rname = $_POST['row_name'];
	$rprice = $_POST['row_price'];
	
//	$employeeid = $_POST['eid'];

	$ans = mysql_query("update row set rdate = '$dateofwork' where rid = $rowid"); 
	$ans = mysql_query("update row set rname='$rname'  where rid = $rowid"); 
	$ans = mysql_query("update row set ramount=$rprice where rid = $rowid"); 
	
//	$ans = mysql_query("update employee_work set employee_id = $employeeid where work_id = $workid"); 
	if($ans==1)
		echo "<h1>RECORD UPDATED</h1>";
	else
		echo "<h1>SOME PROBLEM OCCURE</h1>";
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

	
?>
</body>
</html>