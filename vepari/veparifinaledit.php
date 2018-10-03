<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
//	$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$vid = $_POST['vepari_id'];
	$ename = $_POST['vepari_name'];
	$phone = $_POST['phone_number'];
	$dob = $_POST['date_of_birth'];
	$doj = $_POST['date_of_join'];
	$gender = $_POST['gender'];
	
	$ans = mysql_query("update vepari set vname = '$ename' where vid = $vid");
	$ans = mysql_query("update vepari set phone_number = $phone where vid = $vid");
	$ans = mysql_query("update vepari set dob = '$dob' where vid = $vid");
	$ans = mysql_query("update vepari set doj = '$doj' where vid = $vid");
	$ans = mysql_query("update vepari set gender = '$gender' where vid = $vid");
	
	

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