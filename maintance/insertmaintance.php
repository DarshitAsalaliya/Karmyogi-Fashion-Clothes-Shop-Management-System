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
		.forlogindiv{
			width:30%;
			height:65%;
			background-color:black;
			margin-top:3%;
			margin-left:35%;
			font-family:sans-serif;
			border-radius:10%;
			box-shadow:4px 4px black;
			background-color:rgba(0,0,0,0.6);
			
		}
		.forlogindiv:hover{
			transform:scale(1.1);
			transition:.2s;
		}
		.fortable{
			color:white;
			width:100%;
			padding-left:10%;
		}
		.fortable tr td{
			
			padding-top:10%;
		}
		.forsubmit{
			margin-left:67px;
			margin-top:50px;
			width:70%;
			height:40px;
			font-size:20px;
			color:white;
			background-color:black;
			border:none;
		}
		.forsubmit:hover{
			border:.5px solid white;
			border-radius:10px;
		}
	</style>
</head>
<body style="background-image:url('../websiteimage/Aquatica');background-repeat:no-repeat;background-position:center;">
	<!--<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		
	</header>-->

	<div class="forlogindiv">
		<div style="padding:2%;"><h3 style="font-size:25px;color:white;text-align:center;">FOR ADD NEW MIANTANCE</h3></div>
	<form action='addmaintance.php' method="post">
		<table class="fortable">
			<tr>
				<td>Date :</td>
				<td><input type="date" style="width:200px;border-radius:5px;height:35px;" name="date" required ></td>
			</tr>
			<tr>
				<td>Maintance Name :</td>
				<td><input type="text" style="width:200px;border-radius:5px;height:35px;" name="mname" required placeholder="Enter Maintance Name"></td>
			</tr>
			<tr>
				<td>Amount :</td>
				<td><input type="text" style="width:200px;border-radius:5px;height:35px;" name="total_amount" required placeholder="Maintance Total Amount"></td>
			</tr>
		</table>
		<input type="submit" value="Add Maintance" class="forsubmit">
		
	</form>
	</div>

</body>
</html>