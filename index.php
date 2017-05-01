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
         header('Location:index.php');
      }
      else
      {

        if($conn)
        {

        $query="SELECT * FROM `student` WHERE Email='$Email' and Password='$Password'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        if(is_array($row))
        {
            $_SESSION["id"]=$row["id"];
            $_SESSION["Name"]=$row["Name"];
            $_SESSION["Surname"]=$row["Surname"];
            $_SESSION["Email"]=$row["Email"];

              header("Location:profile.php");
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
$query1="SELECT Event_Name,Date_From FROM `event`";
$result1=mysqli_query($conn,$query1);
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

<!--Carousel-->
<div class="slider">
    <ul class="slides">
      <li>
       <img src="profile_pic/1.jpg" height="6" width="6"><!-- random image -->
        <div class="caption center-align">
          <h3>Welcome to HOC Cell..!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="profile_pic/2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
      <img src="profile_pic/3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
       <img src="profile_pic/4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  </script>
<!--End of Carousel-->
<div class="card-panel indigo lighten-5">
<center><h4>Ongoing Events</h4></center>
<marquee>
<?php 
foreach($result1 as $row1)
{
	echo"<a href='event_register.php?Event_Name=".$row1['Event_Name']."'>"; echo $row1['Event_Name']; echo"</a>"; echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
	} 
	?>	
	</marquee>
</div>

<div class="container">
    <div class="section">

      <!--   courses -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"></h2>
            <h2 class="center"><a href="#">
            H</a></h2>

            <p class="light">Higher education, post-secondary education, or third level education is an optional final stage of formal learning that occurs after completion of secondary education. Often delivered at universities, academies, colleges, seminaries, conservatories, and institutes of technology, higher education is also available through certain college-level institutions, including vocational schools, trade schools, and other career colleges that award academic degrees or professional certifications. Tertiary education at non-degree level is sometimes referred to as further education or continuing education as distinct from higher education.

</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"></h2>
            <h2 class="center"><a href="#">
            O</a></h2>

            <p class="light">A massive open online course is an online course aimed at unlimited participation and open access via the web.[1] In addition to traditional course materials such as filmed lectures, readings, and problem sets, many MOOCs provide interactive user forums to support community interactions among students, professors, and teaching assistants (TAs). MOOCs are a recent and widely researched development in distance education which were first introduced in 2006 and emerged as a popular mode of learning in 2012</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"></h2>
            <h2 class="center"><a href="#">
            C</a></h2>

            <p class="light">Certification refers to the confirmation of certain characteristics of an object, person, or organization. This confirmation is often, but not always, provided by some form of external review, education, assessment, or audit. Accreditation is a specific organization's process of certification. According to the National Council on Measurement in Education, a certification test is a credentialing test used to determine whether individuals are knowledgeable enough in a given occupational area to be labeled "competent to practice" in that area.</p>
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
          <input id="icon_prefix" type="text" class="validate" name="Email">
          <label for="icon_prefix" data-error="wrong" data-success="right">Email Id</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="15" required="" aria-required="true">
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
