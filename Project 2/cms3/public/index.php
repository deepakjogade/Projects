<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<!-- Latest compiled JavaScript --> 
<title>CMS3</title>
<style>
  .divScroll{
    overflow:scroll;
  }
</style>
</head>
<body>
  <div class="divScroll">
<?php include 'navbar.php';?>
<?php include 'main.php';?>
<?php include 'footer.php';
      include 'login.php';
      include 'signup.php';?>
</div>
  <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>