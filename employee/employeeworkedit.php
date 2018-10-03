<?php
	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:htttp://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	$workid = $_POST['work_id'];

	$result = mysql_query("select*from employee_work where work_id = $workid");
	
	//$num = mysql_num_rows($result);
	
	$row = mysql_fetch_array($result);
	
?>
<html>

<head>
<style>
table th,td{
	padding:2% 2%;
	border:none;
	width:30px;
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
<table align="center" border="1" style="margin-top:5%;text-align:center;width:50%;">

<form action="updateemployeework.php" method="post">
						<input type="text" value="<?php echo $row['work_id'];?>" style="display:none;" name="work_id">
<tr>		<th>Date Of Work</th>
			<td><input type="date" value="<?php echo $row['date_of_work']; ?>" required name="date_of_work"></td>
</tr>
<tr>		<th>Sari Or Dress</th>
			<!--<td><input type="radio" name="sari" value="sari">Sari<input type="radio" name="sari" value="dress">Dress</td>-->
			<?php
			if($row['sari_or_dress']==sari)
			{
			echo '<td><input type="radio" value="sari" name="sari" required checked style="margin-left:-100px;">Sari</td><td><input type="radio" value="dress" name="sari" required style="margin-left:-200px;">Dress</td>';
			}
			else
			{
				echo '<td><input type="radio" value="sari" name="sari" required style="margin-left:-100px;">Sari</td><td><input type="radio" value="dress" name="sari" required checked style="margin-left:-200px;">Dress</td>';
			}
		?>
</tr>
<tr>		<th>Type</th>
			<td><input type="text" value="<?php echo $row['type']; ?>" required name="type"></td>
</tr>
<tr>		<th>One Pease Price</th>
			<td><input type="text" value="<?php echo $row['price_of_one_pease'];?>" required name="price_of_one_pease"></td>
</tr>
<tr>		<th>Total Pease</th>
			<td><input type="text" value="<?php echo $row['total_pease'];?>" required name="total_pease"></td>
</tr>
<tr>		<th>Total Amount</th>
			<td><input type="text" value="<?php echo $row['total_price'];?>" required name="total_price"></td>
</tr>

		<!--		<th>Employee</th>
				
				<td><select name="eid" required>-->
			
<?php
	
		
		
	/*$result1 = mysql_query("select * from employee");
	
	$num1 = mysql_num_rows($result1);
	
			for($i=1;$i<=$num1;$i++)
			{
					$row1 = mysql_fetch_array($result1);
?>	
	
							<option value="<?php echo $row1['employee_id'];?>"><?php echo $row1['employee_name'];?></option>

<?php } */?>
			<!--	</select>
				</td>-->

<tr><th><input type="submit" value="Update"></th></tr>
		</form>
</table>
</body>
</html>
