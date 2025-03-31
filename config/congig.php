<?php
session_start();
$ip=$_SERVER['REMOTE_ADDR'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "hostel-management-system";
date_default_timezone_set("Asia/Kolkata");
// Create connection
$conn = mysqli_connect($servername, $username, $password,  $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully<br>";
//echo '<pre>';
//print_r($conn);

function conv_date($datetime)
{
	$ret='';
	if($datetime){
		$ret=date('d M Y h:i:s A',strtotime($datetime));
	}
	return $ret;
}
?>