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
			.fordiv{
			width:30%;
			height:30%;
			background-color:black;
			background-color:rgba(0,0,0,0.6);
			margin-left:34%;
			margin-top:5%;
			text-align:center;
			font-family:sans-serif;
			
			border-radius:10% 20%;
		}
			.fordiv:hover{
			
				transform:rotate(360deg);
				transition:.5s;
				width:37%;
				height:32%;
				margin-left:30%;
				border-radius:200px;
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
<body style="background-image:url('../websiteimage/Aquatica');background-repeat:no-repeat;background-position:center;">
<h1 style="text-align:center;font-family:sans-serif;"><?php echo 'MAINTANCE DEPARTMENT'; ?></h1>
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
				<form action="./insertmaintance.php" method="post">
					<td ><input type="submit" value="ADD MAINTANCE" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="./viewmaintance.php" method="post">
					<td ><input type="submit" value="VIEW MAINTANCE" class="forsubmit"></td>
				</form>
		</div>
		
	
	</div>

</body>
</html>