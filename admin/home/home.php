<?php
include("../../db/connect.php");
session_start();


$user_auth = $_SESSION['email'];

if(empty($user_auth)){
        die("Not authorized to access this page! <a href='../index.php'>Please login</a>");
     }
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Section</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $user_auth; ?></a>
            </div>
            <ul class="nav navbar-nav">
            <li class=""><a href="#"></a></li>
            <li><a href="?view_editors">Editors</a></li>
            <li><a href="?add_new">Add New</a></li>
            <li></li>
            <li><a href="?logout">Log Out </a></li>
          
            </ul>
        </div>
    </nav>
  
 <div class="container">
    <?php
      
      if(isset($_GET['add_new'])){
         include("crud/add_new_editor.php");
      }
      else if(isset($_GET['view_editors'])){
         include("crud/view_editors.php");
      }
      else if(isset($_GET['edit'])){
         include("crud/edit_editor.php");
      }
      else if(isset($_GET['delete'])){
         include("crud/delete_editor.php");
      }
      
      else if(isset($_GET['logout'])){
         session_destroy();
         header("Location: ../index.php");
      }

     
    ?>

 </div>

<!--delete operation-->
<?php
 if(isset($_GET['edit'])){
   require_once("crud/edit_editor.php");
 }
?>
 
</body>
</html>