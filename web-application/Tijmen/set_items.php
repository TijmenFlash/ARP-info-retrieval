<?php
	include 'connect.php';

  	$new_title = $_POST["postTitle"];
  	$new_link = $_POST["postLink"];
    $new_list = $_POST["postList"];
 
	$query = "INSERT INTO wishlist_items (item_title, item_link, item_list) VALUES ('$new_title', '$new_link', $new_list)";

    if (mysqli_query($conn, $query)){
        echo 'success';
    }else{
        echo 'error';
    }

	$conn->close();

?>