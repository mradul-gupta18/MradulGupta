<?php

$host   = "localhost";
$user   = "root";
$password = "Mradul2007*";
$database = "skit";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>