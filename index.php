<?php
   include("db/connect.php");
   error_reporting(0);
   session_start();
    


   //determining valid session
   $public = $_SESSION['login'];
   $publicpass = $_SESSION['pass'];
   $select_validsession = mysqli_query($con, "select `email`, `password` from public_users where email='$public' and password='$publicpass' ");
   $rows_count = mysqli_num_rows($select_validsession);

 ?>
<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
   #btn-close-modal 
   {
        width:100%;
        text-align: center;
        cursor:pointer;
        color:#fff;
    }
  </style>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--topad-->

<div class="container">
 <div class="row  text-center">
 	<div class="col-sm-12">
 		  <script type="text/javascript">
		  var bannersnack_embed = {"hash":"bciwxy44i","width":728,"height":90,"t":1528368930,"userId":36948316,"responsive":true,"type":"html5"};
		  </script>
		  <script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
 	</div>
 </div>
</div>

<!--logo-->
<div class="container">
 <div class="row " id="logo_section">
 	<div class="col-sm-6">
 		<img src="data:image/png;base64,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" width="30%">
 	</div>
 	<div class="col-sm-6">
    
    <?php 
      if($rows_count != 0)
      {
        echo "<br><span class='text-success'>Welcome, ".$_SESSION['login']."</span>";
      }else{

      
    ?>

    <!--top login section-->
    <?php 
      
      //validate login credentials
    if(isset($_POST['login']))
    {
      $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['email']);
      $username = $_SESSION['login'];
      $_SESSION['pass'] = mysqli_real_escape_string($con, $_POST['pasword']);
      $password = $_SESSION['pass'];

      $select_user = mysqli_query($con, "select `email`, `password` from public_users where email = '$username' and password = '$password' ");
      $num_rows = mysqli_num_rows($select_user);

      if($num_rows == 0)
      {
        
          echo "<span class='text-danger'>Wrong Credentials!</span>";
          
      }
      else{
            echo "<script>window.open('index.php','_self');</script>";
      }
    }


    ?>

 		<form method="post">
 			<legend class="text-warning">Member Login, <span class="text-warning"></span></legend>
         <input type="email" name="email" placeholder="email" required/>
         <input type="password" name="pasword" placeholder="password" required/>
         <input type="submit" name="login" class="btn btn-warning" value="Login">
         <label class="text-danger"><a href="#">forgot password?</a></label>
 		</form>
      <?php } ?>

 	</div>
 </div>
</div>

<!--navigation-->
<div class="container">
 <div class="row">
 	<div class="col-sm-12">
 		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="?getphotos">PHOTOS</a></li>
         <!--get categories-->
        <?php $category_pick = mysqli_query($con, "select * from categories"); while($run_category = mysqli_fetch_assoc($category_pick))  { $row_name = $run_category['category_name']; ?><li><a href="?getcategory=<?php echo $row_name; ?>"><?php echo $row_name; ?></li></a> <?php } ?>
        <li><a href="?about">ABOUT US</a></li>
        <li><a href="?contact">CONTACT US</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">

           <!--public user display and session operations-->
           <?php 

           if($rows_count != 0){
            echo "LOG ME OUT";
           }else{
             echo "";
           }
             
           ?>
          
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <?php 
               if($rows_count != 0)
               {
                 echo "<a href='?logoutuser'>LOGOUT</a>";
               }else{
                 echo "LOGIN";
               }
              ?>
            </li>
            
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
 	</div>
 </div>
</div>

<!--rolling images plus titles-->
<div class="container">

<!--pages switching-->
 <?php
   
   if(isset($_GET['getphotos']))
   {
     require_once('pages/photos.php');
   }
   else if(isset($_GET['about']))
   {
     require_once('pages/about.php');
   }
   else if(isset($_GET['contact']))
   {
     require_once('pages/contactus.php');
   }
   else if(isset($_GET['getcategory']))
   {
    require_once('pages/categoryselect.php');
    
   } 
   else if(isset($_GET['get_title']))
   {
     require_once('pages/gettitle.php');
   }
   else if(isset($_GET['upcomingshows']))
   {
     require_once("pages/upcoming_shows.php");
   }
   else if(isset($_GET['logoutuser']))
   {
     session_destroy();
    // echo "<script>window.open('index.php','_self');</script>";
     include("includes/thankyou.php");
   }

   else 
   {


 ?>


 <div class="row ">
 	<div class="col-sm-8">
       
   <div id="cp_widget_7d5464e9-ec32-40c1-ad68-8b045bbe8fb5">...</div><script type="text/javascript">
    var cpo = []; cpo["_object"] ="cp_widget_7d5464e9-ec32-40c1-ad68-8b045bbe8fb5"; cpo["_fid"] = "AIMA4S-BYhHF";
    var _cpmp = _cpmp || []; _cpmp.push(cpo);
    (function() { var cp = document.createElement("script"); cp.type = "text/javascript";
    cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
    var c = document.getElementsByTagName("script")[0];
    c.parentNode.insertBefore(cp, c); })(); </script><noscript><span>New Gallery 2018/6/13</span></noscript>
      

 	</div>

   <div class="col-sm-4">
    <legend class="btn btn-primary"><strong>Upcoming Events and Shows</strong><a href="?upcomingshows" class="pull-right text-danger"><strong>View All</strong></a></legend>
    <br>

    <!--upcoming shows-->
     <?php
       $select_show = mysqli_query($con, "select * from upcoming_shows limit 2");
       while($fetch_show = mysqli_fetch_assoc($select_show)){
         $showname = $fetch_show['show_name'];
         $poster = $fetch_show['poster'];
         $date = $fetch_show['date'];

        ?>
       
    <div class="col-sm-10">
    <br>
            <img src="editor/posters/<?php echo $poster;?>" width="100%">
            <div class="overlay"><?php echo $showname." ".$date; ?></div>
    </div>

       <?php } ?>

   </div>
 </div>
</div>

<!--latest galleries n sign up form-->
<div class="container">
 <div class="row ">
 	<div class="col-sm-9">
 		
         <!--gallery selection from db-->
        <div id="gallerybar"><span class="fa fa-camera"></span><strong> Latest Gallery</strong><span class="pull-right"><strong>View All</strong></span></div>
        
           <?php 
           include("includes/gallery.php");
           ?>
          

        
         

 	</div>
 	<div class="col-sm-3">
   <!--if logged in remove signup form-->
     <?php 
     if($rows_count != 0){
        echo "ad section";
     }else{
      ?>
     
     
    <div id="signupbar"><span class="fa fa-user"></span><strong> Sign up for free!!</strong></div>
 		   <form method="post" id="form">
        <div id="message"></div>
            <table>
         <div class="form-group">
            <tr><th><label>Yourname</label></th>
            <td><input type="text" name="yourname" class="form-control" placeholder="full names" required/></td></tr>

         </div>

         <div class="form-group">
           <tr><th><label>Phone</label></th>
           <td> <input type="text" name="phonenumber" class="form-control" required/></td></tr>
         </div>

         <div class="form-group">
            <tr><th><label>Email</label></th>
            <td><input type="email" name="emailaddress" class="form-control" required/></td></tr>
         </div>
        
        <div class="form-group">
           <tr><th> <label>City</label></th>
            <td><input type="text" name="mycity" class="form-control" required/></td></tr>
         </div>

         <div class="form-group">
           <tr><th> <label>Password</label></th>
            <td><input type="password" name="regpassword" class="form-control" required/></td></tr>
         </div>

          
         <div class="form-group">
          <tr><td></td><td> <input type="submit" name="signup" value="Sign Up" class="btn btn-primary"></td></tr>
         </div>

         </table>

        </form>

     <?php } ?>

 	</div>
 </div>
</div>

<!--popular pics n social live feed plugin-->
<div class="container">
 <div class="row ">
 	<div class="col-sm-9" id="popularpics">
        <div id="gallerybar"><span class="fa fa-camera"></span><strong> Popular pictures</strong></div>
 		    <!--pic grid-->
        <br>
        <div class="col-sm-3 " id="">
            <img src="https://www.potentash.com/wp-content/uploads/2018/05/Safaricom-Twaweza-Live.jpg" width="100%">
            <div class="overlay">overlay1</div>
        </div>
        
        <div class="col-sm-3 " id="">
            <img src="https://www.potentash.com/wp-content/uploads/2018/05/Safaricom-Twaweza-Live.jpg" width="100%">
            <div class="overlay">overlay3</div>
        </div>
        
        <div class="col-sm-3 " id="">
            <img src="https://www.potentash.com/wp-content/uploads/2018/05/Safaricom-Twaweza-Live.jpg" width="100%">
            <div class="overlay">overlay3</div>
        </div>

        <div class="col-sm-3 " id="">
            <img src="https://www.potentash.com/wp-content/uploads/2018/05/Safaricom-Twaweza-Live.jpg" width="100%">
            <div class="overlay">overlay3</div>
        </div>

         
        
 	</div>
 	<div class="col-sm-3">
 		
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

 	</div>
 </div>
</div>

<!--ads section-->
<div class="container">
 <div class="row well text-center">
 	<div class="col-sm-8">
 		left ad
 	</div>
 	<div class="col-sm-3">
   
   right ad
   

 	</div>
 </div>
</div>


   <?php } ?>
   </div>
   <!--end of dynamic page switching-->
<!--footer-->
<br>
<div class="container">
	<div class="row  text-center">
     <div class="col-sm-12">
     	<?php 
         include("includes/footer.php");
        ?>
     </div>
	</div>
</div>





<!--contact us ckeditor-->
<script src="//cdn.ckeditor.com/4.5.8/basic/ckeditor.js"></script>
<!--careosal-->
<script src="js/carousel.js"></script>
<!--search request-->
<script src="js/search.js"></script>
<!--register user-->
<script src="js/register.js"></script>


<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/j-query.min.js"></script>-->
</body>
</html>
