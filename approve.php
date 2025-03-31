<?php
include('./config/congig.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = $_POST['email'];
    $room = $_POST['bordered-radio'];
	$select = "UPDATE signup SET status = 'approved', room_no = '$room' WHERE email = '$email'";
	$resut = mysqli_query($conn,$select);
	if($resut) {
        header("location: dashboard.php");
        exit(); 
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


?>