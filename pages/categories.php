<!--categories-->
<?php
    $category_pick = mysqli_query($con, "select * from categories");
    while($run_category = mysqli_fetch_assoc($category_pick))
    {
    $row_name = $run_category['category_name'];
    
    }

?>
 