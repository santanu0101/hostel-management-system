<?php
include('./config/congig.php');
session_destroy();
header("Location: login.php");
exit;
?>