<?php 
    session_start(); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="dashboard.css"> 
    <link rel="stylesheet" href="signup.css"> 
    <title>Sign Up</title> 
</head> 
<style>
    body{
        background-image: url('bg.jpg');
        background-size: cover;
    }
    .container{
         border: 1px solid black;
  position: relative;
  margin: 50px auto;
  width: 30%;
  height:auto;
  background: rgba(255, 255, 255, .7);
	-webkit-backdrop-filter: blur(10px);
	backdrop-filter: blur(10px);
   border-radius: 25px;
 text-align: center;
 color:black;
 padding: 10px;
 
    }
    </style>
<body> 
    <div class="container">
    <form style="color:red;font-family:fantasy;font-weight: bold;font-size:25px;" action="" method="post"> 
        <div class="heading" style="text-align:center">Sign Up</div> 
        <div></div> 
        <label style="font-weight: normal;font-family: fantasy;font-size:17px;text-align: left;color:white" for="name">Name: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0" type="text" name="name" required> <br><br>
        <label style="font-family: fantasy;font-size:17px;color:white;font-weight:normal;" for="phone">Phone: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    
    padding-left: 10px;
    margin: 5px 0" type="text" name="phone"> <br><br>
        <label  style="font-family: fantasy;font-size:17px;color:white;font-weight:normal;" for="email">Email: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0" type="text" name="email" required> <br><br>
        <label style="font-family: fantasy;font-size:17px;color:white;font-weight:normal;" for="username">Username: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0" type="text" name="username" required> <br><br>
        <label style="font-family: fantasy;font-size:17px;color:white;font-weight:normal;" for="password">Password: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0" type="password" name="password" required> 
        <div></div> 
        <div></div> 
        <div></div> 
        <input style=" margin-top: 50px;
  width: 23%;
  margin-left: 10px;   
    height: 35px;
    border-radius: 10px;
    border: none;
    background-color: red;
    color: white; 
    font-size: 20px;text-align: center;" type="submit" value="Sign Up"> 
        <div id="question" style="text-align:center;color:white; margin-top:10px;">Already registered?</div> 
        <a href="index.php" style="text-align:center;color:white;font-size: 15px; font-weight:normal;">Login</a> 
    </form> 
    <div class="footer"></div> 
    
    </div>
    <?php
    if (isset($_POST['name'])) {
    $name = $_POST["name"]; 
    $phone = $_POST["phone"]; 
    $email = $_POST["email"]; 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    //Connect with database 
    $con = mysqli_connect('bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com', 'usqjzrlnqnihzctu', '51VPthtnMebwjrLd9jD1', 'bbwn7crtmngob6psyayn');  
    //Create query 
    $query = "insert into customers values('$name', '$phone', '$email', '$username', '$password')"; 
    //Execute query 
    $status = mysqli_query($con, $query); 
    if($status) {      echo "<style> center { color:green; font-weight:bold; }</style>";
               echo "<center><h2>Saved successfully</h2></center>"; 
    } else { 
        echo mysqli_error($con); 
    } 
    }
    ?>
</body>
</html> 
