<?php
session_start();
include("logindb.php");
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
  <form method="POST" action="index.php">
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
  <br>

  <div class="container">
  <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/XM18UnUSTlQ" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/7EtUXvYJHHE" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/rJIV95DNsHc" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  </div>


   <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/DVUrM9mw7pQ" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/5rgK7C6pv2w" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/UsLl7vgX4qY" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>


  <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/yI-OKITcqcw" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/6x3j2MNT8Kg" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/uegAqVygpUA" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>

   <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/NnR4gpK_a6M" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/Y4xdjpMRZpw" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/WUYooxUX7s4" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>


 <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/bXfB5Y2taxM" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/uCD7zzj-D8E" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/JnLO5KuEBXI" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>

  <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/RAWahJSMgR4" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/W5AH2jqlv54" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/ETuiLUn-Yqw" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>


  <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/1Q-8Mwc9b_k" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/rf1wxxmRls8" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/1oIKySAQUFo" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>
  
  </div>

  <div class="row">
  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/VgZJdndGeoE" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

  <div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/LlLjAuoCxsk" frameborder="3" allowfullscreen></iframe>
      </div>
  </div>

<div class="col s4">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/nsKi9xPU-AE" frameborder="3" allowfullscreen></iframe>
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
          <input id="icon_prefix" type="text" class="validate" name="Email">
          <label for="icon_prefix" data-error="wrong" data-success="right">Email Id</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" name="Password">
          <label for="icon_telephone" data-error="wrong" data-success="right">Password</label>
        </div>
    </form>
    </div>
    <div class="modal-footer">


    <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" value="Login" name="login">
      <a href="register.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Sign Up</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Forgot Password</a>
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