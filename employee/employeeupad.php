<?php
session_start();
	
	if(!isset($_SESSION['username']))
		header("location:http://localhost/karm/login.php");
		
include("../connection.php");
	//$con=mysql_connect("localhost","root");
	mysql_select_db("karmyogifashion");
	/*if(!$con)
		echo 'connect can not connect';
	else 
		echo 'connection successfully';*/
		
		
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
			width:28%;
			height:63%;
			background-color:black;
			margin-top:2%;
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
			margin-left:55px;
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
	<script>
		function validation()
		{
			var result=true;
			var i = document.getElementsByTagName('input');
			//var d = new Date();
			
			if(isNaN(i[1].value))
			{
				alert('Enter Only Number');
				result=false;
			}
			return(result);
		}
	</script>
</head>
<body>
<!--	<header class="forheader">
		<ul class="firstul">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		
	</header>-->

	<div class="forlogindiv">
		<div style="padding:2%;"><h3 style="font-size:25px;color:white;text-align:center;">FOR EMPLOYEE UPAD</h3></div>
	<form action="addemployeeupad.php" method="post" onsubmit="return validation()">
		<table class="fortable">
			<tr>
				<td>Upad Date :</td>
				<td><input type="date" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;color:grey;" name="upaddate" required></td>
			</tr>
			<tr>
				<td>Upad Amount :</td>
				<td><input type="text" style="width:200px;border-radius:5px;height:35px;background:none;outline:none;border:none;border-bottom:1px solid white;color:white" name="upadamount" required placeholder="Enter Upad Amount"></td>
			</tr>
			<tr>
				<td>Employee</td>
				<!--<td><input type="text" style="width:200px;border-radius:5px;height:35px;" name="eid" required placeholder="Enter Employee Name"></td>-->
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
		<input type="submit" value="Submit" class="forsubmit">
		
		
	</form>
	</div>

</body>
</html>