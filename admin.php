<?php
session_start();
include("logindb.php");
if(isset($_POST['login']))
{

//function to avoid Quotes to avoid sqlinjection
        function pm($input) {
        if(preg_match('/\"/',$input)){

        return true;
        }
        elseif(preg_match('/\'/',$input)){
        return true;
        }
        return false;
        }

  $Email=mysqli_real_escape_string($conn,(isset($_POST['Email'])? $_POST['Email']:null));
  $Password=mysqli_real_escape_string($conn,(isset($_POST['Password'])? $_POST['Password']:null));

      if(pm($_POST['Email']) || pm($_POST['Password']))
      {
         $message = "Invalid!!!! Do not use Quotes in input";
         echo "<script type='text/javascript'>alert('$message');</script>";
         exit();
         header('Location:admin.php');
      }
      else
      {

        if($conn)
        {

        $query="SELECT * FROM `admin_login` WHERE Email='$Email' and Password='$Password'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        if(is_array($row))
        {
            $_SESSION["id"]=$row["id"];
            $_SESSION["Email"]=$row["Email"];
              header("Location:admin_home.php");
        }
        else
        {
        $message = "Invalid Email or Password.";
         echo "<script type='text/javascript'>alert('$message');</script>";
         header("Refresh:0");
        }
      }
      else
          {
          die("Connection Failed".mysqli_connect_error());
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
<style type="text/css">
body{
  height:100%;
   width:100%;
   background-image:url(admin_images/body.PNG);/*your background image*/  
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/  
   /*css hack for ie*/     
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
}
</style>
</head>
  <body>
  <form method="POST" action="admin.php">
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
         <li><a href="online_videos.php">Online Videos</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        
       
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

 
<br><br><br>
<div class="card-panel">
<center><h4>Admin Login</h4></center><br>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="Email" class="validate"  required="" aria-required="true">

          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="15" required="" aria-required="true">
          <label for="password" data-error="wrong" data-success="right">Password</label>
        </div>
      </div>
      <center><button class="btn waves-effect waves-light" type="submit" name="login">Submit
  </button></center>
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
