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
		.forlogindiv{
			width:25%;
			height:55%;
			background-color:black;
			margin-top:5%;
			margin-left:37%;
			font-family:sans-serif;
			border-radius:40%;
			box-shadow:10px 10px black;
			background-color:rgba(0,0,0,0.6);
		}
		.forlogindiv:hover{
			width:28%;
				margin-left:34%;
			height:58%;
			transform:scale(1.1);
			transition:.1s;
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
			margin-left:63px;
			margin-top:50px;
			width:70%;
			height:40px;
			font-size:20px;
			color:white;
			background-color:lightyellow;
			border-radius:30px;
			border:none;
			color:black;
		}
		.forsubmit:hover{
			
			background-color:lightpink;
		}
	#dispmenu{
		animation : move .5s;
		
	}
	@keyframes move{
		from{left:100%;}
		to{left:78%;}
		to{left:78%;}

	}
	
	</style>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.css"-->
	<!--<link rel="stylesheet" href="bootstrap/css/bootstrapmin.css.map">-->
	<script>
		function displaymenu()
		{	
				 document.getElementById('dispmenu').style.display="block";			
		}
		function closemenu()
		{	
				 document.getElementById('dispmenu').style.display="none";				
		}
		
	</script>
</head>
<body bgcolor="lightblack" style="background-repeat:no-repeat;background-position:center;">
	<header class="forheader">
		<ul class="firstul">
			<li><a href="home.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li><button style="width:50px;height:50px;margin-top:-15px;" class="btn btn-primary" onclick="displaymenu()"><i class="glyphicon glyphicon-align-right"></i></button></li>
				
		
		</ul>
		
	</header>
<div style="width:20%;height:100%;position:absolute;left:78%;background-color:black;background:rgba(0,0,0,0.7);display:none;" id="dispmenu">

<button style="width:50px;height:50px;margin-top:0px;border-radius:0px;" class="btn btn-danger" onclick="closemenu()"><i class="glyphicon glyphicon-remove"></i></button>
				</li>
</div>

	<form action="validation.php" method="post" >
<div style="width:350px;margin-left:37%;background-color:black;height:300px;border-radius:30px 0px 30px 0px	;border:1px solid black;margin-top:20px;background:rgba(0,0,0,0.8);">
		<table style="width:300px;height:200px;margin-top:40px;margin-left:22px;">
			<tr>
				<td colspan="2" style="text-align:center;color:white;">LOG IN</td>
			</tr>
			<tr>
				<!--<td style="text-align:center;"><i class="glyphicon glyphicon-user"></i></td>-->
			<td>	
					<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
						
							<input type="text" class="form-control" placeholder="User Name" name="username" required>
							
					</div>
			</td>
				
			</tr>
			
			<tr>
			
			<td>
					<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
							
							<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
			
			</td>
				<!--<td style="text-align:center;"><i class="glyphicon glyphicon-lock"></i></td>
				<td style="text-align:center;"><input type="password" class="form-control"style="width:200px;border-radius:5px;font-size:15px;height:35px;" name="password" placeholder="Password" required></td>-->
			</tr>
		<tr>
		<td colspan="2"><input type="submit" value="Log In" class="btn btn-success"style="width:100%;"></td>
		</tr>
	
</div>
</form>	

</body>
</html>