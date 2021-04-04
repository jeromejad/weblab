<?php

$input = $_GET['name'];
//open connection with mysql server

if($input!=""){
   
      $hint="jerome";
           
          echo $hint==""  ?  "User name not exist!" : "User name already exist!"."<br/>".$hint;
}

?>
