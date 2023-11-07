<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ci1";

$con = mysqli_connect($dbhost, $dbuser , $dbpass , $dbname);

if(!isset($con)){
    echo die("Database connection failed");
}
?>