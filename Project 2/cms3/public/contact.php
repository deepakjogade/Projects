<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php include 'navbar.php';?>

<h2 class="text-center mb-4">Contact US</h2>
<div class="row">
  <div class="col-md-8">
    <form action="" method="post">
      <input type="text" class="form-control" name="name" placeholder="Name">
     <input type="text" class="form-control" name="email" placeholder="Email">
      <textarea name="message" placeholder="how we can help you?" style="height:150px;"></textarea>
      <br>
      <input type="submit" class="btn btn-primary" value="Send" name="submit">
    </form>
  </div>
  
  </div>
</div>

<?php include 'footer.php';
      include 'login.php';
      include 'signup.php';?>

</body>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</html>
