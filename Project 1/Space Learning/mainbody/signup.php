<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="css/style.css">
    <title>Sign Up Form</title>
</head>
<body>
    
<!-- signupstdent forms -->
<!-- Button to Open the Modal -->
<!-- The Modal -->

<form method="post" action="dbconnection.php">
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Student Registration</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="mb-3 row">
    <label for="stuName" class="col-sm-2 col-form-label"><i class="fas fa-user"></i>Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stuname" placeholder="Enter Name">
    </div>
  </div>
      <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label"><i class="fas fa-envelope"></i>Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stuemail" placeholder="email@example.com">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="stupass">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="stupass">
    </div>
  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      <a href="newpage.php"><button type="button" class="btn btn-danger">Sign Up</button></a>
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>
<!-- end student forms-->
