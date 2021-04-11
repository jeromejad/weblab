<!DOCTYPE html> 
<html lang="en"> 
    <div class='h'style="color:blue;font-size: 35px; text-align:center;font-family:fantasy,sans-serif;">  <head>DBMS LAB</head></div>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="login.css"> 
    <title>Login</title> 
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
  height:350px;
  background: rgba(255, 255, 255, .7);
	-webkit-backdrop-filter: blur(10px);
	backdrop-filter: blur(10px);
   border-radius: 25px;
 text-align: center;

 color:white;
 padding: 10px;
    }
    </style>
<body> 
    <div class="container">
    <form action="" method="post"> 
        <div class="heading" style="color:red;font-family:fantasy;font-weight: bold;font-size:25px;">Login</div> <br><br>
        <div></div> 
        <label for="username" style="font-family: fantasy;font-size:20px;">Username: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0;"type="text" name="username" required> <br><br>
        <label for="password" style="font-family: fantasy;font-size:20px;">Password: </label> 
        <input  style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0";type="password" name="password" > <br><br>
        <div></div> 
        <div></div> 
        <div></div> 
        <input type="submit" value="Login" style=" margin-top: 50px;
  width: 23%;
  margin-left: 10px;   
    height: 35px;
    border-radius: 10px;
    border: none;
    background-color: red;
    color: white; 
    font-size: 20px;"> <br><br>
        <div id="question">Not registered yet?</div> <br><br>
        <a href="signup.php" style="color: white;font-family:fantasy; font-size:15px;">Sign Up</a> 
    </form> 
    </div>
    <?php
    
    session_start(); 
    if (isset($_POST['username']) and isset($_POST['password']) ) 
    {
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    $_SESSION['username'] = $username; 

    //Connect with database 
    $con = mysqli_connect('bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com', 'usqjzrlnqnihzctu', '51VPthtnMebwjrLd9jD1', 'bbwn7crtmngob6psyayn'); 
    //Create query 
    $query = "select * from customers where username='$username' and password='$password'"; 
    //Execute query 
    $result = mysqli_query($con, $query);         if(mysqli_num_rows($result)>=1) {             header('location:dashboard.php'); 
    } else {             echo "<style> center { color:red; font-weight:bold; }</style>";
                        echo "<center><h3>Invalid Credentials! Try again<h3></center>";
    } 
    }
    ?>

</body> 

</html> 
