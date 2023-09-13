<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "CREATE TABLE inventory (
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
)";

/*if ($conn->query($sql) === TRUE) {
  echo "Table inventory created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/




//get the data from html file
$username=$_POST["username"];
$password=$_POST["password"];




//insert data into database
$sql = "INSERT INTO inventory(username,password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "you are registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
