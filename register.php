<?php
session_start();
$link = mysqli_connect("localhost", "root", "","mydb");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$firstname = mysqli_real_escape_string($link, $_POST["firstname"]);
$lastname = mysqli_real_escape_string($link,$_POST["lastname"]);
$username = mysqli_real_escape_string($link,$_POST["uname"]);
$EMAIL = mysqli_real_escape_string($link,$_POST["mail"]);
$dob = mysqli_real_escape_string($link,$_POST["dob"]);
$Pass=mysqli_real_escape_string($link,$_POST["pwd1"]);
$cp=mysqli_real_escape_string($link,$_POST["pwd2"]);




if($Pass==$cp){
	$sql="INSERT INTO people(FirstName, LastName, Username, Email, DOB, Password)
	VALUES ('$firstname','$lastname','$username', '$EMAIL','$dob','$Pass')";
	if (mysqli_query($link, $sql)) {
	    } 
	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
	}
else{
    echo "Please enter same password."."<br>";
    echo '<a href="signup.php">Go Back</a>';
}


if(mysqli_affected_rows($link) > 0){
	header("Location: signup.php");
}


?>