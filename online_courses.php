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
    <div class="section">

      <!--   courses -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">stars</i></h2>
            <h5 class="center"><a href="https://onlinecourses.nptel.ac.in">
            NPTEL</a></h5>

            <p class="light">NPTEL (National Programme on Technology Enhanced Learning) is a joint initiative of the IITs and IISc. Through this initiative, we offer online courses and certification in various topics.

			Online course: Free for all, Certification exam: For a nominal fee.
			Learn anytime, anywhere! Only requirement: Interest and enthusiasm to learn :)</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">polymer</i></h2>
            <h5 class="center"><a href="https://www.coursera.org">
            COURSERA</a></h5>

            <p class="light">Coursera is a venture-backed, for-profit, educational technology company that offers massive open online courses. Coursera works with universities and other organizations to make some of their courses available online, offering courses in subjects such as physics, engineering, humanities, medicine, biology, social sciences, mathematics, business, computer science, digital marketing, and data science, among others.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">android</i></h2>
            <h5 class="center"><a href="https://www.edureka.co">
            EDUREKA</a></h5>

            <p class="light">Edureka is an interactive, online learning platform. It offers live, instructor-led courses that cater mainly to working professionals who want to enhance their skills. Founded in mid-2011 and headquartered in Bangalore, India, the company is privately owned and operated by Brain4ce Education Ltd.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">phonelink_setup</i></h2>
            <h5 class="center"><a href="https://www.openuniversity.edu">
            OPENUNIVERSITY</a></h5>

            <p class="light">The Open University (OU) is a public distance learning and research university, and one of the biggest universities in the UK for undergraduate education. The majority of the OU's undergraduate students are based throughout the United Kingdom and principally study off-campus; many of its courses (both undergraduate and postgraduate) can also be studied anywhere in the world</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">phonelink_lock</i></h2>
            <h5 class="center"><a href="https://alison.com">
            ALISON</a></h5>

            <p class="light">ALISON is an e-learning provider and academy founded in Galway, Ireland in 2007 by serial entrepreneur, Mike Feerick. Its stated objective is to enable people to gain basic education and workplace skills.Contrary to other MOOC providers with close links to American third level institutions such as MIT and Stanford University, the majority of ALISON's learners are located in the developing world with the fastest growing number of users in India</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">swap_vertical_circle</i></h2>
            <h5 class="center"><a href="https://www.udacity.com">
            UDACITY</a></h5>

            <p class="light">Udacity is a for-profit educational organization founded by Sebastian Thrun, David Stavens, and Mike Sokolsky offering massive open online courses.According to Thrun, the origin of the name Udacity comes from the company's desire to be "audacious for you, the student".[4][5] While it originally focused on offering university-style courses, it now focuses more on vocational courses for professionals.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="section">

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