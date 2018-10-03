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
			margin-left:35%;
			margin-top:5%;
			text-align:center;
			font-family:sans-serif;
			box-shadow:2px 2px black;
			
			
		}
		.fordiv:hover{
			transform:scale(1.1);
			transition:.5s;
			border-radius:20% 20% 20% 20s%;
			
		}
		
	.innerdiv{
		padding:5% 5%;
	}
	.forsubmit{
		width:250px;
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
	<h1 style="text-align:center;font-family:sans-serif;"><?php echo 'ROW MATIRIAL DEPARTMENT'; ?></h1>
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
				<form action="insertrow.php" method="post">
					<td ><input type="submit" value="ADD ROW MATIRIAL" class="forsubmit"></td>
				</form>
		</div>
		<div class="innerdiv">
				<form action="viewrow.php" method="post">
					<td ><input type="submit" value="SEE ROW MATIRIAL LIST" class="forsubmit"></td>
				</form>
		</div>
	
	
	</div>

</body>
</html>