<?php
    $host = "localhost";
    $user = "root";
    $password = "Mradul2007*";
    $database = "industrail_training";
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
?>