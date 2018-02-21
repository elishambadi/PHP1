<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" value="Wazuri School, Rugby, Basutuland">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body{
		font-family: Muli;
		font-size: 20px;
		background: linear-gradient(to bottom right, lightblue, pink);
		background-size: 100%;
		background-attachment: fixed;
		bottom: 0;
	}
</style>
</head>
<body>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="nav navbar-header">
				<a href="index.php" class="navbar-brand">WAZURI HIGH</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="register.php">REGISTRATION</a></li>
				<li><a href="login.php">LOG IN</a></li>
			</ul>
		</nav>
		<center>
			<legend>LOG IN</legend>
			<form action="marks.php" method="POST">
				Admission Number :
				<input type="text" name="username" placeholder="Adm No"><br><br>
				Password:
				<input type="Password" name="pass1" placeholder="Password"><br><br>
				<button class="btn-success">Go&rtrif;</button>
			</form>
			<a href="register.php">Don't have an account? Sign up</a>
		</center>
		<footer class="footer-basic-centered">
			<p class="footer-company-motto">Excellence is Our Commitment</p>
			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Registration</a>
				·
				<a href="#">Log In</a>
			</p>
			<p class="footer-company-name">WAZURI SCHOOL &copy; 2018</p>
		</footer>
	</body>
	</html>