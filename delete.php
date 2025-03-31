<?php
include('./config/congig.php');
// error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // echo $id;
    // $status=$_POST['_s'];
    // $select = "DELETE  FROM signup WHERE email = '$email' ";
    $select = "DELETE signup, user_login FROM signup INNER JOIN user_login ON signup.email = user_login.email WHERE signup.email = '$email'; ";
    if (mysqli_query($conn, $select)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

?>