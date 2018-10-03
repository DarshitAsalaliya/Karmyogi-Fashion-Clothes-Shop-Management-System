<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$rowid = $_POST['row_id'];
	
//	$employeeid = $_POST['eid'];

	$ans = mysql_query("delete from row where rid = $rowid"); 
	
	if($ans==1)
		echo "<h1>RECORD DELETED</h1>";
	else
		echo "<h1>SOME PROBLEM OCCURE</h1>";
//	$ans = mysql_query("update employee_work set employee_id = $employeeid where work_id = $workid"); 

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
</html>>