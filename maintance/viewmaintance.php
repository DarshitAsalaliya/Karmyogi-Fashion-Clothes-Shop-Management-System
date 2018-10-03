<?php

session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
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
	border:none;
	font-size:20px;
	
	border-radius:5px;
	box-shadow:4px 4px grey;
}
input[name="btn2"]{
	width:100px;
	background:pink;
	border:none		;
	font-size:20px;
	
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
table tr td{text-align:center}
table tr td:hover{
	
}
	</style>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min"></script>
	<script src="bootstrap/js/jquery.min.js"></script>
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
	</style>
</head>
<body style="font-family:sans-serif;">
	<!--<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><a href="../logout.php">Log Out</a></li>
		</ul>
	</header>-->
	<input type="button" value="Print > >"  style="width:100px;height:40px;border-radius:5px;float:right;margin-top:20px;margin-right:20px;font-size:18px;"  onclick="forprint()">
<div id="p">
<h3 style="text-align:center;">MAINTANAC DETAIL</h3>
	<table border="1" class="table table-hover table-responsive">
	
	<tr>
			<th>Date</th>
			<th>Maintance Name</th>
			<th>Amount</th>
			<th>Edit</th>
			<th>Delete</th>
			
	</tr>
<?php

	//$con = mysql_connect('localhost','root','','karmyogifashion');
	include("../connection.php");
	mysql_select_db('karmyogifashion');
	
	/*if($con)
	{
		echo 'connected';
	}
	else
	{
		echo 'not connected';
	}*/

	$result = mysql_query("select*from maintance");
	
	$num = mysql_num_rows($result);
	echo "<h3>$num RECORD FOUND</h3>";
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
	
?>

	
		<tr>
			<td align="center"><?php echo $row['maintance_date']; ?></td>
			<td><?php echo $row['maintance_name'] ?></td>
			<td><?php echo $row['maintance_amount']; ?></td>
			<form action="maintanceedit.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['maintance_id']; ?>" name="maintance_id" style="display:none;">
					<input type="submit" value="Edit" name="btn1">
				
			</td>
			</form>
			<form action="maintancedelete.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['maintance_id'];?>" name="maintance_id" style="display:none;">
					<input type="submit" value="Delete" name="btn2">
					
			</td>
			</form>
		</tr>
		<br>
		
<?php } ?>
	</table>
</div>
</body>
</html>