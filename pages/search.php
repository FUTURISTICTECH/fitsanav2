<?php
   include("../db/connect.php");
   
?>

   var countries = [
    
    <?php 
         
         $pick_from_db = mysqli_query($con, "select DISTINCT `title` from uploads where category = '$categoryname' order by id DESC");
            while($assoc_file = mysqli_fetch_assoc($pick_from_db))
            {
                $value = $assoc_file['title'];
                $linked = "<a href='$value'>".$value."</a>";
                echo "'".$value."',";
            }
           
        ?>
    
    
   
   ]
   



