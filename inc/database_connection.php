<?php

$dbservername = "localhost:3306";
$username = "kervinklinsman_database";
$password = "3rhZ*Eckoi2p&4eZ";
$dbname = "rec_appointments";

$conn = mysqli_connect($dbservername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}