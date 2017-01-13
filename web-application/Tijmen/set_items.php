<?php
	include 'connect.php';

  	$new_title = $_POST["postTitle"];
  	$new_link = $_POST["postLink"];
 
	$query = "INSERT INTO wishlist_items (item_title, item_link) VALUES ('$new_title', '$new_link')";

    if (mysqli_query($conn, $query)){
        echo 'success';
    }else{
        echo 'error';
    }

	$conn->close();

?>