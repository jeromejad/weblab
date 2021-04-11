<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="dashboard.css"> 
    <title>Dashboard</title> 
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
   border-radius: 25px;
 color:black;
 padding: 10px;
 background: rgba(255, 255, 255, .7);
	-webkit-backdrop-filter: blur(10px);
	backdrop-filter: blur(10px);
 
    }
    </style>
<body> <div style="position:absolute; right:20px;"><a style="text-decoration:none; background-color:red; color:white; padding:5px 8px; border-radius:100px;" href="login.php">Log Out</a></div>
   <span style="color:red;font-weight: bold;text-transform: uppercase;"> <?php 
   session_start(); 
         
        //Connect with database 
        $con = mysqli_connect('bbwn7crtmngob6psyayn-mysql.services.clever-cloud.com', 'usqjzrlnqnihzctu', '51VPthtnMebwjrLd9jD1', 'bbwn7crtmngob6psyayn'); 
        $username = $_SESSION['username'];
        //Create query 
        $query = "select name from customers where username='$username'"; 
        //Execute queries 
        $result = mysqli_query($con, $query);         if (mysqli_num_rows($result) >= 1) { 
            $row = mysqli_fetch_assoc($result);             $_SESSION['name'] = $row['name'];
        } 
           echo "<style> h1 { color:blue; }</style><center><h1>Welcome to E-Banking</h1></center>"; 
        
        ?> </span>
     <div class="container">
         <div class="options"> <center>
        <img src="profile.png" width="20px" height="20px" alt="profile" style="border-radius:50%; margin-top:5px;"> 
        <span style="color:red;font-weight:bold;font-size:24px;text-transform: uppercase; margin-left:5px;"> <?php echo $_SESSION['name']; ?></span> <br><br></center>
       
        </div> 
         <ul> 
         <li><a href="password.php" style="color:white">Change Password</a> <br><br></li> 
         <li><a href="newaccount.php" style="color:white">New Account</a> <br><br></li>
         </ul>
         <?php
         $name=$_SESSION['name'];
         $q2="select acno, initbal from accounts where name='$name'";
         $result2 = mysqli_query($con, $q2);
         if (mysqli_num_rows($result2) >= 1) {
             echo "<style> h3 {color:red;}</style><center><h3>Account Details:<h3></center>";
         while ($row=mysqli_fetch_row($result2)){
        echo "<center>Account No: ".$row[0]." &emsp;Balance: ".$row[1]."</center><br>";
         }
        }
        else{
          

  echo "<style> center {color:red;}</style><center>Nothing to display!</center>";
        }
         ?>
  
    <div class="footer"></div> 
     </div>
</body> 
</html> 
