
<?php
/*
$host = "localhost";
$username = "php";
$password = 'pass';
$dbName = "login";
// Create database connection
$conn = new mysqli($host, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

create USER 'php'@'localhost' IDENTIFIED WITH mysql_native_password BY 'pass';

GRANT ALL PRIVILEGES ON * . * TO 'php'@'localhost' WITH GRANT OPTION;

create database login
create table usuarios(
name varchar(50) primary key,
email varchar(255),
password varchar(255)
);

//$_SERVER["REQUEST_METHOD"] == "POST"
$user= $_POST['username'];
$pass= $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios VALUES ($user,$email,$pass)";
$conn->mysqli_query($sql);

$conn->close();
*/

$user= $_POST['username'];
$pass= $_POST['password'];
$mail= $_POST['pedro'];

$servername = "localhost";
$username = "php";
$password = "pass";
$dbname = "login";

// Creo y abro la conexion
$db = new mysqli($servername, $username, $password, $dbname);
// Comprueba si la conexion esta ok?
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}



$sql = "INSERT INTO usuarios (name, email, password) values ('$user','$mail','$pass')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//cierro la conexion
$db->close();
?>
