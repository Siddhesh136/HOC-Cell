<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
}
if(isset($_POST['Create']))
{

if(!isset($_POST['Event_Name']))
{
  $message = "Please Enter Event Name";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Date_From']))
{
$message = "Please Enter Starting Date";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Date_To']))
{
$message = "Please Enter Ending Date";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Time_From']))
{
$message = "Please Enter Start Time";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Time_To']))
{
$message = "Please Enter End Time";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Event_Fees']))
{
$message = "Please Enter Event Fees";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Lecturer_Name']))
{
$message = "Please Enter Lecturer Name";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Venue']))
{
$message = "Please Enter Venue";
echo "<script type='text/javascript'>alert('$message');</script>";
}

else
{
  $Event_Name=mysqli_real_escape_string($conn,(isset($_POST['Event_Name'])? $_POST['Event_Name']:null));
  $Date_From=mysqli_real_escape_string($conn,(isset($_POST['Date_From'])? $_POST['Date_From']:null));
  $Date_To=mysqli_real_escape_string($conn,(isset($_POST['Date_To'])? $_POST['Date_To']:null));
  $Time_From=mysqli_real_escape_string($conn,(isset($_POST['Time_From'])? $_POST['Time_From']:null));
  $Time_To=mysqli_real_escape_string($conn,(isset($_POST['Time_To'])? $_POST['Time_To']:null));
  $Event_Fees=mysqli_real_escape_string($conn,(isset($_POST['Event_Fees'])? $_POST['Event_Fees']:null));
  $Lecturer_Name=mysqli_real_escape_string($conn,(isset($_POST['Lecturer_Name'])? $_POST['Lecturer_Name']:null));
  $Venue=mysqli_real_escape_string($conn,(isset($_POST['Venue'])? $_POST['Venue']:null));

  $query="INSERT INTO `event`(`Event_Name`, `Date_From`, `Date_To`, `Time_From`, `Time_To`, `Event_Fees`, `Lecturer_Name`, `Venue`) VALUES ('$Event_Name','$Date_From','$Date_To','$Time_From','$Time_To','$Event_Fees','$Lecturer_Name','$Venue')";
   $result=mysqli_query($conn,$query);
   $message = "Event Created..";
   echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:admin_event_overview.php");
}
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
<br><br>
<center><a href="admin_home.php"><img src="admin_images/admin_logo.PNG" height="100" width="100" class="responsive-img circle"></a></center>
<center><h4>Create Event</h4></center><br>
<div class="container">
<div class="card-panel grey lighten-4">
       
            <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">queue</i>
                <input id="Event_Name" type="text" class="validate" name="Event_Name" required="" aria-required="true">
                <label for="Event_Name" data-error="wrong" data-success="right">Event Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input type="date" class="datepicker" name="Date_From" value="From">
             
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input type="date" class="datepicker" name="Date_To" value="To">
             
              </div>
              </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_From" type="text" class="validate" name="Time_From" required="" aria-required="true">
                <label for="Time_From" data-error="wrong" data-success="right">Time[From]</label>
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_To" type="text" class="validate" name="Time_To" required="" aria-required="true">
                <label for="Time_To" data-error="wrong" data-success="right">Time[To]</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
             <i class="material-icons prefix">monetization_on</i>
                <input id="Event_Fees" type="number" min="0" class="validate" name="Event_Fees" required="" aria-required="true">
                <label for="Event_Fees" data-error="wrong" data-success="right">Event Fees</label>
              </div>
              </div>

              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">perm_identity</i>
                <input id="Lecturer_Name" type="text" class="validate" name="Lecturer_Name" required="" aria-required="true">
                <label for="Lecturer_Name" data-error="wrong" data-success="right">Lecturer Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">language</i>
                <input id="Venue" type="text" class="validate" name="Venue" required="" aria-required="true">
                <label for="Venue" data-error="wrong" data-success="right">Venue</label>
              </div>
             </div>
              <center><button class="btn waves-effect waves-light" type="submit" name="Create">Create
                </button></center>
  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>

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
