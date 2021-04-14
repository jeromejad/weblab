<?php
$input = $_GET['name'];
//open connection with mysql server
$conn =mysqli_connect('bnjhz69tzqtptkhxejq4-mysql.services.clever-cloud.com', 'uixodnli2w95t7oa', 'WDZfqukULNtn9LzL9tJl' , 'bnjhz69tzqtptkhxejq4');
if($input!=""){
    
    $result = $conn->query("SELECT * FROM tbl_registration WHERE first_name LIKE '$input' ");
      $hint="";
           while($a = mysqli_fetch_array($result))
            {
                   $hint=$hint.$a[0].'<br>';
            }
        
           echo $hint==""  ?  "User name not exist!" : "User name already exist!"."<br/>".$hint;
}
mysqli_close($conn);
?>

