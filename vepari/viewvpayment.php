<?php

	session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
//	$con = mysql_connect('localhost','root');
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
	
	border:none;
	text-align:center;
}
table{
	border-radius:3%;
	
}
table tr td{}
table tr td:hover{
	
}
	</style>
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
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min"></script>

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
<h3 style="text-align:center;">VEPARI PAYMENT DETAIL</h3>
	<table border="1" align="center" class="table table-hover table-responsive"style="text-align:center;"<!--style="text-align:center;width:70%;margin-top:3%"-->
	
	<tr>
			<th>Payment Id</th>
			<th>Vepari Name</th>
			<th>Payment Date</th>
			<th>Payment Amount</th>
			<th>Edit</th>
			<th>Delete</th>
			
			
	</tr>

<?php	

	$q = "select*from vepari_payment";
	
	$result = mysql_query($q);
	
	$num = mysql_num_rows($result);
	
	echo "<h3>$num RECORD FOUND</h3>";
	
	for($i=1;$i<=$num;$i++)
	{
		$row = mysql_fetch_array($result);
		$vid = $row['vid'];
		$result1 =  mysql_query("select vname from vepari where vid = $vid");
		$row1 = mysql_fetch_array($result1);
?>
		<tr>
			<td><?php echo $row['vid'];?></td>
			<td><?php echo $row1['vname'];?></td>
			<td align="center"><?php echo $row['payment_date']; ?></td>
			<td><?php echo $row['payment_amount']; ?></td>
			<td>
					<form action="veparipaymentedit.php" method="post">
					<input type="text" value="<?php echo $row['payment_id']; ?>" name="payment_id" style="display:none;">
					<input type="submit" value="Edit" name="btn1">
					</form>
			</td>
			<td>
					<form action="veparideletepayment.php" method="post">
					<input type="text" value="<?php echo $row['payment_id'];?>" name="payment_id" style="display:none;">
					<input type="submit" value="Delete" name="btn2">
					</form>
			</td>
		</tr>
		
	
		
<?php } ?>
	</table>

</div>
</body>
</html>
