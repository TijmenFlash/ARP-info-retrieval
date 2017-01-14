<?php
	include 'connect.php';
 
    $new_id = $_POST["postId"];

    $query = "DELETE FROM wishlist_items WHERE item_id=$new_id";

    if (mysqli_query($conn, $query)){
        echo "success";
    } else {
        echo "failure" . $conn->error;
    }

	$conn->close();

?>