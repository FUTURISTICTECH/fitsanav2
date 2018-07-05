<?php
 $geteditor = $_GET['edit'];
 
  $select_editor = mysqli_query($con, "select * from user_auth where natid = '$geteditor' ");
  while($edit_editor = mysqli_fetch_assoc($select_editor)){
     $role = $edit_editor['role'];
     $nationalid = $edit_editor['natid'];
     $fname = $edit_editor['fname'];
     $sname = $edit_editor['sname'];
     $email = $edit_editor['email'];
     $password = $edit_editor['password'];
  
?>
<button class="btn btn-danger">Edit <?php echo $fname; ?></button>
<hr>
<form method="post">
<div class="form-group">
<label>Role:</label>
<input class="form-control" type="text" name="role" value="<?php echo $role; ?>">
</div>
<div class="form-group">
<label>National ID:</label>
<input class="form-control" type="text" name="natid" value="<?php echo $nationalid; ?>">
</div>
<div class="form-group">
<label>First name:</label>
<input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>">
</div>
<div class="form-group">
<label>Second name:</label>
<input class="form-control" type="text" name="sname" value="<?php echo $sname; ?>">
</div>
<div class="form-group">
<label>Email:</label>
<input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
</div>
<div class="form-group">
<label>Password:</label>
<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">
</div>
<div class="form-group">
<label></label>
<input class="btn btn-primary" type="submit" name="update" value="Update">
</div>
</form>



 <?php
   if(isset($_POST['update'])){
       $role_update = mysqli_real_escape_string($con, $_POST['role']);
       $natid_update = mysqli_real_escape_string($con, $_POST['natid']);
       $fname_update = mysqli_real_escape_string($con, $_POST['fname']);
       $sname_update = mysqli_real_escape_string($con, $_POST['sname']);
       $email_update = mysqli_real_escape_string($con, $_POST['email']);
       $password_update = mysqli_real_escape_string($con, $_POST['password']);

       $update_editor = mysqli_query($con, "UPDATE `user_auth` SET `role` = '$role_update', `natid` = '$natid_update', `fname` = '$fname_update', `sname` = '$sname_update', `email` = '$email_update', `password` = '$password_update' WHERE `user_auth`.`natid` = '$geteditor' ");

        echo "<div class='alert alert-danger'>Updated successfully!</div><br>";
   }
  ?>

  <?php } ?>


  
  