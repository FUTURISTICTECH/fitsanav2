<div class="row">   
<div class="col-sm-12">
        <div class="jumbotron" id="photosjumbotron">
            <span class="fa fa-camera"> <strong>Upcoming Shows</strong></span>
        </div>
</div>
</div>

<div class="row ">
    <div class="col-sm-12">
        
        <div>
         <!--upcoming shows-->
         <?php 
          $select_Show = mysqli_query($con, "select * from upcoming_shows");
          while($run_show = mysqli_fetch_assoc($select_Show))
          {
              $show = $run_show['show_name'];
              $poster = $run_show['poster'];
              $date = $run_show['date'];

            ?>
            
            <div class="col-sm-4">
             <img src="editor/posters/<?php echo $poster; ?>" width="100%"/>
             <div class="overlay"><?php echo $show." ".$date; ?></div>
             
            </div>
          
          <?php } ?>
          
         
        </div>
    </div>
</div>