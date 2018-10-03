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
			height:70%;
			background-color:black;
			background-color:rgba(0,0,0,0.6);
			margin-left:36%;
			margin-top:2%;
			text-align:center;
			font-family:sans-serif;
			
			border-radius:80px;
					}
		.fordiv:hover{
					transition:1s;
					transform:rotate3d(1000,200,200,360deg);
					
		}
			.innerdiv{
		padding:5% 5%;
	}
	.forsubmit{
		width:200px;
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
	<h1 style="text-align:center;font-family:sans-serif;"><?php echo 'WELCOME ';echo $_SESSION['username']; ?></h1>
	<header class="forheader">
		<ul class="firstul">
			<li><a href="./home.php">Home</a></li>
			<li><a href="./aboutus.php">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</header>
	
	<div class="fordiv">
	
	
		<div class="innerdiv">
				<form action="employee/employeeindex.php" method="post">
					<td ><input type="submit" value="EMPLOYEE" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="vepari/vepariindex.php" method="post">
					<td ><input type="submit" value="VEPARI" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="maintance/maintanceindex.php" method="post">
					<td ><input type="submit" value="MAINTANCE" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="row_matirial/rowmatirialindex.php" method="post">
					<td ><input type="submit" value="ROW MATIRIAL" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="post/postindex.php" method="post">
					<td ><input type="submit" value="FOR POST" class="forsubmit"></td>
				</form>
		</div>
	
	</div>

</body>
</html>