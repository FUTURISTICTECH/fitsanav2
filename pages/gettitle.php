<?php 
 $gettitle = $_GET['get_title'];

  $select_catUploads = mysqli_query($con, "select `category` from uploads where title = '$gettitle' ");
  while($run_catUploads = mysqli_fetch_assoc($select_catUploads)){
    $category_Uploads = $run_catUploads['category'];
  }

?>

<div class="row">
<div class="col-sm-12">
        <div class="jumbotron" id="photosjumbotron">
            <span class="fa fa-camera"> <strong>Photo Gallery</strong></span>
        </div>
</div>
</div>

<div class="row">
    <div class="col-sm-12 ">
        <legend align="center"><span class="text-danger">ALBUM</span></legend>
        <ul class="breadcrumb">
        <caption><span class="text-danger">CATEGORIES : </span></caption>
        <?php 
         $select_cat = mysqli_query($con, "select * from categories");
         while($run_array = mysqli_fetch_assoc($select_cat)){
             $cat = $run_array['category_name'];
          
         ?>
          
            <Li><?php echo "<a href='?getcategory=$cat'>".$cat."</a>"; ?></li>
        
         <?php } ?>
         </ul>
         
         <div class="text-center"><em><?php echo $category_Uploads." - ".$gettitle."<hr>"; ?></em></div>


         <div>

         


          <?php 
           //select file_name from uploads
           $select_filename = mysqli_query($con, "select `file_name` from uploads where title = '$gettitle'");
           while($run_fetch = mysqli_fetch_assoc($select_filename))
           {
             $my_file = $run_fetch['file_name'];
            ?>
           
           <?php
            //public account login validation
            
            
            if($rows_count == 0)
            {
                //echo "<script>window.open('pages/publiclogin.php','_self');</script>";
              require_once("pages/publiclogin.php");
              
            }
            else{
                echo"<div class='col-sm-3'>";
                echo"<img src='editor/uploads/$my_file' width='100%'/>";
                echo "<div><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXgKIECrsdxby1eh_dJjpft9OZg7XgQmrMpdK3UnVHco36tu8l6A' width='50%'></div>";
                echo "</div>";
            }
           ?>


           
           
           <?php } ?>
         
         </div>

       
        

    </div>
</div>