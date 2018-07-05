<?php
include("../../db/connect.php");
session_start();


$user_auth = $_SESSION['email'];

if(empty($user_auth)){
        die("Not authorized to access this page! <a href='../index.php'>Please login</a>");
     }

     else{
     ?>
     

<!DOCTYPE html>
<html>
<head>
<title>Editor Section</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="style_progress.css" rel="stylesheet" type="text/css"/> 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/imessage.js"></script>
 
</head>
<body>
 
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $user_auth; ?></a>
            </div>
            <ul class="nav navbar-nav">
            <li class=""><a href="#"></a></li>
            <li><a href="home.php">Add Story</a></li>
            <li><a href="?add_show">Add Show</a></li>
            <li><a href="?logout">Log Out </a></li>
          
            </ul>
        </div>
    </nav>

<!--multiple file upload-->
 <?php 
 
  if(isset($_POST['upload'])){
  $category = mysqli_real_escape_string($con, $_POST['category']);
  $title = mysqli_real_escape_string($con, $_POST['title']);     
  $location = mysqli_real_escape_string($con, $_POST['location']);
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['file']['name'][$i];
 
  //insert into db_uploads
  $insert_pics = mysqli_query($con, "INSERT INTO `uploads` (`id`, `category`, `title`, `location`, `file_name`, `author`, `upload_time`) 
  VALUES (NULL, '$category', '$title', '$location', '$filename', '$user_auth', CURRENT_TIMESTAMP)");

  if(!empty($insert_pics)){
     // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'../uploads/'.$filename);
   
     echo "<span class='alert alert-success text-center'>Upload succeded!</span>";
  }else{
     echo "<span class='alert alert-danger text-center'>Error uploading the file(s)!</span>";
  }


 }
 
} 
 
 ?>
  
 <div class="container">
 <div class="row">

 <div class="col-sm-4">
 
 </div>

 <div class="col-sm-4 well">
  
  <!--submit content-->
  <?php 
    if(isset($_GET['add_show']))
    {
       require_once("../includes/addshow.php");
       die;
    }
  ?>

 <span class="btn btn-primary">Upload your content here!</span>
 <hr>
  <form method="post" action="" enctype="multipart/form-data" id="form1">
  <div class="form-group">
  <label>Category</label>
  <select name="category" required>
  <?php
  //select categories from category_tb
   echo "<option></option>";  
   $select_cat_all = mysqli_query($con, "select * from categories");
   while($go_fetch = mysqli_fetch_array($select_cat_all))
    {
    $category_names = $go_fetch['category_name'];
    
    echo "<option class=''>".$category_names."</option>";
  
    }

    ?>
    </select>
    
  </div>

  <div class="form-group">
  <label>Title</label>
  <input class="form-control" type="text" name="title" required>
  </div>

  <div class="form-group">
  <label>Location</label>
  <input class="form-control" type="text" name="location" required>
  </div>
  
  <div class="form-group">
  <input type="file" name="file[]" multiple>
  </div>

  <div class="form-group">
  <input type="submit" class="btn btn-danger" name="upload" value="Upload">
  </div>
  </form>
 </div>
 
 <div class="col-sm-4">
 
 </div>

  </div>
  
 <div class="row text-center well">
 <span class="btn btn-warning">Upload History</span>
  <hr>
   
  
   <?php 
    $get_files = mysqli_query($con, "select * from uploads");
    while($execute_files = mysqli_fetch_array($get_files)){
      $title_event = $execute_files['title'];
      $image = $execute_files['file_name'];
    
      ?>
     
     <!--<div class="col-sm-2">
      <?php //echo $title_event;?>
      <a href="../uploads/"><img src="../uploads/" width="150"></a>
     </div>-->
    <?php } ?>
   
  

 
 </div>
 </div>
 
 <?php
    if(isset($_GET['logout']))
        {
            session_destroy();
            header("Location: ../index.php");
        }
   


 ?>
 

<!--end of auth-->
 <?php } ?>
<br>
 <!--footer section-->
 <div class="container">
 <div class="row" style="background-color:#000;padding:5px;">
 <div class="col-sm-12">
 <?php 
   include("../../includes/footer.php");
 ?>
 </div>
 </div>
 </div>
</body>
</html>