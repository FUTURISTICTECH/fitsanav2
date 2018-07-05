<?php 
 include("../db/connect.php");
 error_reporting(0);
 $output = file_get_contents("php://input");
 

 $yourname = mysqli_real_escape_string($con, $_POST['yourname']);
 $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
 $emailaddress = mysqli_real_escape_string($con, $_POST['emailaddress']);
 $mycity = mysqli_real_escape_string($con, $_POST['mycity']);
 $password = mysqli_real_escape_string($con, $_POST['regpassword']);

 

 //avoiding duplicate values

 $select_value = mysqli_query($con, "select * from public_users");
 $rows = mysqli_num_rows($select_value);

 while($fetch_value = mysqli_fetch_assoc($select_value))
 {
 	$phone_value = $fetch_value['phonenumber'];
 	$email_value = $fetch_value['email'];
 }



  if($phonenumber == $phone_value || $emailaddress == $email_value)
  {
    
    echo "<script>alert('Phone number or Email address already exist! Use different credentials.');</script>";
     //echo "<span class='btn btn-danger'>Phone number or Email address already exist! Use different credentials.</span><br>";
  }
  else
  {
   $insert_function = mysqli_query($con, "INSERT INTO public_users(`id`, `yourname`, `phonenumber`, `email`, `city`, `password`) 
 	VALUES(NULL, '$yourname', '$phonenumber', '$emailaddress', '$mycity', '$password')");

   echo "<span class='text-danger'>You've been registered successfully. Use your email address and password to login!</span><br>";
   
   
  }

 

?>