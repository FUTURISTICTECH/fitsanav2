<?php

$delete_editor = $_GET['delete'];

$delete_execution = mysqli_query($con, "DELETE FROM `user_auth` WHERE `user_auth`.`natid` = '$delete_editor'");

echo "<span class='alert alert-danger'>".$delete_editor." Deleted successfully!. <a href='?view_editors' class='btn btn-primary'>Go back</a></span>";

?>