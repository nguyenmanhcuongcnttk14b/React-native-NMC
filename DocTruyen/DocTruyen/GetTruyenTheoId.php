<?php

include 'DBConnect.php';

$dataInput = file_get_contents('php://input');

$data = json_decode($dataInput, true); 

$sql = "SELECT * FROM truyen WHERE id_truyen = ".$data["id_truyen"];
 
$result = $conn->query($sql);

$content = array();
 
if ($result->num_rows > 0) {
	
	while($row[] = $result->fetch_assoc()) {
 
		$item = $row;
		
		$content = $item;
	
	}
	
	$json = array( 
		"status" => 1, 
		"message" => "Success",
		"content" => $content
	);
	
} else {
	
	$json = array( 
		"status" => 0, 
		"message" => "Fail",
		"content" => $content
	);
	
}

echo json_encode($json);

$conn->close();

?>