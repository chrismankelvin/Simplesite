<?php

$dbservername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rec_appointments";

$conn = mysqli_connect($dbservername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}