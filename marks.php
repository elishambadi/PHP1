<!DOCTYPE html>
<html>
<head>
	<title>MARKS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" value="Wazuri School, Rugby, Basutuland">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	ul li{
		padding: 5px;
		list-style-type: none;
	}
	body{
		margin-left: 10%;
		margin-right: 10%;
		font-family: Muli;
		font-size: 20px;
		background-color: lightblue;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
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
		<legend>ENTER MARKS</legend>
		<form method="POST">

			<!-- None of the inputs for subjects are set as required since a student can miss an exam for reasons specified at the office -->
			<ul>
				<center><li>ADMISSION NUMBER :  <input type="text" name="admno" placeholder="ADM NO"></li></center><br>
				<div style="columns: 2">
					<li>MATHS :  <input type="number" name="math" placeholder="MATH"></li>
					<li>ENGLISH :  <input type="number" name="eng" placeholder="ENG"></li>
					<li>SWAHILI :  <input type="number" name="swa" placeholder="SWA"></li>
					<li>PHYSICS :  <input type="number" name="phy" placeholder="PHY"></li>
					<li>CHEMISTRY :  <input type="number" name="chem" placeholder="CHEM"></li>
					<li>BIOLOGY :  <input type="number" name="bio" placeholder="BIO"></li>
					<li>FRENCH :  <input type="number" name="french" placeholder="FRENCH"></li>
					<li>BUSINESS STUDIES :  <input type="number" name="bs" placeholder="BUSINESS STUDIES"></li>
				</div>
				<br>
				<center><input type="submit" name="" class="btn btn-success"></center>
			</ul>
		</form>

		<center>
			<div style="font-size: 40px; font-weight: bolder;">
				<?php 
				$eng=$_POST["eng"];
				$mat=$_POST["math"];
				$kis=$_POST["swa"];
				$bio=$_POST["bio"];
				$chem=$_POST["chem"];
				$phy=$_POST["phy"];
				$french=$_POST["french"];
				$bs=$_POST["bs"];

				$admno=$_POST["admno"];

				$average=($eng+$mat+$kis+$bio+$chem+$phy+$french+$bs)/8;
				$fin_avg=$average*1.25;
				echo $fin_avg . " - ";

    //The exams in this case are divided by a total of 80 marks


				if ($fin_avg>=80) {
	 	# code...
					echo " A";
				} elseif ($fin_avg>=75) {
	 	# code...
					echo "A-";
				} elseif ($fin_avg>=70) {
	 	# code...
					echo "B+";
				}elseif ($fin_avg>=65) {
	 	# code...
					echo "B";
				} elseif ($fin_avg>=60) {
	 	# code...
					echo "B-";
				} elseif ($fin_avg>=55) {
	 	# code...
					echo "C+";
				}elseif ($fin_avg>=50) {
	 	# code...
					echo "C";
				}elseif ($fin_avg>=45) {
	 	# code...
					echo "D+";
				}elseif ($fin_avg>=40) {
	 	# code...
					echo "D";
				}elseif ($fin_avg>=35) {
	 	# code...
					echo "D-";
				}else{
	 	# code...
					echo "E";
				}
				?>
			</div>
		</center>
		<br><hr>

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