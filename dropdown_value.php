<?php

// error_reporting(E_ALL);
include('./config/congig.php');

 $sql1 = "SELECT distinct(course) FROM signup";
$result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
if(mysqli_num_rows($result1) > 0){
    $row = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    echo json_encode($row);      
}
else{
    echo json_encode(['empty']);
}


?>
