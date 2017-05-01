<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
}
?>
<!doctype html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
  <body>
 <!--Navigational Bar-->
  <nav >
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">HOC Cell</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="higher_education.php">Higher Education</a></li>
        <li><a href="online_courses.php">Online Courses</a></li>
        <li><a href="professional_certifications.php">Professional Certfications</a></li>
        <li><a href="gallery.php">Gallery</a></li>
          <li><a href="online_videos.php">Online Videos</a></li>
<?php
if(isset($_SESSION["Email"]))
{
 echo '<li><a href="logout.php">Logout</a></li>';
}
else
{
header("Location:admin.php");
}

?>



       
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="index.php">Home</a></li>
         <li><a class="dropdown-button" href="#" data-activates="dropdown2">HOC<i class="material-icons right">arrow_drop_down</i></a>
        <ul class="dropdown-content" id="dropdown2">
        <li><a href="higher_education.php">Higher Education</a></li>
        <li><a href="online_courses.php">Online Courses</a></li>
        <li><a href="professional_certifications.php">Professional Certfications</a></li>
        </ul>
        </li>
        <li><a href="gallery.php"><i class="material-icons">perm_media</i>Gallery</a></li>
        <li><a href="online_videos.php"><i class="material-icons">perm_media</i>Online Videos</a></li>
           
<?php
if(isset($_SESSION["Email"]))
{
 echo '<li><a href="logout.php">Logout</a></li>';
}
else
{
header("Location:admin.php");
}
?>
        <li><a href="contact.php"><i class="material-icons">perm_phone_msg</i>Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <!--Navigational Bar script-->
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
  <script type="text/javascript">  
  $(".dropdown-button").dropdown();
  </script>
  <!--End of Navigational Bar script-->
  <!--End of Navigational Bar-->
<br><br><br>
<div class="container">
 <div class="row">
    <div class="col s12 m6 l3">
    <div class="card">
        <div class="card-image">
         <br>
          <center><a class="btn-floating halfway-fab waves-effect waves-light red right-align" href="admin_view_student.php"><i class="material-icons">visibility</i></a></center>
        </div>
        <div class="card-content">
       <center><h5>View Student</h5></center>
        </div>
      </div>

    </div>
    <div class="col s12 m6 l3">
     <div class="card">
        <div class="card-image">
       <br>
          <center><a class="btn-floating halfway-fab waves-effect waves-light red right-align" href="admin_create_event.php"><i class="material-icons">add</i></a></center>
        </div>
        <div class="card-content">
       <center><h5>Create Event</h5></center>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
         <br>
          <center><a class="btn-floating halfway-fab waves-effect waves-light red right-align" href="admin_event_overview.php"><i class="material-icons">mode_edit</i></a></center>
        </div>
        <div class="card-content">
       <center><h5>Edit Event</h5></center>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
         <br>
          <center><a class="btn-floating halfway-fab waves-effect waves-light red right-align" href="admin_class_view.php"><i class="material-icons">mode_edit</i></a></center>
        </div>
        <div class="card-content">
       <center><h5>Class View</h5></center>
        </div>
      </div>
    </div>
</div>
</div>


















  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Login</h4>
 <form class="col s12"> 
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix" data-error="wrong" data-success="right">Email Id</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone" data-error="wrong" data-success="right">Password</label>
        </div>
    </form>
    </div>
  
   
  </div>

  <script type="text/javascript">
     $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>
  <!-- End of Modal Structure -->


  </body>
</html>
