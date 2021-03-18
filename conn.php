<?php 

$host = "bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com";
$user = "uixodnli2w95t7oa";
$pass = "WDZfqukULNtn9LzL9tJl";
$db   = "bnjhz69tzqtptkhxejq4";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>