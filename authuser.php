<?php
include('./config/congig.php');

if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == true) {
    // echo "hello1";
    // $id = $_SESSION['user_id'];
    $login_token = $_SESSION['login_token'];
    // echo $login_token;
    $sqll = "SELECT * FROM admin_login WHERE login_token = '$login_token'";
    $result = mysqli_query($conn, $sqll) or die(mysqli_error($conn));
    $noc = mysqli_num_rows($result);
    if ($noc) {
        $row = mysqli_fetch_array($result);
    } else {
        header('Location: logout.php');
        exit;
    }
} else {
    // echo "hello2";
    header('Location: logout.php');
    exit;
}
?>