<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body{
		font-family: Muli;
		font-size: 20px;
		background: linear-gradient(to bottom right, lightblue, pink);
	}
</style>
</head>
<body>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="nav navbar-header">
				<a href="#" class="navbar-brand">WAZURI HIGH</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="register.php">REGISTRATION</a></li>
				<li><a href="login.php">LOG IN</a></li>
			</ul>
		</nav>

		<h1><center><u>REGISTRATION</u></center></h1>
		<center>
			<fieldset>
				<legend>SIGN UP</legend>
				<form method="POST">
					First Name:
					<input type="text" name="First Name" placeholder="firstname"><br><br>
					Surname:
					<input type="text" name="Surname" placeholder="surname"><br><br>
					Username:
					<input type="text" name="username" placeholder="username"><br><br>
					Date of Birth:
					<input type="Date" name="D.O.B" placeholder="Date of Birth"><br><br>
					Gender:
					<input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					Choose Profile Picture:
					<input type="file" name="profilepic"><br>
					Password:
					<input type="Password" name="pass1" placeholder="Password"><br>
					<?php 
					$pass=$_POST["pass1"];
					if (strlen($pass)<10) {
						echo "Weak password <br>";
					} else {
						echo "";
					}
					if (is_string($pass)) {
					# code...
						echo "A password should have at least two numbers or special characters";
					} else {
					# code...
						echo "";
					}
					?><br>
					Confirm Password:
					<input type="Password" name="pass2" placeholder="Confirm Password"><br><br>
					<?php 
					$pass1=$_POST["pass1"];
					$pass2=$_POST["pass2"];
					if ($pass1===$pass2) {
				 	# code...
						echo "Password Mismatch";
					} else  {
					# code...
						echo "";
					} ?>
					<input type="submit" name="" class="btn btn-success">

				</form>
				<a href="login.php" id="newlogin">Already have an account?</a>
			</fieldset>
		</center>
		<footer class="footer-distributed">
			<div class="footer-right">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="footer-left">
				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="register.php">Registration</a>
					·
					<a href="login.php">Log In</a>
				</p>
				<p>WAZURI SCHOOL &copy; 2015</p>
			</div>
		</footer>
	</body>
	</html>