<?php
  
  if(isset($_POST['submit'])){
      $role = mysqli_real_escape_string($con, $_POST['role']);
      $natid = mysqli_real_escape_string($con, $_POST['natid']);
      $fname = mysqli_real_escape_string($con, $_POST['fname']);
      $sname = mysqli_real_escape_string($con, $_POST['sname']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      $insert_db = mysqli_query($con, "INSERT INTO `user_auth` (`id`, `role`, `natid`, `fname`, `sname`, `email`, `password`, `created_at`, `updted_at`) 
      VALUES (NULL, '$role', '$natid', '$fname', '$sname', '$email', '$password', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
      
      if(!empty($insert_db))
      {
      echo "<div class='alert alert-success'>User with id: ".$natid." and firstname ".$fname." added successfully!</div><br>";
      } 
      else{
        echo "<div class='alert alert-danger'>Error adding new user!</div>";
      }
    }


?>
<button class="btn btn-danger push-right">New Editor</button>
<hr>
<form method="post">
  <div class="form-group">
      <label for="role">Role:</label>
      <input type="text" class="form-control" name="role" required>
  </div>
  <div class="form-group">
    <label for="natid">National ID:</label>
    <input type="text" class="form-control" name="natid" required>
  </div>
  <div class="form-group">
    <label for="fname">First name:</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
  <div class="form-group">
    <label for="sname">Second name:</label>
    <input type="text" class="form-control" name="sname" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Add">
</form>