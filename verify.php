<?php
session_start();


$link = mysqli_connect("localhost","root","", "mydb") or die(mysql_error());
$username = mysqli_real_escape_string($link,$_POST['user']);
$password = mysqli_real_escape_string($link,$_POST['key']);



$result1 = mysqli_query($link, "SELECT * FROM people WHERE Username='$username' AND Password='$password'");
if(mysqli_num_rows($result1)>0){
	$_SESSION["logged_In"] = true;
	$_SESSION['name'] = $username;
	$blogger = $_SESSION['name'];
} 
else{
	echo '<script language = "javascript">';
	echo 'alert("The username/password are incorrect")';
	echo '</script>';
	header('Location: signup.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Write Up</title>
	<link rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<style type="text/css">
		#login{
			position: relative;
			padding-right: 0%;
			height: 300px;
			width: 300px;
			top:30px;
			left: 75%;
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
			width: 1347px;
			background-color: black;	 		
			opacity: 1.0;
			position: relative;
			top: 125px;
			right: 7px;
		}
		#form1{
			height: 420px;
			width: 450px;
			position: relative;
			left: 57%;
			bottom: 550px;
		}
	</style>
</head>
<body style="background-color: darkgray;">
		<div id="main">
		<div style= "width:23%; height: 49.5px; position: absolute; padding-left: 10%;box-sizing: border-box;top:45px;">
			<img src = "logo.png" width = "61.075" style="position: absolute;">
			<a href = "index1.html" style = "position: absolute; font-family: 'Oswald', sans-serif;color: White; font-weight: bold;font-size: 20px;text-decoration: none; left: 65%;">COURT WARRIOR</a>
		</div>
		<div id="login">
		<form action="logout.php" method="GET">
			
			<div style="color: white; font-size: 35px; font-family: 'Oswald', sans-serif;"><?php  echo "Welcome "."&nbsp".$blogger."<br>"; ?></div> 

			?>
			
			<button type="submit" name="logout_user" style="position: relative; bottom: 0px;" >Logout</button>
		
		</form>
		</div>
		</div>
		
		<div id="new">
			<img src="images/b1.jpg" style="opacity: 0.25;">
			<div id="form1">
				<form action="blogsave.php" method="POST">
				<h1 style="color: white; opacity: 0.65;">Please Type Your Blog</h1>
				<textarea rows="28" cols="75" name="textbox" style="background-color:white;" placeholder="Only Text Blogs..."></textarea>

				<button type="submit" name="submit_blog" style="position: relative; bottom: 0px;">Submit Blog</button>
				</form>

			</div>
		</div>
		</script>
	</body>
</html>