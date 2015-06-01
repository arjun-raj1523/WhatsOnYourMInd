	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mind";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM data";
	$result = $conn->query($sql);
	$jsonString=array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        array_push($jsonString,array('id' =>$row['id'],'name' =>$row['name'],'message' =>$row['message']));
	        
	    }
	    echo json_encode(array("records"=>$jsonString));
	} else {
	    echo "0 results";
	}
	$conn->close();
	?>