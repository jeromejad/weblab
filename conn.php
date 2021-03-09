<?php 

$host = "localhost";
$user = "usqjzrlnqnihzctu";
$pass = "51VPthtnMebwjrLd9jD1";
$db   = "bbwn7crtmngob6psyayn";
$conn = null;

try {
  $conn = new PDO("mysql://usqjzrlnqnihzctu:51VPthtnMebwjrLd9jD1@bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com:3306/bbwn7crtmngob6psyayn",$user,$pass);
} catch (Exception $e) {
  
}


 ?>