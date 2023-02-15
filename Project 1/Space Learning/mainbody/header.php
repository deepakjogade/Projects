<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="css/style.css">
<!-- Google font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

<title>SPACE-LEARNING</title>
</head>
<body>
  
<!-- start navigation -->
<nav class="navbar navbar-expand-sm bg-danger pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SpaceLearning</a>
    <span class="navbar-text">learn and implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="payment.php">Payment</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link ">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link ">Logout</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " data-bs-toggle="modal" data-bs-target="#myModal_2">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a data-bs-toggle="modal" data-bs-target="#myModal" class="nav-link ">SignUp</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link ">Feedback</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link ">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
require "signup.php";
require "login.php";
?>

</body>
</html>
<!-- end navigation -->