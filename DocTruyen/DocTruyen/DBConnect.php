<?php

$HostName = "localhost";
$DbName = "doc_truyen";
$HostUser = "root";
$HostPass = "";

$conn = mysqli_connect($HostName, $HostUser, $HostPass, $DbName);

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
 
}

?>