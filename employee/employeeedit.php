<?php
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:htttp://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	$eid = $_POST['employee_id'];
	
	$result = mysql_query("select*from employee where employee_id = $eid");
	
	//$num = mysql_num_rows($result);
	
	$row = mysql_fetch_array($result);
?>

<html>
<head>
<style>
table th,td{
	padding:6% 6%;
	border:none;
}
table{
	border-radius:10%;
	box-shadow:10px 10px grey;
}
input[type="submit"]{
	width:100px;
	background:none;
	border:1px solid black		;
	font-size:25px;
	padding:2% 2%;
	border-radius:5px;
}
input[type="submit"]:hover{
	border:1px solid red;
}
</style>	
</head>
<body style="font-family:sans-serif;">
<form action="employeefinaledit.php" method="post">
<table border="1" style="text-align:center;margin-top:5%;width:40%;" align="center">

		<input type="text" value="<?php echo $row['employee_id']; ?>" name="employee_id" style="display:none;">
		<tr><th >Employee Name: </th><td><input type="text" value="<?php echo $row['employee_name']; ?>" required name="employee_name"></td></tr>
		
		<tr><th>Phone Number: </th><td><input type="text" value="<?php echo $row['phone_number']; ?>" required name="phone_number"></td></td></tr>
		
		<tr><th>Date Of Birth: </th><td><input type="date" value="<?php echo $row['date_of_birth']; ?>" required name="date_of_birth"></td></td></tr>
		
		<tr><th>Date Of Join : </th><td><input type="date" value="<?php echo $row['date_of_join']; ?>" required name="date_of_join"></td></td></tr>
		
		<tr><th>Gender       : </th>
		<?php
			if($row['gender']==male)
			{
			echo '<td><input type="radio" value="male" name="gender" required checked>Male</td><td><input type="radio" value="female" name="gender" required>Female</td>';
			}
			else
			{
			echo '<td><input type="radio" value="male" name="gender" required >Male</td><td><input type="radio" value="female" name="gender" required checked>Female</td>';
			}
		?>
		</tr>

		<tr><th><input type="submit" value="Update"></th></tr>

</table>
</form>
</body>
</html>