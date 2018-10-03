<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	
	include("../connection.php");
	mysql_select_db('karmyogifashion');

?>
<html>
<head>


	<title>
		KARMYOGI FASHOIN
	</title>
	<style>
		.forheader{
				width:100%;
				background-color:black;
				height:10%;
				border-bottom:2px solid red;
			}
		.firstul li{
				display:inline-block;
				width:7%;
				float:left;
				margin-top:25px;
				text-align:center;
		}
		.firstul li a{
				text-decoration:none;
				color:white;
				font-size:20px;
				font-family:sans-serif;
		}
		
		.firstul li a:hover{
				
				color:yellow;
				font-size:20px;
		}
		.secondul li{
				display:inline-block;
				float:right;
				margin-top:25px;
				margin-right:2%;
		}
		.secondul li a{
				text-decoration:none;
				color:white;
				font-size:20px;
				font-family:sans-serif;
		}
		.secondul li a:hover{
				
				color:yellow;
				font-size:20px;
		}
		
input[name="btn1"]{
	width:100px;
	background:lightblue;
	border:none		;
	font-size:25px;
	
	border-radius:5px;
	box-shadow:4px 4px grey;
}
input[name="btn2"]{
	width:100px;
	background:pink;
	border:none		;
	font-size:25px;
	
	border-radius:5px;
	box-shadow:4px 4px grey;
	
}
input[type="submit"]:hover{
	border:1px solid red;
	
}
table th,td{
	text-align:center;
	border:none;
}
table{
	border-radius:3%;
	
	
}
table tr td{}
table tr td:hover{
	
}
	</style>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min"></script>
<script>

function fetch(employeeid)
{
	alert('hello');
	var req = XMLHttpRequest();
	
	req.open("get","http://localhost/ajax/searchemployeework.php?eid="+employeeid,true);
	
	req.send();
	
	req.onreadystatechange = function()
	{
		if(req.readystate = 4 && req.status = 200)
		{
			var x = document.getElementsByClassName('search');
			x[0].innerHtml = req.responseText;
		}
	}
}

</script>
</head>
<body style="font-family:sans-serif;">
	<!--<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><a href="../logout.php">Log out</a></li>
		</ul>
	</header>-->
<form action="viewemployeeparticuler.php" method="post"> 
<input type="submit" value="GO"  style="width:100px;height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px;">
<select  style="height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px" name="employee_id">

<option >Select Employee</option>
<?php

$result1 = mysql_query("select * from employee");

$num1 = mysql_num_rows($result1);

for($i=1;$i<=$num1;$i++)
{
	$row1 = mysql_fetch_array($result1);
	
?>
	<option value="<?php echo $row1['employee_id'];?>" ><?php echo $row1['employee_name'];?></option>
<?php } ?>
</select>

</form>
<input type="button" value="Print > >"  style="width:100px;height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px;"  onclick="forprint()">

<div id="p">
<h3 style="text-align:center;margin-left:30%;">ALL EMPLOYEE WORK DETAIL</h3>
	<table border="1" align="center" class="table table-hover table-responsive" style="text-align:center;"><!--style="text-align:center;width:100%;"--> 
	
	<tr>
			<th>Work Id</th>
			<th>Date Of Work</th>
			<th>Employee Name</th>
			<th>Sari Or Dress</th>
			<th>Type</th>
			<th>Color</th>
			<th>One Pease Price</th>
			<th>Total Pease</th>
			<th>Total Amount</th>
			<th>Edit</th>
			<th>Delete</th>
	</tr>
<?php
	$result = mysql_query("select*from employee_work");
	
	$num = mysql_num_rows($result);
	
	echo "<h3>$num RECORED FOUND</h3>";
	
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$eid = $row['employee_id'];
		$result1 = mysql_query("select employee_name from employee where employee_id = $eid");
		$row1 = mysql_fetch_array($result1);
	
?>

		<tr>
			<td ><?php echo $row['work_id']; ?></td>
			<td ><?php echo $row['date_of_work']; ?></td>
			<td ><?php echo $row1['employee_name']; ?></td>
			<td ><?php echo $row['sari_or_dress'] ?></td>
			<td ><?php echo $row['type']; ?></td>
			<td ><?php echo $row['color']; ?></td>
			<td ><?php echo $row['price_of_one_pease']; ?></td>
			<td ><?php echo $row['total_pease']; ?></td>
			<td ><?php echo $row['total_price']; ?></td>
			
			<td>
					<form action="employeeworkedit.php" method="post">
					<input type="text" value="<?php echo $row['work_id']; ?>" name="work_id" style="display:none;">
					
					<input type="submit" value="Edit" name="btn1">
					</form>
			</td>
			<td>
					<form action="employeedeletework.php" method="post">
					<input type="text" value="<?php echo $row['work_id'];?>" name="work_id" style="display:none;">
					<input type="submit" value="Delete" name="btn2">
					</form>
			</td>
		</tr>
		<br>
		
<?php } ?>
<?php

/*if(isset($_POST['SET']))
	{
		
		$eid = $_POST['eid'];
	
		$result2 = mysql_query("select*from employee_work where employee_id = $eid");
		
		$num2 = mysql_num_rows($result2);
		for($j=1;$j<=$num2;$j++)
		{
			$row2 = mysql_fetch_array($result2);
			echo $row2['employee_id'];
		}
	}*/
?>
	</table>
</div>
<script>
function forprint()
{
	var all = document.body.innerHTML;
	var printarea = document.getElementById("p").innerHTML;
	document.body.innerHTML = printarea;
	window.print();
	document.body.innerHTML = all;
}
function hello()
{
	alert('assdf');
}
</script>
</body>
</html>