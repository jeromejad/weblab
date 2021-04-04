<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exp10</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
  <link href="main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<header>
    <div class=" container-fluid p-0 mf">
      <div class="text-center">
          <div class=" text-center column-center">
              <div class="class="logo>
                  <a href="/exp3">
                      <img class="img-fluid" alt="Responsive image" src="https://www.karunya.edu/sites/default/files/logo.png.pagespeed.ce.WjgALcfVm7.png"></img>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <div id=""> </div>
  <div class="mk">
  
    <div class="mk">
        <nav  class="navbar navbar-expand-lg navbar-primary  text-center justify-content-between allnav ">
      <a class="navbar-brand p-0" href="/exp6">Karunya University</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           
        <span class="navbar-toggler-icon"></span>
      </button>
                              
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
           <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
        </li>
          
        <li class="nav-item active">
           <a class="nav-link" href="/">Calculator</a>
        </li>
       <li class="nav-item active">
           <a class="nav-link" href="./todo.php"> To Do List</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./filter.php"> Matching Filter</a>
       </li>
       <li class="nav-item active">
          <a class="nav-link" href="/"> URK18CS180</a>
       </li>
      </ul>
  
  </div>
      </div>
    </nav></div>
  </header>
  <body>
  <div class="container-fluid d-flex justify-content-center">
  <div ng-app="myapp" ng-controller="myctrl" class="card">
<input type="text" placeholder="Your state" ng-model="item">
<ul>
<li ng-repeat="x in names | filter : item">{{x}} </li>
</ul>
</div> 
<script>
            var app = angular.module("myapp", []);
           app.controller("myctrl", function($scope) {
     $scope.names = ["Pray well","Call mom","Do assignment","Play","Play OutDoor","Car Drive"];
            
            });
        </script>


  </div>