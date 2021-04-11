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
    <link rel="stylesheet" href="transfer.css"> 
    <title>Change Password</title> 
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
<body> <div style="position:absolute; right:20px;"><a style="text-decoration:none; background-color:red; color:white; padding:5px 8px; border-radius:100px;" href="login.php">Log Out</a></div>
    <div class="container">
    <div class="options"> 
    <img src="profile.png" width="20px" height="20px" alt="profile" style="border-radius:50%; margin-top:5px;">  
        <span style="color:red;font-weight: bold;text-transform: uppercase;margin-left:5px; font-size:24px;">   <?php echo $_SESSION['name']; ?></span> 
        
    </div> 

    <form action="" method="post"> 
        <div class="heading" style="color:red;font-family:fantasy;font-weight: bold;font-size:25px;text-align: center; margin-bottom:10px;">Change Password</div> 
        <div></div> 
        <label for="username" style="font-family: fantasy;font-size:20px;">Username: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0; margin-left:25px;" type="text" name="username" required> <br><br>
        <label for="old" style="font-family: fantasy;font-size:20px;">Old Password: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0;" type="password" name="old" required> <br><br>
        <label for="new" style="font-family: fantasy;font-size:20px;">New Password: </label> 
        <input style="width: 35%;
    height: 16px;
    border-radius: 20px;
    outline: none;
    padding-left: 10px;
    margin: 5px 0;" type="password" name="new" required> <br><br>
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
    color: white;  margin-bottom:10px;
    font-size: 20px;" type="submit" value="Change"> 
        <div id="question" style="margin-bottom:5px;">Not now?</div> 
        <a style="color:white;text-transform: uppercase;font-weight:bold" href="dashboard.php">Dashboard</a> 
    </form> 
    </div>

    <?php 
        if (isset($_POST['username'])) {
        $username = $_POST["username"]; 
        $old = $_POST["old"]; 
        $new = $_POST["new"]; 
 
        //Connect with database 
        $con = mysqli_connect('bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com', 'usqjzrlnqnihzctu', '51VPthtnMebwjrLd9jD1', 'bbwn7crtmngob6psyayn'); 
        //Create query 
        $query1 = "select password from customers where username='$username'"; 
        //Execute queries 
        $result1 = mysqli_query($con, $query1);         if(mysqli_num_rows($result1) >= 1) {             $row = mysqli_fetch_assoc($result1);             if($row['password'] == $old) { 
                $query2 = "update customers set password='$new' where username='$username'"; 
                $status2 = mysqli_query($con, $query2); 
                if($status2) { 
                    echo "<style> center { color:#00ff00; font-weight:bold; }</style><center><h3>Password changed successfully</center></h3>"; 
                } else { 
                    echo mysqli_error($con);                     echo "<style> center { color:red; font-weight:bold; }</style><center><h3>Password change failed</center></h3>"; 
                }                 
            } else { 
                
echo "<style> center { color:#ff3300; font-weight:bold; }</style><center><h3>Entered old password is wrong</center></h3>"; 
            }                     } else { 
            echo "<style> center { color:red; font-weight:bold; }</style><center><h3>Entered username is not registered with the bank</center></h3>"; 
        } 
    }
    ?> 

</body> 
</html> 
