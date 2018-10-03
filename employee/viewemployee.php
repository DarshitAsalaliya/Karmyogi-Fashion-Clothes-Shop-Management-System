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
		.fortable tr td{width:20Px;}
		
input[name="btn1"]{
	width:100px;
	background:lightblue;
	border:none;
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
	<!--box-shadow:5px 5px black;-->
	width:100%;
}
table tr td{
padding:10px 10px;}
}
	</style>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min"></script>
<script>
function forprint()
{
	var restor = document.body.innerHTML;
	var printarea = document.getElementById('p').innerHTML;
	document.body.innerHTML = printarea;
	window.print();
	document.body.innerHTML = restor;
}
</script>
</head>
<body style="font-family:sans-serif;" bgcolor="lightyellow">
<!--	<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><a href="../logout.php">Log out</a></li>
		</ul>
	</header>-->
	<button  class="btn btn-warning"style="width:50px;height:50px;border-radius:5px;float:right;margin-top:10px;margin-right:20px;font-size:18px;"  onclick="forprint()"><i class="glyphicon glyphicon-print"></i></button>
	
<div id="p">

<h3 style="text-align:center;" class="well">EMPLOYEE DETAIL</h3>


	<table border="1" class="table-hover table-responsive col-md-12 col-sm-12 col-xs-12"<!--style="text-align:center;margin-top:3%;" class="fortable"--> 
	
	<tr>
			<th>Employee Id</th>
			<th>Employee Name</th>
			<th>Phone Number</th>
			<th>Date Of Birth</th>
			<th>Date Of Join</th>
			<th>Gender</th>
			<th>Total Work</th>
			<th>Total Upad</th>
			<th>Payble Money</th>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
			
	</tr>

<?php	
	$q = "select*from employee";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);
?>
	<h3> <?php echo $num;?> RECORED FOUND</h3>
<?php
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$image = $row['image'];
		$eid = $row['employee_id'];
		$result1 = mysql_query("select sum(total_price) from employee_work where employee_id = $eid");
		$result2 = mysql_query("select sum(upad_amount) from employee_upad where employee_id = $eid");
		$sum1 = mysql_fetch_array($result1);
		$sum2 = mysql_fetch_array($result2);
		$sum3 = $sum1[0] - $sum2[0];
		if(empty($sum1[0]))
		{
			$sum1[0] = 0;
			
		}
		if(empty($sum2[0]))
		{
			$sum2[0] = 0;
			
		}
		if(empty($sum3))
		{
			$sum3 = 0;
			
		}
		//$path = $row['image'];
?>
		<tr >
			<td align="center"><?php echo $row['employee_id']; ?></td>
			<td><?php echo $row['employee_name'] ?></td>
			<td><?php echo $row['phone_number']; ?></td>
			<td><?php echo $row['date_of_birth']; ?></td>
			<td><?php echo $row['date_of_join']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $sum1[0]; ?></td>
			<td><?php echo $sum2[0]; ?></td>
			<td><?php echo $sum3; ?></td>
			<td><img src="../photos/<?php echo $image;?>" width="100px" height="100px" style="border-radius:10px;"></td>
			<form action="employeeedit.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['employee_id']; ?>" name="employee_id" style="display:none;">
				<!--	<input type="submit" value="Edit" name="btn1">-->
				<button name="btn1" type="submit" class="btn btn-primary"style="width:50px;height:50px;border-radius:5px;"><i class="glyphicon glyphicon-pencil"></i></button>
				
			</td>
			</form>
			<form action="employeedelete.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['employee_id'];?>" name="employee_id" style="display:none;">
					<button type="submit" name="btn2" style="width:50px;height:50px;border-radius:5px;" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
					<!--<input type="submit" value="Delete" name="btn2">-->
					
			</td>
			</form>
			
			
		</tr>
	
		
<?php } ?>
	</table>
</div>

</body>
</html>
