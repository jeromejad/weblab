<?php
$conn = new mysqli("bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com", "uixodnli2w95t7oa", "WDZfqukULNtn9LzL9tJl");
$conn->select_db("bnjhz69tzqtptkhxejq4");
session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        $query = $conn->query("select username from user where username = '$username' and password ='$password'");
        if ($query->num_rows === 1) {
            $_SESSION['user'] = $username;
            echo "login";
        } else {
            echo "Username and Password is incorrect";
        }
}

?>
    