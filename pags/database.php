<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "login";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>


/*
create database login
create table usuarios(
name varchar(50) primary key,
email varchar(255),
password varchar(255)
);
*/