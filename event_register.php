<?php
session_start();
include("logindb.php");

$Event_Name=mysqli_real_escape_string($conn,(isset($_GET["Event_Name"])? $_GET["Event_Name"]:null));
$query="SELECT * FROM `event` where Event_Name='$Event_Name' ";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);

if(isset($_POST['register']))
{
if(!isset($_SESSION["Email"]))
{
         echo "<script type='text/javascript'>
              response=confirm('Please Login First to Register for the Event...!!'); 
              if(response)
              {
              document.location.href='index.php';
              }
              else
              {
                 document.location.href='events.php';
              }
              </script>";
}
else
 {
  $Email=$_SESSION["Email"];
   $Name=$_SESSION["Name"];
   $Surname=$_SESSION["Surname"];
  $Event_Name=mysqli_real_escape_string($conn,(isset($_POST["Event_Name"])? $_POST["Event_Name"]:null));
   $query1="INSERT INTO `student_registration` (`Email`,`Event_Name`,`Name`,`Surname`,`Payment`) VALUES ('$Email','$Event_Name','$Name','$Surname','No')";
      $result1=mysqli_query($conn,$query1);
      if($result1)
      {
      
              echo "<script type='text/javascript'>
              response=confirm('Successfully Registered for the Event..Do you Want Register for more Events.?'); 
              if(response)
              {
              document.location.href='index.php';
              }
              else
              {
                 document.location.href='profile.php';
              }
              </script>";
                 

      }
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
<script type="text/css">
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

</script>
</head>
  <body>
  <form method="POST" action="event_register.php" role="form" class="form-horizontal">
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
if(!isset($_SESSION["Email"]))
{
 echo '<li><a href="#modal1">Login</a></li>';
}

else
{
 echo' <li><a href="profile.php">'.$_SESSION["Name"].'</a></li>';
 echo' <li><a href="logout.php">Logout</a></li>';
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
if(!isset($_SESSION["Email"]))
{
 echo '<li><a href="#modal1"><i class="material-icons">perm_identity</i>Login</a></li>';
}

else
{
 echo' <li><a href="profile.php"><i class="material-icons">perm_identity</i>'.$_SESSION["Name"].'</a></li>';
  echo' <li><a href="logout.php"><i class="material-icons">perm_identity</i>Logout</a></li>';
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
<center><h4>Event Details</h4></center><br>
<div class="container">
<div class="card-panel grey lighten-4">
       
            <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">queue</i>
                <input id="Event_Name" type="text" class="validate" value="<?php echo $row["Event_Name"]; ?>" name="Event_Name" readonly="">
                <label for="Event_Name" data-error="wrong" data-success="right">Event Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input type="text" name="Date_From" value="<?php echo $row["Date_From"]; ?>" readonly="">
             
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">today</i>
              <input type="text" name="Date_To" value="<?php echo $row["Date_To"]; ?>" readonly="">
             
              </div>
              </div>
              <div class="row">
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_From" type="text" class="validate" value="<?php echo $row["Time_From"]; ?>" name="Time_From"  readonly="">
                <label for="Time_From" data-error="wrong" data-success="right">Time[From]</label>
              </div>
              <div class="input-field col s6">
               <i class="material-icons prefix">snooze</i>
                <input id="Time_To" type="text" class="validate" value="<?php echo $row["Time_To"]; ?>" name="Time_To" readonly="" >
                <label for="Time_To" data-error="wrong" data-success="right">Time[To]</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
             <i class="material-icons prefix">monetization_on</i>
                <input id="Event_Fees" type="number" min="0" class="validate" value="<?php echo $row["Event_Fees"]; ?>" name="Event_Fees" readonly="">
                <label for="Event_Fees" data-error="wrong" data-success="right">Event Fees</label>
              </div>
              </div>

              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">perm_identity</i>
                <input id="Lecturer_Name" type="text" class="validate" value="<?php echo $row["Lecturer_Name"]; ?>" name="Lecturer_Name" readonly="">
                <label for="Lecturer_Name" data-error="wrong" data-success="right">Lecturer Name</label>
              </div>
            </div>
              <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">language</i>
                <input id="Venue" type="text" class="validate" value="<?php echo $row["Venue"]; ?>" name="Venue" readonly="">
                <label for="Venue" data-error="wrong" data-success="right">Venue</label>
              </div>
             </div>
              <center><button class="btn waves-effect waves-light" type="submit" name="register">Register
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>

</div>
</div>


</form>












 <!-- Modal Structure -->
  <script type="text/javascript">
     $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>
  <!-- End of Modal Structure -->

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Login</h4>
 
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Email Id</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Password</label>
        </div>

    </div>
    <div class="modal-footer">


      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Log in</a>
      <a href="register.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Sign Up</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Forgot Password</a>
    </div>
   
  </div>


<!-- Modal 2 Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Registered</h4>
      <p>Successfully Registered for the Event...!</p>
    </div>
    <div class="modal-footer">
      <a href="index.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Done</a>
    </div>
  </div>
  <!--end of modal 2-->

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