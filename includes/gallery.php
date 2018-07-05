<?php

$select_data = mysqli_query($con, "select DISTINCT `title` from uploads order by id desc limit 3");
 

             while($fetch = mysqli_fetch_assoc($select_data)){
                 $title = $fetch['title'];
                 
             ?>
              <div class="row">
                 <?php 
                 //selecting image
                 $select_image = mysqli_query($con, "select `file_name`, `upload_time`, `location` from uploads where title = '$title' order by id desc ");
                 $fetch_image = mysqli_fetch_assoc($select_image);
                 $imagefile = $fetch_image['file_name'];
                 $location = $fetch_image['location'];
                 $upload_time = $fetch_image['upload_time'];

                 echo "<div class='col-sm-3'> <img src='editor/uploads/$imagefile' width='100%'></div>";

                 ?>
                <div class="col-sm-9">
                    <br>
                    <?php echo $title."<br>"; ?>
                    <span>Location: <?php echo $location."<br>"; ?></span>
                    <span>Date: <?php echo $upload_time; ?></span>
                    <br>
                    <a href="?get_title=<?php echo $title; ?>" class="btn btn-primary">View</a>
                    
                </div>
             </div>

   <?php } ?>