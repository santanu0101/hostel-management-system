<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include('./config/congig.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {


  //fectch all data using post method from the frontend
  $fname = $_POST['floating_first_name'];
  $lname = $_POST['floating_last_name'];
  $email = $_POST['floating_email'];
  $phone = $_POST['floating_phone'];
  $password = md5($_POST['floating_password']);
  $repass = $_POST['repeat_password'];
  $course = $_POST['course'];
  $gender = $_POST['list-radio'];
  // echo $gender;
  // $gender='';
  $address = $_POST['address'];
  $dttm = date('Y-m-d H:i:s');

  $response['status']=0;
  $response['message']= 'Error';

  $name = "";
  if (isset($fname) && isset($lname)) {
    $name = $fname . " " . $lname;
  }

  if ($password === md5($repass)) {

    $sql1 = " SELECT id FROM signup WHERE email = '$email' ";
    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);

    if (!$row) {

      //this is for when folder not exist then folder create 
      if (!file_exists('upload')) {
        //folder create
        mkdir('upload', 0777, true);
      }

      $imageFileType = "";

      if (isset($_FILES['filedata'])) {
        $file_name = $_FILES['filedata']['name'];
        $file_type = $_FILES['filedata']['type'];
        $file_size = $_FILES['filedata']['size'];
        $file_tmp_name = $_FILES['filedata']['tmp_name'];
        $file_error = $_FILES['filedata']['error'];


        $imageFileType = strtolower(pathinfo($_FILES["filedata"]["name"], PATHINFO_EXTENSION));
        // echo $imageFileType;

        // Process the uploaded file here
        // echo "File uploaded successfully: $file_name";
        //this is for get image forma
        //check format match or not
        if (
          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif"
        ) {
            $response['message']="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        } else {

          //check file size
          if ($_FILES["filedata"]["size"] > 500000) {
            $responseError = "Sorry, your file is too large.";
            // echo "Sorry, your file is too large.";
          } else {
            //generate random number with time
            $filnm = time() . rand(1111, 9999);
            //random number and format and folder name concat 
            $target_file = "upload/" . $filnm . '.' . $imageFileType; //  upload/1934297948947.jpg

            //upload file
            move_uploaded_file($file_tmp_name, $target_file);

            $student_id = "STD007". rand(1111,9999);
            //insert all data to database
            $sql2 = "INSERT INTO signup (student_id,name,course,gender,phone,address,email,dttm,ip,img_path) VALUES ('$student_id','$name', '$course', '$gender', '$phone','$address','$email','$dttm','$ip','$target_file')";
            $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

            if ($result2) {

              $sql4 = " SELECT id FROM user_login WHERE email = '$email' ";
              $result4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));
              $row1 = mysqli_fetch_array($result4);

              if(!$row){

                // $response['status'] = 1;
                $sql3 = "INSERT INTO user_login (name,email,img_path,password) VALUES ('$name','$email','$target_file','$password')";
                $result3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
                if ($result3) {
                
                  $response['status'] = 1;
                  $response['message']= 'Submit Success';
                  // echo'Submit Success';
                }else{
                    $response['message']= 'Submit Not Success';
                }
              }
              else{
                $response['message']= 'Email Already Exist';
              }
              
            } else {
                $response['message']= 'Submit Not Success';
              // echo'Submit Not Success';
            }
          }
        }
      } else {
        $response['message']= 'Password Not Match';
        // echo "No file uploaded.";
      }

    } else {

        $response['message']= 'Email Already Exist';
      // echo 'Email Already Exist';
    }

  } else {

    $response['message']= 'Password Not Match';
    // echo 'Password Not Match';
  }

}

echo json_encode($response);

?>