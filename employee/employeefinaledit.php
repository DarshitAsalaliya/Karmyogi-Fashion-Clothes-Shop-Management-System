<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$eid = $_POST['employee_id'];
	$ename = $_POST['employee_name'];
	$phone = $_POST['phone_number'];
	$dob = $_POST['date_of_birth'];
	$doj = $_POST['date_of_join'];
	$gender = $_POST['gender'];
	
	$ans = mysql_query("update employee set employee_name = '$ename' where employee_id = $eid");
	$ans = mysql_query("update employee set phone_number = $phone where employee_id = $eid");
	$ans = mysql_query("update employee set date_of_birth = '$dob' where employee_id = $eid");
	$ans = mysql_query("update employee set date_of_join = '$doj' where employee_id = $eid");
	$ans = mysql_query("update employee set gender = '$gender' where employee_id = $eid");
	
	

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