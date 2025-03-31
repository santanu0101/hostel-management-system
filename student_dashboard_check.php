<?php
include('./config/congig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $content =   $_POST['content'];
    $dttm = date('Y-m-d H:i:s');

    // echo $email, $content;
    $msg='';
    $status = 0;

    $sql1 = " SELECT id FROM signup WHERE email = '$email' ";
    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);

    if($row){

        if($content){

            $sql2 = "INSERT INTO feedback (email,content,dttm) VALUES ('$email','$content','$dttm')";
            $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
            if($result2){
                $status = 1;
                $msg= "Feedback sent successfully";
            }
            else{
                $msg = "somthing problem";
            }

        }else{
            $msg = "Please enter your feedback";
        }
    }else{
        $msg = "You are not registered";
    }

    
}
if($status == 1){

    echo '<script>
    alert("'.$msg.'");
    window.location.href="student_dashboard.php";
    </script>';

}
else{
    echo '<script>
    alert("'.$msg.'");
    history.go(-1);
    </script>';
}


?>