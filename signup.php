<?php

$conn = new mysqli("bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com", "uixodnli2w95t7oa", "WDZfqukULNtn9LzL9tJl");
$conn->select_db("bnjhz69tzqtptkhxejq4");


if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES["profile"]["name"])) {
    echo "All the field are required";
} 
else {

    
    
$fileName = $_FILES["profile"]["name"];
$fileTmpLoc = $_FILES["profile"]["tmp_name"];
$fileType = $_FILES["profile"]["type"];
$fileSize = $_FILES["profile"]["size"];
$fileErrorMsg = $_FILES["profile"]["error"];

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

    $insert_query = $conn->query("INSERT INTO user (username, email, password) VALUES('$username' ,'$email' ,'$password')");
    if ($insert_query == true) {

        //upload the file
        $pid = $conn->insert_id;
        $newName = "$pid.jpg";
        if (move_uploaded_file($fileTmpLoc, "./uploads/$newName")) {
            $responce = "Succesfull , thank for your registration";
        } else {
            $responce = "Failed";
        }

        echo "Thanks for Signing up!";
    } else {
        echo "Someting goes wrong!";
    }
}
?>