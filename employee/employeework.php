<?php
session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
	
	
	include("../connection.php");

	mysql_select_db("karmyogifashion");

		
	$result = mysql_query("select * from employee");
	
	$num = mysql_num_rows($result);
	
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
		.forlogindiv{
			width:30%;
			height:800px;
			background-color:black;
			margin-top:0%;
			margin-left:35%;
			font-family:sans-serif;
			border-radius:10%;
			
			background-color:rgba(0,0,0,0.6);
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
<body>
	<!--<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		
	</header>-->

	<div class="forlogindiv">
		<div style="padding:2%;"><h3 style="font-size:25px;color:white;text-align:center;">ADD EMPLOYEE DAILY WORK</h3></div>
	<form action="addemployeework.php" method="post" onsubmit="return validation()">
		<table class="fortable">
			<tr>
				<td>Date Of Work :</td>
				<td><input type="date" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;color:grey;" name="date_of_work" required ></td>
			</tr>
			<tr>
				<td>Sari Or Dress :</td>
				<td><input type="radio" name="sari" value="SADI">SADI<input type="radio" name="sari" value="DRESS">DRESS</td>
				
			</tr>
			<tr>
				<td>Type :</td>
			<!--	<td><input type="text" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="type" required placeholder="Enter Type Of Sari Or Dress"></td>-->
				<td><select name="type" required>
						<option value="A1">A1</option>
						<option value="GHAGHRI SET">GHAGHRI SET</option>
						<option value="SADI PATI 1">SADI PATI 1</option>
						<option value="SADI PATI 2">SADI PATI 2</option>
						<option value="SADI PATI 3">SADI PATI 3</option>
						<option value="SADI PATI 4">SADI PATI 4</option>
						<option value="SADI PATI 5">SADI PATI 5</option>
					</select>
				</td>
		</tr>
					<tr>
				<td>Color :</td>
			<!--	<td><input type="text" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="type" required placeholder="Enter Type Of Sari Or Dress"></td>-->
					<!--<td><input type="color" name="color"></td>-->
				<td><select name="color" required>
						<option value="A1">RED</option>
						<option value="BLUE">BLUE</option>
						<option value="NAVI BLUE">NAVI BLUE</option>
						<option value="YELLOW">YELLOW</option>
						<option value="CREAM">CREAM</option>
						<option value="GREEN">GREEN</option>
						<option value="BLACK">BLACK</option>
					</select>
				</td>
		</tr>
		
			<tr>
				<td>One Pease Price :</td>
				<td><input type="text" style="color:white;width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="one_pease_price" required placeholder="Enter One Pease Price" ></td>
			</tr>
			<tr>
				<td>Total Pease :</td>
				<td><input type="text" 	style="color:white;width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="total_pease" required placeholder="Enter Total Pease" ></td>
			</tr>
			<tr>
				<td>Total Price :</td>
				<td><input type="text" onblur="fun1()"style="color:white;width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;" name="total_price" required placeholder="Your Total Price" ></td>
			</tr>
			<tr>
				<td>Employee</td>
				
				<td><select name="eid" required>
			
<?php
			for($i=1;$i<=$num;$i++)
			{
					$row = mysql_fetch_array($result);
?>	
	
							<option value="<?php echo $row['employee_id'];?>"><?php echo $row['employee_name'];?></option>

<?php } ?>
				</select>
				</td>
			</tr>
		</table>
		<input type="submit" value="Add Employee" class="forsubmit">
		
	</form>
	</div>
	

<script>
		function sum()
		{
				var x =  document.getElementById('1');
				var y = document.getElementById('2');
				
				if(x.value.)
		}
		function fun1()
		{
			var x = document.getElementById('1');
			x.value = 200;
		}
		function validation()
		{
			
			var result = true;
			//var p = document.getElementsByTagName('input');
			var p = document.getElementById('1');
			var q = document.getElementById('2');
			var r = document.getElementById('3');
			//var d = new Date();
			
			if(isNaN(p.value))
			{
				alert('Enter Only Number');
				result = false;
			}
			if(isNaN(q.value))
			{
				alert('Enter Only Number');
				result = false;
			}
			if(isNaN(r.value))
			{
				alert('Enter Only Number');
				result = false;
			}
			return(result);
		}
	</script>
</body>
</html>