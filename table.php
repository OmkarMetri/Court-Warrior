<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE blog(ID INT(6) AUTO_INCREMENT PRIMARY KEY, FirstName VARCHAR(30), Blog VARCHAR(10000) )";
if(mysqli_query($link, $sql)) {
    echo "Table Blog created successfully";
} else {
    echo "Error creating table: " . mysqli_error($link);
}


$sql = "CREATE TABLE people(ID INT(6) AUTO_INCREMENT PRIMARY KEY,FirstName VARCHAR(10), LastName VARCHAR(30),Username VARCHAR(30), Email VARCHAR(30), DOB VARCHAR(12), Password VARCHAR(30) )";

if(mysqli_query($link, $sql)) {
    echo "<br> Table people created successfully";
} else {
    echo "Error creating table: " . mysqli_error($link);
}



mysqli_close($link);
?>