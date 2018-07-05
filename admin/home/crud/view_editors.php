<?php
 echo "
  <button class='btn btn-danger'>Editors</button>
  <hr>
   <table class='table table-bordered'>
   <tr>
   <th>NO:</th>
   <th>Role</th>
   <th>National ID</th>
   <th>Fname</th>
   <th>Sname</th>
   <th>Email</th>
   <th>Password</th>
   <th>Edit</th>
   <th>Delete</th>
   </tr>
 ";
 $id = 0;
 $select_editor = mysqli_query($con, "select * from user_auth where role = 'editor' ");

 while($display = mysqli_fetch_array($select_editor)){
     $id++;
     $role = $display['role'];
     $nationalid = $display['natid'];
     $fname = $display['fname'];
     $sname = $display['sname'];
     $email = $display['email'];
     $pass = $display['password'];
    
     ?>
   
   <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $role; ?></td>
   <td><?php echo $nationalid; ?></td>
   <td><?php echo $fname; ?></td>
   <td><?php echo $sname; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $pass; ?></td>
   <td><?php echo "<a href='?edit=$nationalid'>Edit</a>"; ?></td>
   <td><?php echo "<a href='?delete=$nationalid' Onclick='return confirm('Sure to delete?');'>Delete</a>"; ?></td>
   </tr>

 <?php } ?>

 </table>


