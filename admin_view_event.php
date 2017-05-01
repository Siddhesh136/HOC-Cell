<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
}

$query="SELECT * FROM `event` WHERE Email='$Email'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);


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
   <form method="POST" action="admin_create_event.php">
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
<center><h4>Create Event</h4></center><br>
<div class="container">
<div class="card-panel grey lighten-4">
       
            <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">queue</i>
                <input id="Event_Name" type="text" class="validate" name="Event_Name" readonly="">
                <label for="Event_Name">Event Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input id="Date_From" type="text" class="validate" name="Date_From" readonly="">
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input id="Date_To" type="text" class="validate" name="Date_To" readonly="">
             
              </div>
              </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_From" type="text" class="validate" name="Time_From" readonly="">
                <label for="Time_From">Time[From]</label>
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_To" type="text" class="validate" name="Time_To" readonly="">
                <label for="Time_To">Time[To]</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
             <i class="material-icons prefix">monetization_on</i>
                <input id="Event_Fees" type="number" min="0" class="validate" name="Event_Fees" readonly="">
                <label for="Event_Fees">Event Fees</label>
              </div>
              </div>

              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">perm_identity</i>
                <input id="Lecturer_Name" type="text" class="validate" name="Lecturer_Name" readonly="">
                <label for="Lecturer_Name">Lecturer Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">language</i>
                <input id="Venue" type="text" class="validate" name="Venue" readonly="">
                <label for="Venue">Venue</label>
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
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TCET-HOC Cell</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="higher_education.php">Higher Education</a></li>
                  <li><a class="grey-text text-lighten-3" href="online_courses.php">Online Courses</a></li>
                  <li><a class="grey-text text-lighten-3" href="professional_certifications.php">Professional Certifications</a></li>
            
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Mukesh Joshi , Siddhesh Kadam
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</form>
  </body>
</html>
