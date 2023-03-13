<?php
include_once 'controller.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Test Project</title>
</head>
<style type="text/css">
	#firth1 {color: red;}
	.fourthh4 {color: blueviolet;}
	.inpUser{width: 250px;height: 25px;padding: 20px;border-radius: 10px 20px}
	.inpPass{width: 250px;height: 25px;padding: 20px;border-radius: 10px 20px}
	.btnCustom{width: 150px;padding: 5px;border-radius: 10px 10px;font-size: 20px;float: center;}
	.mainDiv{background: pink;width: 350px;height: 350px;}
	.myForm{padding-top: 70px}
</style>
<body>

	<h1 id="firth1" >Heading One</h1>

	<form action="" method="POST">
		<input type="text" placeholder="User Name" name="txtUser">
		<br><br>
		<input type="password" placeholder="Password"  name="txtPass">
		<br><br>
		<input type="submit" name="submit" value="submit" >		
	</form>

	

	 <div class="row">
		<div class="jumbotron  col-sm-4 border" style="color: silver;">
			<div class="page-header">			
				<h4 class="fourthh4"><a href="#"> First Colum</a></h4>
			</div>
		</div>


		<div class="jumbotron  col-sm-4 " style="color: silver;">
			<div class="page-header">			
				<h4 class="fourthh4">Second Colum</h4>
			</div>
		</div>

		<div class="jumbotron  col-sm-4 " style="color: silver;">
			<div class="page-header">			
				<h4 class="fourthh4">Third Column</h4>
			</div>		
		</div>
	</div>

	 <center> <div class="text-center mainDiv ">
	<form action="" method="POST" class="myForm">
		<input type="text" placeholder="User Name" name="txtUser" class="inpUser">
		<br><br>
		<input type="password" placeholder="Password"  name="txtPass" class="inpPass">
		<br><br>
		<button name="btn1" value="btn1" class="btnCustom"> Submit  </button>
		
	</form>
	</div>
	</center>


	<!---Fetch Data By Select Query -->
	<form action="" method="POST">	
	<button name="btnSelect"  class="btnSelect"> Select Data  </button>
	</form>

	<button name="PageTwo"  class="page2"> <a href="pageOne.php"> PageTwo</a>  </button>

</body>
</html>