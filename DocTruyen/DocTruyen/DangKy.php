<?php

include 'DBConnect.php';

$dataInput = file_get_contents('php://input');

$data = json_decode($dataInput, true); 

$sql = "INSERT INTO user (email, pw) VALUES ('".$data["email"]."','".$data["pw"]."')";

if (mysqli_query($conn, $sql)) {
	
    $json = array( 
		"status" => 1, 
		"message" => "Success",
	);
	
} else {
    $json = array( 
		"status" => 0, 
		"message" => "Fail",
	);
}

echo json_encode($json);

$conn->close();

?>