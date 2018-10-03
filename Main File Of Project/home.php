<html>

	<title>
		KARMYOGI FASHOIN
	</title>
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<head>

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
	postimagehover{}
	postimagehover:hover{
		opacity:1;
	}
	
	
	</style>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="font-family:sans-serif;">
	<header class="forheader">
		<ul class="firstul">
			<li><a href="home.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="#">Our Staff</a></li>
		</ul>
		<ul class="secondul">
			<li ><a href="login.php" >Login</a></li>
		</ul>
	</header>
<script>
	function ajexsearch()
	{
		
		var searchindex = document.getElementById('1').value;
	
		var req = new XMLHttpRequest();
		
		req.open("get","http://localhost/ajax/fetchdata.php?searchtext="+searchindex,true");
		
		req.send();
		
		req.onredystatechange = funtion()
		{
			if(req.redystate==4 && req.status==200)
			{
				document.getElementById('fetchresult').innerHTML = req.responseText;
			}
		}
	
	}
	

		
	
	
</script>
	
	
<!--<input type="text" style="width:200px;margin-left:550px;margin-top:10px;height:40px;border-radius:5px;" placeholder="Search" onkeyup="ajexsearch()" id="1">-->
	
<div class="container-fluid well text-center">
	<h3>Your Post</h3>
</div>

<div>
<?php
$con = mysql_connect('localhost','root','');
mysql_select_db('karmyogifashion');
$result = mysql_query("select*from post order by pid desc");

$num = mysql_num_rows($result);

for($i=0;$i<$num;$i++)
{
	$row = mysql_fetch_array($result);
?>
	<div style="margin-top:1%;border-radius:30px;width:70%;height:50%;margin-left:15%;" class="divanimation well">
		<div style="float:left;">
			<img src="photos/<?php echo $row['pimage'];?>"width="50%" height="80%" style="border-radius:60px;margin-top:30px;margin-left:20px;">
		</div>
			<div style="float:right;margin-right:110px;color:white;margin-top:-250px;width:35%;height:10%;color:black;">
				POST DATE : <?php echo $row['pdate'];?>
			</div>
			<div style="float:right;margin-right:110px;color:white;margin-top:-225px;width:35%;height:10%;color:black;">
				POST NAME : <?php echo $row['pname'];?>
			</div>
			<div style="float:right;margin-right:110px;color:white;margin-top:-200px;width:35%;height:10%;color:black;">
				POST WRITER : <?php echo $row['pauthor'];?>
			</div>
			<div style="float:right;margin-right:110px;color:white;margin-top:-150px;width:35%;height:50%;overflow:hidden;color:black;">
				POST COTANT : <br><?php echo $row['pcontant'];?>
			</div>
		
	</div>
<?php } ?>
</div>
<div style="position:relative;top:-150%;" >
		
<div id="displogin"style="display:none;width:350px;margin-left:37%;background-color:black;height:300px;border-radius:30px 0px 30px 0px	;border:1px solid black;margin-top:20px;background:rgba(0,0,0,0.9);">
		<form action="validation.php" method="post" >
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
</form>	
</div>


</div>
<script>
function disp()
		{
			
			document.getElementById('displogin').style.display="block";
		
		}
</script>
</body>

</html>