<?php 
 include("../../db/connect.php");

 if(isset($_POST['submit']))
 {
     $show = mysqli_real_escape_string($con, $_POST['show']);
    //$poster = mysqli_real_escape_string($con, $_POST['file']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    
    $filename = $_FILES['file']['name'];
    //inserting data into upcoming_shows tb & folder
     $move = move_uploaded_file($_FILES['file']['tmp_name'],'../posters/'.$filename);
   

    if(!empty($move))
    {
      $insert_show = mysqli_query($con, "INSERT INTO `upcoming_shows` (`id`, `show_name`, `poster`, `date`) 
                   VALUES (NULL, '$show', '$filename', '$date')");
       
      echo "<span class='alert alert-success'>Uploaded successfully!</span><hr>";
    }else{
        echo "<span class='alert alert-danger'>Error uploading data!</span><hr>";
    }
 }


?>
<legend>Add Event</legend>
<form method="post" action="" enctype="multipart/form-data" class="form">
<div class="form-group">
<label>Show/Event</label>
<input type="text" name="show" class="form-control" id="show" required/>
</div>
<div class="form-group">
<label>Poster</label>
<input type="file" name="file" class="form-control" id="poster" required/>
</div>
<div class="form-group">
<label>Date</label>
<input type="text" name="date" placeholder="yyyy-mm-dd hh:mm:ss" class="form-control" id="date" required/>
</div>
<div class="form-group">
<input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
</div>

</form>

