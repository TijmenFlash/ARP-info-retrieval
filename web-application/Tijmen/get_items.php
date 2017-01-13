<?php

	include 'connect.php';

	$resultArray = array();
	$query = "SELECT * FROM wishlist_items";
	$result = mysqli_query($conn, $query);

	while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		array_push($resultArray, $data);
	}
	echo json_encode($resultArray);
	$conn->close();
?>
