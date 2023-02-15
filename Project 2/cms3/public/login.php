<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  color:dark;
}

/* Set a style for the submit/login button */
.form-container .loginbtn {
  background-color: #04AA6D;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<!-- Login form starts -->
<div id="myForm" class="modal" tabindex="-1">
<div class="modal-dialog">

  <span onclick="document.getElementById('myForm').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="../private/index.php" method= "post">
    <div class="container">
    
    <!-- <form action="/../private/index.php" method= "post"class="form-container"> -->
    
    <h1 style="color:black;">Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('myForm').style.display='none'" class="cancelbtn">Cancel</button>
       <button type="submit" class="loginbtn" onClick="document.getElementById('')">LogIn</button>
       <!-- <input class="loginbtn"type="submit" value="LogIn"> -->
      </div>
      </form>
    </div>
  </div>
</div>


<!-- login form ends -->

<script>
var modal = document.getElementById('myForm');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>