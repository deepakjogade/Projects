<!-- start button model-->
<!-- Button to Open the Modal -->
<!-- The Modal -->
<form action="auth.php">
<div class="modal" id="myModal_2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Student Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">
    <i class="fas fa-envelope"></i>Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">
    Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <a href="newpage.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Login</button></a>
      </div>
    </div>
  </div>
</div>
</form>
<!-- end student forms-->
