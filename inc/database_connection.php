<?php

$dbservername = "localhost:3306";
$username = "kervinklinsman_data";
$password = "3rhZ*Eckoi2p&4eZ";
$dbname = "kervinklinsman_database";

$conn = mysqli_connect($dbservername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}