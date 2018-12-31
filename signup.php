<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<style type="text/css">
		#login{
			position: relative;
			padding-right: 0%;
			height: 400px;
			width: 600px;
			top:80px;
			left: 60%;
			box-sizing: 100px;
		}
		#main{
			position: absolute;
			padding-right: 60px;
			right: 0px;
			top: 0px;
			height: 130px;
			width: 100%;
			background-color: black;
			background-image: url('images/back.jpg');
		}
		#new{
			height: 550px;
			width: 100%;
			background-image: url('images/sign.jpg');
			opacity: 0.8;
			position: relative;
			top: 125px;
		}
		#form1{
			height: 420px;
			width: 450px;
			position: relative;
			left: 60%;
			top: 40px;
		}
	</style>
</head>
<body style="background-color: lightgray;">
		<div id="main">
		<div style= "width:23%; height: 49.5px; position: absolute; padding-left: 10%;box-sizing: border-box;top:45px;">
			<img src = "logo.png" width = "61.075" style="position: absolute;">
			<a href = "index1.html" style = "position: absolute; font-family: 'Oswald', sans-serif;color: White; font-weight: bold;font-size: 20px;text-decoration: none; left: 65%;">COURT WARRIOR</a>
		</div>
		<div id="login">

		<form action="verify.php" method="POST">
		
			<label style="color: white;">Username  </label><input type="text" name="user" placeholder="Enter Username">
			<label style="color: white;">Password  </label><input type="password" name="key" placeholder="Enter Password">
			<button type="submit" name="login_user" >Login</button>
			
		</form>
		<button style="background-color: lightgray; position: relative; left: 81.5%;top: 3px;" onclick="Call('blog.html')">Back</button>
		</div>
		</div>
		
		<div id="new">
			<div id="form1">
			<form action="register.php" method="POST">
				<fieldset style="width: 420px;border-left: black 1px solid;border-top: black 2px solid;border-right: black 4px solid; border-bottom:black 6px solid;  ">
				<legend style="font-family: 'Oswald',sans-serif;font-size: 35px; ">SignUp</legend>
				<input type="text" placeholder="First Name" name="firstname" style="height:30px; width: 200px;">
				<input type="text" placeholder="Last Name" name="lastname" style="height:30px; width: 200px;">
				<br><br>
				<input type="text" placeholder="User Name" name="uname" style="height:30px; width: 400px;">
				<br><br>
				<input type="email" placeholder="Email Id" name="mail" style="height:30px; width: 400px;">
				<br><br>
				<input type="date" placeholder="Date of Birth" name="dob" style="height:30px; width: 400px;">
				<br><br>
				<input type="password" placeholder="Password" name="pwd1" style="height:30px; width: 400px;">
				<br><br>
				<input type="password" placeholder="Re-Confirm Password" name="pwd2" style="height:30px; width: 400px;">
				<br><br>
				<button type="submit" name="reg_user" style="height:30px; width: 100px;" >Sign In</button>
				</fieldset>
			</form>
			</div>
		</div>

		<script type="text/javascript">
			function Call(url)
			{
				window.location = url;
			}
		</script>
	</body>
</html>