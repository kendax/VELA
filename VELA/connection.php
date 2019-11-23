<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "vela";

$conn = mysqli_connect($serverName,$userName,$password,$databaseName);

if(!$conn){
    echo "Disconnected";
}
