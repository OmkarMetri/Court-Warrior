<?php
	session_start();
	$link = mysqli_connect("localhost", "root", "","mydb");
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$blog = $_POST["textbox"];
	$writer = $_SESSION['name'];
	
	
	$sql="INSERT INTO blog(FirstName, Blog)
	VALUES ('$writer','$blog')";
	if (mysqli_query($link, $sql)) {
			/*echo "You submitted the blog. Thank you.";
			echo '<p><a href="blog.html">Go back</a></p>';*/

	    } 
	else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: lightgray;">
			<p style="color:black;">You submitted the blog.Thank you.</p>
			<p>Hope to see you again with new exciting blogs.</p>

			<a href="blog.html">Go Back</a>
</body>
</html>
