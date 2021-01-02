<?php
	session_start();
	$err = "";
	$q1="";
	$q2="none";
	$q3="none";
	$q4="none";
	$q5="none";
	$q6="none";
	$q7="none";
	$q8="none";
	$q9="none";
	$q10="none";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST["find"])){
			if($_POST["area"]==="none"){
				$err = "Area Cannot be None";
			}else{
				$_SESSION["area"] = $_POST["area"];
				echo $_SESSION["area"];
				$q1 = "none";
				$q2 = "";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Desertification Calculator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<style type="text/css">
		.main{
			margin:10%;
			word-wrap: break-word;
			width:80%;
			border: 2px solid #000000;
			background-color: rgb(47, 41, 77);
			border-radius: 25px;
			padding-left: 5%;
		}
		h1 {
			font-size: 30px;
			font-family: courier new;
		}
		select {
			border: 2px solid #ffffff;
			margin-top: -2%;
		}
		.q1 {
			margin-left: 30%;
			display: <?php echo $q1; ?>;
		}
		.q2 {
			margin-left: 30%;
			display: <?php echo $q2; ?>;
		}
		input[type="radio"]{
			all:none;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;font-size: 250%;padding-top: 3%;">WELCOME TO DESERTIFICATION CALCULATOR</h1>
	<div class="main">
		<!-- FORM STARTING -->
		<form class="place" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<h1 class="q1">Where are you from?</h1>
			<select class="q1" style="width: 20%;" name="area">
				<option value="none">None</option>
				<option value="thiruvananthapuram">Thiruvananthapuram</option>
				<option value="kollam">Kollam</option>
				<option value="alappuzha">Alappuzha</option>
				<option value="pathanamthitta">Pathanamthitta</option>
				<option value="kottayam">Kottayam</option>
				<option value="idukki">Idukki</option>
				<option value="ernakulam">Ernakulam</option>
				<option value="thrissur">Thrissur</option>
				<option value="palakkad">Palakkad</option>
				<option value="malappuram">Malappuram</option>
				<option value="kozhikode">Kozhikode</option>
				<option value="wayanadu">Wayanadu</option>
				<option value="kannur">Kannur</option>
				<option value="kasaragod">Kasaragod</option>
			</select>
			<h1 class="q2">How much water you use daily?</h1>
			<input class="q2" type="radio" name="water" >
			<label></label>
			<br>
			<h3 style="margin-left: 30%;"><?php echo $err; ?></h3>
			<input style="margin-left: 30%;" type="submit" name="find">
		</form>
	</div>
</body>
</html>