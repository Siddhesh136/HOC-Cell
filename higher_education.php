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

  <div class="card">
      <div class="card-content">
          <h4>MBA</h4>
      </div>
    <div class="card-tabs">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a href="#test1">Why</a></li>
          <li class="tab"><a class="active" href="#test2">How</a></li>
          <li class="tab"><a href="#test3">Where</a></li>
        </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test1">
      <p>
        If you're preparing to enter the business world the short answer is "definitely YES!" An MBA will offer you a wealth of advantages, especially when it is a top business school with a very good reputation. Getting a higher salary after graduation, landing a top management position or even becoming your own boss are just a few of the advantages!
      </p>
      </div>
      <div id="test2"><p><center>How to get into the best MBA programs in the world
                        GMAT prep, MBA applications, selecting business schools in USA, Canada, India, UK</center>

        <br> 
1. Earn Your BE.<br>2. Take the GMAT. <br>3. Get Real World Experience.<br> 4.Research Programs. 
<br>5. Know the Requirements.
</p>
    </div>
      <div id="test3">
        <p>
       Top MBA abroad places for Indian students<br>
1. USA.<br>2. England (UK)<br>3. Canada. <br>4. Singapore. <br>5. Australia.

      </p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <h4>MS</h4>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Why</a></li>
        <li class="tab"><a class="active" href="#test5">How</a></li>
        <li class="tab"><a href="#test6">Where</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">
        <p>
1. Doing research could help you to get some assistantships to help you pay for your tuition fees.<br>
2. You could contribute something to the world of science.<br>
3. You could end up making the world a better place (by indirectly helping someone)- for ex: if you are able to create an artificial eye for the blind there will be so many people benefited (and such things products of research).<br>
4. You could work in the R&D (Research and Development) department of companies (trying to invent or improve upon products).<br>
5. All through your undergraduate degree you would hardly have done anything practical (most students don’t!) and if you are going to do the same theoretical work in your Master’s degree….well….it’s not much fun, is it?<br>
      </p>
      </div>
      <div id="test5">
        <p><center>How to get into the best MS programs in the world
 MS applications in USA, Canada, India, UK</center>

<br> 
Applying to a graduate school is a long and daunting series of tasks.<br>

1. After you have short-listed the universities, you begin filling complicated and lengthy application forms, you start writing your Statements of Purpose, preparing your resume, and obtaining Letters of Recommendation from your professors in college.<br>
2. Having the assistance of experts with a keen eye for all these issues that affect your chances admission, and resolving such issues quickly and decisively will maximize your chances of getting in.<br>
3. Pre- final year students are highly recommended to start building up their profile as US MS applications warrant a portfolio of research work/ papers/ projects on the field they want to specialize in. Unfortunately in India as against the US education systems, research papers/ projects are not an integral part of Under Grad courses. Indian students have to work on their profile at least from the year before they have to send their applications. They should be advised from experts on what how a which projects/profile development work will be best for them.
      </div>
      <div id="test6">
        <p>
        1. United States: US has become the best destination place for the students who want to study MS in Abroad. Mostly Indian students prefer to study in US.<br>
2. United Kingdom<br>
3. Australia<br>
4. Germany:Germany is the best place for studying MS.<br>
      </p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <h4>ME/M.Tech</h4>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test7">Why</a></li>
        <li class="tab"><a class="active" href="#test8">How</a></li>
        <li class="tab"><a href="#test9">Where</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test7">
        <p>
       1. Educational qualifications play a very important role in one’s life in gaining success. Of course, technical skills matter a lot, but a candidate with higher academic qualification will be given preference. <br>
2. While pursuing a higher degree, you will be exposed to the applications of engineering in day-to-day life a little more. You will be getting more insight into the subjects as you are already familiar with these topics learnt at the bachelor level.<br>
3. This degree will also land you in a far more well-paid job getting which is quite hard on the basis of your B.Tech degree. Whether it is private company or government organization, candidate with a higher degree is considered more competent for the job.
      </p>
      </div>
      <div id="test8">
        <p>1. In order to pursue M.Tech in India from Top Colleges, an aspirant needs to take GATE (Graduate Aptitude Test in Engineering) which is jointly conducted by IITs and IISC, Bangalore. The exam generally takes place in February. Depending on the GATE score, aspirants can also apply for financial assistance. For teaching Assistantship and Research Assistantship, financial assistance is offered for a valid GATE score. <br><br>

2. There are many top notch colleges that are considered best for pursuing M.Tech. Among these are the colleges of IITs, NITs, IIITs, and BITs. IISc Bangalore is also one of the best colleges that offer an M.Tech degree. There are many colleges in south that are considered best to pursue MTech degree. Admission to M.Tech course in few colleges is purely on the basis of academic performance in BTech course</p>
        </div>
        <div id="test9">
          <p>
        The top M.Tech colleges in India are listed below:<br>


IIT Mumbai<br>
Indian Institute of Science or I.I.Sc., Bangalore<br>
IIT Delhi<br>
IIT Guwahati<br>
IIT Kanpur<br>
IIT Chennai<br>
IIT Roorkee<br>
Birla Institute of Technology and Science or B.I.T.S., Pilani<br>
Indian School of Mines University or I.S.M.U., Dhanbad<br>
National Institute of Technology, Tiruchirapalli or N.I.T- T.<br>

      </p>
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