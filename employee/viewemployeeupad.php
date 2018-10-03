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
	border:none	;
	font-size:25px;
	
	border-radius:5px;
	box-shadow:4px 4px grey;
}
input[name="btn2"]{
	width:100px;
	background:pink;
	border:none;		;
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

	width:90%;
}
table tr td{}
table tr td:hover{
	
}
	</style>
	
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script>
		function forprint()
		{
			var allcontant = document.body.innerHTML;
			var printcontant = document.getElementById('p').innerHTML;
			document.body.innerHTML = printcontant;
			window.print();
			document.body.innerHTML = allcontant;
		}
	</script>
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min">
	<script src="bootstrap/js/bootstrap.min"></script>-->

</head>
<body style="font-family:sans-serif;" bgcolor="lightyellow">
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
<input type="button" value="Print > >"  style="width:100px;height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px;"  onclick="forprint()">
<div id="p">	
<h3 style="text-align:center;">EMPLOYEE UPAD DETAIL</h3>
<div class="container">
	<table border="1" align="center" class="table table-hover table-responsive"style="text-align:center;"<!--style="text-align:center;width:70%;margin-top:3%"-->
	
	<tr style="text-align:center;">
			<th>Upad Id</th>
			<th>Employee Name</th>
			<th>Upad Date</th>
			<th>Upad Amount</th>
			<th>Edit</th>
			<th>Delete</th>
			
			
	</tr>

<?php	

	$q = "select*from employee_upad";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);
	
	echo "<h3>$num RECORED FOUND</h3>";
	
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$eid = $row['employee_id'];
		$result1 =  mysql_query("select employee_name from employee where employee_id = $eid");
		$row1 = mysql_fetch_array($result1);
?>
		<tr>
			<td><?php echo $row['upad_id'];?></td>
			<td><?php echo $row1['employee_name'];?></td>
			<td align="center"><?php echo $row['upad_date']; ?></td>
			<td><?php echo $row['upad_amount']; ?></td>
			<td>
					<form action="employeeupadedit.php" method="post">
					<input type="text" value="<?php echo $row['upad_id']; ?>" name="upad_id" style="display:none;">
					<input type="submit" value="Edit" name="btn1">
					</form>
			</td>
			<td>
					<form action="employeedeleteupad.php" method="post">
					<input type="text" value="<?php echo $row['upad_id'];?>" name="upad_id" style="display:none;">
					<input type="submit" value="Delete" name="btn2">
					</form>
			</td>
		</tr>
		
	
		
<?php } ?>
	</table>

</div>
</div>
</body>
</html>
