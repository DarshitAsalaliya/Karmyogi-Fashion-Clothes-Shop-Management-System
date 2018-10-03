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
			height:97%;
			background-color:black;
			margin-top:0%;
			margin-left:35%;
			font-family:sans-serif;
			border-radius:10%;
			
			background-color:rgba(0,0,0,0.6);
			<!--transform:scale(1.1);
			transition:2s;--->
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
			margin-left:68px;
			margin-top:50px;
			width:70%;
			height:40px;
			font-size:20px;
			color:white;
			background-color:black;
			border:1px solid black;
		}
		.forsubmit:hover{
			border:.5px solid white;
			border-radius:10px;
		}
		.forgivemsg{
			float:right;margin-right:12%;margin-top:16%;border:1px solid red;display:none;
			border-radius:10px;
			
		}
		.forgivemsg h3{
			padding:5px;
		}
	</style>
	<script>
		function givemsg()
		{
			
				document.getElementById('1').style.display = 'block';
			
		}
		function givemsg1()
		{
			
				document.getElementById('1').style.display = 'none';
			
		}
		function validation()
		{
			var result=true;
			var i = document.getElementsByTagName('input');
			var d = new Date();
			if(i[0].value.length<=2)
			{
				alert('At Least Enter 3 Character');
				result=false;
			}
			if(i[1].value.length<10)
			{
				alert('Phone Number Is Wrong');
				result=false;
			}
			if(isNaN(i[1].value))
			{
				alert('Phone Number Must Be Digit');
				result=false;
			}
			if(i[1].value.length>10)
			{
				alert('Phone Number Is Wrong');
				result=false;
			}
			if((i[1].value.charAt(0)!=9) && (i[1].value.charAt(0)!=9) && (i[1].value.charAt(0)!=7) && (i[1].value.charAt(0)!=6))
			{
				alert('Phone Number Is Wrong');
				result=false;
			}
			
			
			return(result);
		}
	</script>
</head>
<body>
	<!--<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		
	</header>-->

<div class="forgivemsg" id="1"><h3>Please Enter Right Phone Number</h3></div>
	<div class="forlogindiv" >
		<div style="padding:2%;"><h3 style="font-size:25px;color:white;text-align:center;">FOR ADD NEW VEPARI</h3></div>
	<form action="addvepari.php" method="post" onsubmit="return validation()" enctype="multipart/form-data">
		<table class="fortable">
			<tr>
				<td>Vepari Name :</td>
				<td><input type="text" style="color:white;width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="vepari_name" required placeholder="Enter Vepari Name"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="phone" style="color:white;width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="phonenumber" required placeholder="Enter Vepari Phone No" onmouseout="givemsg1()" onclick="givemsg()"></td>
				
			</tr>
			<tr>
				<td>Date Of Birth :</td>
				<td><input type="date" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;color:grey;" name="dob" required  ></td>
			</tr>
			<tr>
				<td>Date Of Join :</td>
				<td><input type="date"  style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;color:grey;" name="doj" required></td>
			</tr>
			<tr>
				<td>Uplod Vepari Image:</td>
				<td><input type="file" name="file" required />
				
			</tr>
			<tr>
				<td>Gender :</td>
				<td><input type="radio" name="gender" value="male" required>Male<input type="radio" name="gender" value="female" required>Female</td>
				
			</tr>
		</table>
		<input type="submit" value="Add Vepari" class="forsubmit">
		
	</form>
	</div>
	

</body>
</html>