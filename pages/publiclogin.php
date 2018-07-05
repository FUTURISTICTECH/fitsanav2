<?php 
//include("../db/connect.php");
//session_start();


//validate login credentials
if(isset($_POST['submit']))
{
  $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['username']);
  $username = $_SESSION['login'];
  $_SESSION['pass'] = mysqli_real_escape_string($con, $_POST['password']);
  $password = $_SESSION['pass'];

  $select_user = mysqli_query($con, "select `email`, `password` from public_users where email = '$username' and password = '$password' ");
  $num_rows = mysqli_num_rows($select_user);

  if($num_rows != 0)
  {
    
    echo "<script>window.open('index.php?get_title=$gettitle','_self');</script>";
   // header("Location: ../index.php?getphotos");
    die;
  }else{
      echo "<span class='btn btn-danger align-center'>Wrong Credentials!</span>";
      
  }
}

?>
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
<form method="post" action="" class="form">
<legend>Please login to download pictures</legend>
<div class="form-group">
<label>Username</label>
<input type="email" name="username" class="form-control" placeholder="username" required/>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="enter password" required/>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Login" class="btn btn-primary"/>
</div>
</form>

<legend>Don't have an account? <a href="#" title="Register here" class="text-primary" data-toggle="modal" data-target="#myModal">Sign up here</a></legend>
</div>
<div class="col-sm-4">


</div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="form">
         <div id="message"></div>
         <div class="form-group">
         <label>Your Name</label>
         <input class="form-control" id="yname" type="text" name="yourname" required/>
         </div>
         <div class="form-group">
         <label>Phone Number</label>
         <input class="form-control" id="phone" type="text" name="phonenumber" required/>
         </div>
         <div class="form-group">
         <label>Email Address</label>
         <input class="form-control" id="emailaddress" type="email" name="emailaddress" required/>
         </div>
         <div class="form-group">
         <label>City</label>
         <input class="form-control" id="city" type="text" name="mycity" required/>
         </div>
         <div class="form-group">
         <label>Password</label>
         <input class="form-control" id="password" type="password" name="regpassword" required/>
         </div>

         <div class="form-group">
         <input class="btn btn-danger" id="register" type="submit" name="register" value="Sign Up"/>
         </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>