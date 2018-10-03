<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$uid = $_POST['upad_id'];
	$udate = $_POST['upad_date'];
	$uamount = $_POST['upad_amount'];
	//$eid = $_POST['employee_id'];
	//echo $eid;
	
	
	$ans = mysql_query("update employee_upad set upad_date = '$udate' where upad_id = $uid");
	$ans = mysql_query("update employee_upad set upad_amount = $uamount where upad_id = $uid");
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