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
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<style>
		.forheader{
				width:100%;
				background-color:black;
				height:10%;
				
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
		.fordiv{
			width:30%;
			height:85%;
			background-color:black;
			background-color:rgba(0,0,0,0.5);
			margin-left:35%;
			margin-top:3%;
			text-align:center;
			font-family:sans-serif;
			
			border-radius:80px;
			
		}
		
	
		
	.innerdiv{
		padding:5% 5%;
	}
	.forsubmit{
		width:300px;
		height:40px;
		background:none;
		border:none;
		font-size:20px;
		color:white;
		
	}
	.forsubmit:hover{
	
		background-color:white;
		color:black;
		border-radius:10px;
	}
	</style>
</head>
<body >
		<h1 style="text-align:center;font-family:sans-serif;"><?php echo 'EMPLOYEE DEPARTMENT'; ?></h1>
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
	<div class="fordiv">
	
	
		<div class="innerdiv">
				<form action="./insertemployee.php" method="post">
					<td ><input type="submit" value="ADD NEW EMPLOYEE" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./employeeupad.php" method="post">
					<td ><input type="submit" value="ADD EMPLOYEE UPAD" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./employeework.php" method="post">
					<td ><input type="submit" value="ADD EMPLOYEE WORK" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./viewemployee.php" method="post">
					<td ><input type="submit" value="SEE ALL EMPLOYEE" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./viewemployeeupad.php" method="post">
					<td ><input type="submit" value="SEE EMPLOYEE UPAD" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./viewemployeework.php" method="post">
					<td ><input type="submit" value="SEE EMPLOYEE WORK" class="forsubmit"></td>
				</form>
		</div>	
	</div>

</body>
</html>