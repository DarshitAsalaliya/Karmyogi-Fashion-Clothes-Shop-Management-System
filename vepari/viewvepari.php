<?php

	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
	//$con = mysql_connect('localhost','root');
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
	
	border:none;
}
table{
	border-radius:3%;
	
}
table tr td{}
table tr td:hover{
	
	border-radius:10px;
	
	

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
<h3 style="text-align:center;">VEPARI DETAIL</h3>
	<table border="1" align="center" class="table table-hover table-responsive"style="text-align:center"><!--style="text-align:center;margin-top:3%;" class="fortable" -->
	
	<tr>
			<th>Vepari Id</th>
			<th>Vepari Name</th>
			<th>Phone Number</th>
			<th>Date Of Birth</th>
			<th>Date Of Join</th>
			<th>Gender</th>
			<th>Total Recived Payment</th>
			<th>Total Left Payment</th>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
			
	</tr>

<?php	
	$q = "select*from vepari";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);
	
	echo "<h3>$num RECORED FOUND</h3>";
	
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$image = $row['image'];
		$vid = $row['vid'];
		$result1 = mysql_query("select sum(payment_amount) from vepari_payment where vid = $vid");
		$result2 = mysql_query("select sum(total_price) from vepari_work where vid = $vid");
		$sum1 = mysql_fetch_array($result1);
		if(empty($sum1[0]))
		{
			$sum1[0] = 0;
		}
		$sum2 = mysql_fetch_array($result2);
		if(empty($sum2[0]))
		{
			$sum2[0] = 0;
		}
		//$sum3 = $sum1[0] - $sum2[0];
		//$path = $row['image'];
?>
		<tr>
			<td align="center"><?php echo $row['vid']; ?></td>
			<td><?php echo $row['vname'] ?></td>
			<td><?php echo $row['phone_number']; ?></td>
			<td><?php echo $row['dob']; ?></td>
			<td><?php echo $row['doj']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $sum1[0]; ?></td>
			<td><?php echo $sum2[0]; ?></td>
			
			<td><img src="../photos/<?php echo $image;?>" width="100px" height="100px" style="border-radius:10px;"/></td>
			<form action="vepariedit.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['vid']; ?>" name="vepari_id" style="display:none;">
					<input type="submit" value="Edit" name="btn1">
				
			</td>
			</form>
			<form action="veparidelete.php" method="post">
			<td>
					<input type="text" value="<?php echo $row['vid'];?>" name="vepari_id" style="display:none;">
					<input type="submit" value="Delete" name="btn2">
					
			</td>
			</form>
			
			
		</tr>
	
		
<?php } ?>
	</table>
</div>
</body>
</html>
