<?php
header('Content-Type: application/json');
include('./config/congig.php');

$username = $_POST['floating_email'];
$password = $_POST['floating_password'];

// echo $password;
// echo $username;

$response['status']=0;
$response['message']= 'Error';

$sqll = "SELECT * FROM admin_login WHERE email='$username'";
$qr1 = mysqli_query($conn, $sqll) or die(mysqli_error($conn));
$noc = mysqli_num_rows($qr1);

if ($noc) {
    $row = mysqli_fetch_array($qr1);
    // echo $row['password'];
    if (md5($row['password']) == md5($password)) {
        $dttm = date('Y-m-d H:i:s');
        $token = md5(rand(0, 9999));
        $_SESSION['login_status'] = true;
        $_SESSION['login_token'] = $token;
        $_SESSION['user_id'] = $row['id'];

        $sql = "UPDATE admin_login SET
            login_token ='$token',
            login_dttm = '$dttm'
            WHERE email='$username'";

        $qrr = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $response['status'] = 1;
        
        $response['message'] = "Login successful!";

    } else {
        $response['status']  = 0;
        $response['message']  = "Invalid email or password.";
    }
}
elseif($sqll = "SELECT * FROM user_login WHERE email='$username'"){

// $sqll = "SELECT * FROM admin_login WHERE email='$username'";
$qr1 = mysqli_query($conn, $sqll) or die(mysqli_error($conn));
// $noc1 = mysqli_num_rows($qr1);

    $row1 = mysqli_fetch_array($qr1);
    // echo $row['password'];
    if ($row1['password'] == md5($password)) {
        $dttm = date('Y-m-d H:i:s');
        $token = md5(rand(0, 9999));
        $_SESSION['login_status'] = true;
        $_SESSION['login_token'] = $token;
        $_SESSION['user_id'] = $row1['id'];

        $sql = "UPDATE user_login SET
            login_token ='$token',
            login_dttm = '$dttm'
            WHERE email='$username'";

        $qrr = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $response['status']  = 2;
        
        $response['message']  = "Login successful!";

    } else {
        $response['status']  = 0;
        $response['message']  = "Invalid email or password.";
    }

} else {
    $response['status'] = 0;
    $response['message'] = 'User Not Found';
}

echo json_encode($response);

// if($status == 1){

//     echo '<script>
//     alert("'.$message .'");
//     window.location.href="/dashboard.php";
//     </script>';
    


// }
// elseif($status == 2){

//     echo '<script>
//     alert("'.$message.'");
//     window.location.href="student_dashboard.php";
//     </script>';

// }
// else{
//     echo '<script>
//     alert("'.$message .'");
//     history.go(-1);
//     </script>';
// }


?>