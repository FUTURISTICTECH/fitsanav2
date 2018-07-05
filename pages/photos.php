<div class="row">   
<div class="col-sm-12">
        <div class="jumbotron" id="photosjumbotron">
            <span class="fa fa-camera"> <strong>Photo Gallery</strong></span>
        </div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
        <legend align="center">ALBUM</legend>
        <div>
         <!--categories-->
         <?php 
          $select_names_category = mysqli_query($con, "select * from categories");
          while($fetch_data = mysqli_fetch_array($select_names_category)){
           $names_cat = $fetch_data['category_name'];
          
           ?>

         
          
          <div class="col-sm-4 text-center well" id="photos_cover"> 
              <?php echo "<a href='?getcategory=$names_cat'>".$names_cat."</a>"; ?>
          </div>
          <?php } ?>

         
       </div>
    </div>
</div>




