<?php 

$host = "bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com";
$user = "usqjzrlnqnihzctu";
$pass = "51VPthtnMebwjrLd9jD1";
$db   = "bbwn7crtmngob6psyayn";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>