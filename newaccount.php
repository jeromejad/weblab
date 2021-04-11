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
    <title>New Account</title> 
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
 color:white;
 padding: 10px;
 text-align: center;
    }
    </style>
<body>
<div style="position:absolute; right:20px;"><a style="text-decoration:none; background-color:red; color:white; padding:5px 8px; border-radius:100px;" href="login.php">Log Out</a></div>
    <div class="container">
    <div class="options"> 
    <img src="profile.png" width="20px" height="20px" alt="profile" style="border-radius:50%; margin-top:5px;"> 
        <span style="font-weight:bold;text-transform: uppercase;color:red;margin-left:5px; font-size:24px;" >     <?php echo $_SESSION['name']; ?> </span> 
        
    </div> 
    <form action="" method="post"> 
        <div class="heading" style="color:red; margin:10px 0px; font-family:fantasy;font-weight: bold;font-size:25px;text-align: center;text-align: center" class="heading">New Account</div> 
        <div></div> 
        
        <label for="username" style="font-family: fantasy;font-size:20px;" for="acno">Account Number: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0;" type="text" name="acno" required> <br><br>
        <label for="username" style="font-family: fantasy;font-size:20px;" for="initbal">Initial Balance: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0;margin-left:10px;" type="text" name="initbal" required> <br><br>
        <div></div> 
        <div></div> 
        <div></div> 
        <input style=" margin-top: 30px;margin-bottom:5px;
  width: 23%;
  margin-left: 10px;   
    height: 35px;
    border-radius: 10px;
    border: none;
    background-color: red;
    color: white; 
    font-size: 20px;" type="submit" value="Create"> 
        <div id="question" style="margin-bottom:5px;">Not now?</div> 
        <a style="font-weight:bold;text-transform: uppercase;color:white" href="dashboard.php">Dashboard</a> 
    </form> 
    </div>

    <?php 
    if (isset($_POST['acno'])) {
    $name = $_SESSION['name']; 
    $acno = $_POST["acno"]; 
    $initbal = $_POST["initbal"]; 

    //Connect with database 
    $con = mysqli_connect('bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com', 'usqjzrlnqnihzctu', '51VPthtnMebwjrLd9jD1', 'bbwn7crtmngob6psyayn'); 
    //Create query 
    $query = "insert into accounts values('$name', '$acno', '$initbal')"; 
    //Execute query 
    $status = mysqli_query($con, $query); 
    if($status) {              echo "<style> center { color:#00ff00; font-weight:bold; }</style>";
    echo "<center><h2>Saved successfully</h2></center>";  
    } else { 
        echo mysqli_error($con); 
    } 
    }
    ?>
</body> 
</html> 
