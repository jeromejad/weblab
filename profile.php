<?php
include "db.php";
if(!isset($_SESSION['id'])):
  header("location: login.php");
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Signup</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
   <div class="col-md-12">
   <div class="jumbotron">
  <h1 class="display-3">Hello, <?php echo $_SESSION['name']; ?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
  </p>
</div>
   </div>
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->

   <script src="jquery.min.js"></script> 
   <script src="new.js"></script>
</body>
</html>