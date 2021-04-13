<?php

// $servername = "localhost:3306";
// $dbusername = "mvp";
// $dbpassword = "paodequeijo";
// $dbName = "mvp";


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "mvp";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbName);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}