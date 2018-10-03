<?php
	
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
		
	$mid = $_POST['maintance_id'];
	$mname = $_POST['maintance_name'];
	$mdate = $_POST['maintance_date'];
	$mamount = $_POST['maintance_amount'];
	//$eid = $_POST['employee_id'];
	//echo $eid;
	
	
	$ans = mysql_query("update maintance set maintance_date = '$mdate' where maintance_id = $mid");
	$ans = mysql_query("update maintance set maintance_name = '$mname' where maintance_id = $mid");
	$ans = mysql_query("update maintance set maintance_amount = $mamount where maintance_id = $mid");
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