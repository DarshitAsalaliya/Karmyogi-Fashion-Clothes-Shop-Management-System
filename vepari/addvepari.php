<?php
	
session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	
	$vepari_name = $_POST['vepari_name'];
	$phone_number = $_POST['phonenumber'];
	$date_of_birth = $_POST['dob'];
	$date_of_join = $_POST['doj'];
	$f = $_FILES['file'];
	$gender = $_POST['gender'];
	$filename = $_FILES['file']['name'];
	move_uploaded_file($f["tmp_name"],"D:/wamp/www/karm/photos/".$f['name']);
	include("../connection.php");
	//$con = mysql_connect("localhost","root");
	mysql_select_db("karmyogifashion");
	/*if(!$con)
		echo 'connect can not connect';
	else 
		echo 'connection successfully';*/
		
	$ans = mysql_query("insert into vepari values (null,'$vepari_name','$phone_number','$date_of_birth','$date_of_join','$gender','$filename')");
	
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

