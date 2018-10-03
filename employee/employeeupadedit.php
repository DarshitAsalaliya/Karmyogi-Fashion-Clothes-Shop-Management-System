<?php
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:htttp://localhost/karm/login.php");
		

	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	$uid = $_POST['upad_id'];
	
	$result = mysql_query("select*from employee_upad where upad_id = $uid");
	
	
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
<form action="employeefinalupadedit.php" method="post">
<table border="1" style="text-align:center;margin-top:5%;width:40%;" align="center">

		<input type="text" value="<?php echo $row['upad_id']; ?>" name="upad_id" style="display:none;">
		<tr><th >Upad Date : </th><td><input type="date" value="<?php echo $row['upad_date']; ?>" required name="upad_date"></td></tr>
		
		<tr><th>Upad Amount  : </th><td><input type="text" value="<?php echo $row['upad_amount']; ?>" required name="upad_amount"></td></td></tr>
		
		<tr>
	<!--	<th>Employee Name</th>
		<td><select name="eid" disabled>
<?php
		/*	$result1 = mysql_query("select*from employee where ");
		
			$num1 = mysql_num_rows($result1);
			
			for($i=1;$i<=$num1;$i++)
			{
				//echo $row1['employee_name'];
				$row1 = mysql_fetch_array($result1);
				
?>
		
			<option value="<?php echo $row1['employee_id']; ?>"><?php echo $row1['employee_name'];?></option>-->
<?php } ?>
		<!--<th>Employee Id : </th><td><input type="text" value="<?php //echo $row['employee_id']; */?>" required name="employee_id"></td></td></tr>-->
		
	<!--	</select> -->
		<tr><th><input type="submit" value="Update"></th></tr>

</table>
</form>
</body>
</html>