<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:index.php");
exit();
}
$Email=$_SESSION["Email"];
 $query="SELECT * FROM `student` WHERE Email='$Email'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);

 $query1="SELECT * FROM `certificates` WHERE Email='$Email'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_array($result1);
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

<center><h4>Welcome  <?php echo $_SESSION["Name"]; ?></h4></center>
<center><img src="<?php echo $row["Profile"]; ?>" alt="<?php echo $row["Profile"]; ?>" height="100" width="100" class="responsive-img"> </center>
<div class="container">
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active"  href="#test1">Profile</a></li>
        <li class="tab col s3"><a href="#test2">Career Options</a></li>
        <li class="tab col s3"><a href="#test3">Certifications</a></li>
        <li class="tab col s3"><a href="#test4">Courses</a></li>
      </ul>
    </div>
    <!--Tab 1-->
<div id="test1" class="col s12"><br><br>
<div class="row">
      <div class="row">
        <div class="input-field col s6">
         <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" name="Name" required="" value="<?php echo $row["Name"]; ?>" aria-required="true" readonly="">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["Surname"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Last Name</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="Email" class="validate"  required="" value="<?php echo $row["Email"]; ?>" aria-required="true" readonly="">
          <label for="email" >Email</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="Mobile" required="" value="<?php echo $row["Mobile"]; ?>" aria-required="true" readonly="">
          <label for="icon_telephone">Mobile</label>
      </div>
       <div class="input-field col s6">
        <i class="material-icons prefix">my_location</i>
          <input id="last_name" type="text" class="validate" name="Pincode" required="" value="<?php echo $row["Pincode"];?>" aria-required="true" readonly="">
          <label for="last_name" >Pin Code</label>
        </div>
      </div>
   
      <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="last_name" type="text" class="validate" name="Year" required="" value="<?php echo $row["Year"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Year of Study</label>
        </div>
       <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="last_name" type="text" class="validate" name="yoc" required="" value="<?php echo $row["yoc"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Year of BE Completion</label>
        </div>
      </div>

     <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="last_name" type="text" class="validate" name="Course" required="" value="<?php echo $row["Course"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Course</label>
        </div>
       <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="last_name" type="text" class="validate" name="Division" required="" value="<?php echo $row["Division"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Division</label>
        </div>
      </div>
       <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="Roll_No" type="text" class="validate" name="Roll_No" required="" value="<?php echo $row["Roll_No"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Roll No</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
          <input id="yoa" type="text" class="validate" name="yoa" required="" value="<?php echo $row["yoa"]; ?>" aria-required="true" readonly="">
          <label for="yoa" >Year of Admission</label>
        </div>
        </div>
      <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">trending_up</i>
                <input id="Pointers" type="text" class="validate" name="Pointers"  required="" value="<?php echo $row["Pointers"]; ?>" aria-required="true" readonly="">
                <label for="Pointers">Pointers(Average)</label>
              </div>    
       </div>

</div>
</div>
    <!--End of Tab 1-->

 <!-- Tab 2-->
<div id="test2" class="col s12">

<div class="row">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="Future" required="" value="<?php echo $row["future_option"]; ?>" aria-required="true" readonly="">
          <label for="first_name">Future Option</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["Higher_Studies_option"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >Higher Studies option</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="Future" required="" value="<?php echo $row["GRE"]; ?>" aria-required="true" readonly="">
          <label for="first_name" >GRE Score</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["TOEFL"]; ?>" aria-required="true" readonly="">
          <label for="last_name" >TOEFL Score</label>
        </div>
      </div>


       <div class="row">
        <div class="input-field col s4">
          <input id="first_name" type="text" class="validate" name="Future" required="" value="<?php echo $row["IELTS"]; ?>" aria-required="true" readonly="">
          <label for="first_name" >IELTS Score</label>
        </div>
        <div class="input-field col s4">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["CAT"]; ?>" aria-required="true" readonly="">
          <label for="last_name">CAT Score</label>
        </div>

        <div class="input-field col s4">
          <input id="first_name" type="text" class="validate" name="Future" required="" value="<?php echo $row["GATE"]; ?>" aria-required="true" readonly="">
          <label for="first_name" >GATE Score</label>
        </div>
      </div>


       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="Future" required="" value="<?php echo $row["Certifications"]; ?>" aria-required="true" readonly="">
          <label for="first_name" >Certifications</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["Courses"]; ?>" aria-required="true" readonly="">
          <label for="last_name">Courses</label>
        </div>
      </div>
</div>
</div>
<!--End of Tab 2-->

<!--Tab 3-->
<div id="test3" class="col s12"><br><br>
<div class="row">


      <div class="row">
        <div class="input-field col s3">
        <?php 
        foreach($result1 as $row1)
{
         ?>
          <img src="<?php echo $row1["Certificates"]; ?>" class="materialboxed"  height="110" width="110"><br><?php echo $row1["Certificate_Caption"]; } ?> 
        </div>
      </div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
</div>
</div>
<!--End of Tab 3-->
<!--Tab 4-->
<div id="test4" class="col s12"><br><br>
<div class="row">


      <div class="row">
        <div class="input-field col s3">
         <?php 
        foreach($result1 as $row1)
{
         ?>
          <img src="<?php echo $row1["Course_Certificates"]; ?>" class="materialboxed"  height="110" width="110" ><br><?php echo $row1["Course_Caption"]; } ?>
        </div>
      </div>


</div>
</div>
<!--End of Tab 4-->

   </div>
</div>
</div>
  <script type="text/javascript">  
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });

  </script>


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
  <!-- Float button -->
   <div class="fixed-action-btn">
    <a href="profile_edit.php" class="btn-floating btn-large red" name="edit">
      <i class="large material-icons">mode_edit</i>
    </a>
  </div>
<script type="text/javascript">
  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();
</script>
<!-- End of Float button -->

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

  </body>
</html>
