<!DOCTYPE html>
<html>
<head>
	<title>Welcome Friend!</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
  <?php 
      include "header.php";
  ?>
    <br/>
    <br/>
	<center><div class="container" id="top">
		<text id="salam">Welcome Back!</text><br>
		<img src="tirek/trex33.png" class="rounded-circle" id="trex">
		<form action="function.php" method="post">
			<table>
				<tr>
					<td><input type="text" name="uname" class="inpt" placeholder="Enter Username"></td>					
				</tr>
				<tr>
					<td><input type="Password" name="pwd" class="inpt" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td><button class="btn btn-success" name="submitlogin" id="submitbtn">Login</button></td>
				</tr>
			</table>
			</form>
			<a href="forgetpass.php" id="forgot">Forgot Your Password?</a>
		
	</div></center>
</body>
</html>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>