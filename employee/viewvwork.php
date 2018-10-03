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
	padding:2% 2%;
	border-radius:5px;
	box-shadow:4px 4px grey;
}
input[name="btn2"]{
	width:100px;
	background:pink;
	border:none		;
	font-size:25px;
	padding:2% 2%;
	border-radius:5px;
	box-shadow:4px 4px grey;
	
}
input[type="submit"]:hover{
	border:1px solid red;
	
}
table th,td{
	padding:1% 1%;
	border:none;
}
table{
	border-radius:3%;
	box-shadow:5px 5px black
	width:100%;
}
table tr td{}
table tr td:hover{
	background-color:lightyellow;
	background:rgba(0,0,0,0.3);
	border-radius:10px;
	font-size:15px;
	transform:scale(.9);
	transition:.5s;
}
	</style>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min">
	<script src="bootstrap/js/bootstrap.min"></script>
<script>
function forprint()
{
	var all = document.body.innerHTML;
	var printarea = document.getElementById('p').innerHTML;
	document.body.innerHTML = printarea;
	window.print();
	document.body.innerHTML = all;
}
</script>
</head>
<body style="font-family:sans-serif;">
	<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><a href="../logout.php">Log out</a></li>
		</ul>
	</header>
	<input type="button" value="Print > >"  style="width:100px;height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px;"  onclick="forprint()">
<div id="p">
	<table border="1" align="center" style="text-align:center;width:100%;">
	
	<tr>
			<th>Work Id</th>
			<th>Date Of Work</th>
			<th>Employee Name</th>
			<th>Sari Or Dress</th>
			<th>Type</th>
			<th>One Pease Price</th>
			<th>Total Pease</th>
			<th>Total Amount</th>
			<th>Edit</th>
			<th>Delete</th>
	</tr>
<?php
	$result = mysql_query("select*from employee_work");
	
	$num = mysql_num_rows($result);
	
	echo "<h1>$num RECORED FOUND</h1>";
	
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$eid = $row['employee_id'];
		$result1 = mysql_query("select employee_name from employee where employee_id = $eid");
		$row1 = mysql_fetch_array($result1);
	
?>

		<tr>
			<td><?php echo $row['work_id']; ?></td>
			<td><?php echo $row['date_of_work']; ?></td>
			<td><?php echo $row1['employee_name']; ?></td>
			<td><?php echo $row['sari_or_dress'] ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['price_of_one_pease']; ?></td>
			<td><?php echo $row['total_pease']; ?></td>
			<td><?php echo $row['total_price']; ?></td>
			
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
	</table>
</div>
</body>
</html>