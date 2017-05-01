<?php
   $msg="";
session_start();
include("logindb.php");

if(isset($_POST['submit']))
{

if(!isset($_POST['Name']))
{
  $message = "Please Enter Name";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Surname']))
{
$message = "Please Enter Surname";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Email']))
{
$message = "Please Enter Email";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Password']))
{
$message = "Please Enter Password";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Mobile']))
{
$message = "Please Enter Mobile";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Pincode']))
{
$message = "Please Enter Pincode";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['yos']))
{
$message = "Please Enter year of study";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['yoa']))
{
$message = "Please Enter Year of Admission";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['course']))
{
$message = "Please Enter course";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['division']))
{
$message = "Please Enter division";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['yoc']))
{
$message = "Please Enter Year of Completion";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Pointers']))
{
$message = "Please Enter Pointers";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['future_option']))
{
$message = "Please Enter future option";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Certifications']))
{
$message = "Please Enter Certifications";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Courses']))
{
$message = "Please Enter Courses";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif (!isset($_POST['Roll_No']))
{
$message = "Please Enter Roll_No";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{

  $target="profile_pic/".basename($_FILES["profile"]["name"]);
  $profile=$_FILES["profile"]["name"];

 $target1="Certificates/".basename($_FILES["Certificates"]["name"]);
  $Certificates=$_FILES["Certificates"]["name"];

   $target2="Course_Certificates/".basename($_FILES["Course_Certificates"]["name"]);
  $Course_Certificates=$_FILES["Course_Certificates"]["name"];


  $Name=mysqli_real_escape_string($conn,(isset($_POST['Name'])? $_POST['Name']:null));
  $Surname=mysqli_real_escape_string($conn,(isset($_POST['Surname'])? $_POST['Surname']:null));
  $Email=mysqli_real_escape_string($conn,(isset($_POST['Email'])? $_POST['Email']:null));
  $Password=mysqli_real_escape_string($conn,(isset($_POST['Password'])? $_POST['Password']:null));
  $Mobile=mysqli_real_escape_string($conn,(isset($_POST['Mobile'])? $_POST['Mobile']:null));
  $Pincode=mysqli_real_escape_string($conn,(isset($_POST['Pincode'])? $_POST['Pincode']:null));
  $yos=mysqli_real_escape_string($conn,(isset($_POST['yos'])? $_POST['yos']:null));
  $yoa=mysqli_real_escape_string($conn,(isset($_POST['yoa'])? $_POST['yoa']:null));
  $course=mysqli_real_escape_string($conn,(isset($_POST['course'])? $_POST['course']:null));
  $division=mysqli_real_escape_string($conn,(isset($_POST['division'])? $_POST['division']:null));
  $Roll_No=mysqli_real_escape_string($conn,(isset($_POST['Roll_No'])? $_POST['Roll_No']:null));
  $yoc=mysqli_real_escape_string($conn,(isset($_POST['yoc'])? $_POST['yoc']:null));
  $Pointers=mysqli_real_escape_string($conn,(isset($_POST['Pointers'])? $_POST['Pointers']:null));
  $future_option=mysqli_real_escape_string($conn,(isset($_POST['future_option'])? $_POST['future_option']:null));
  $Higher_Studies_option=mysqli_real_escape_string($conn,(isset($_POST['Higher_Studies_option'])? $_POST['Higher_Studies_option']:null));
  $GRE=mysqli_real_escape_string($conn,(isset($_POST['GRE'])? $_POST['GRE']:null));
  $TOEFL=mysqli_real_escape_string($conn,(isset($_POST['TOEFL'])? $_POST['TOEFL']:null));
  $IELTS=mysqli_real_escape_string($conn,(isset($_POST['IELTS'])? $_POST['IELTS']:null));
  $CAT=mysqli_real_escape_string($conn,(isset($_POST['CAT'])? $_POST['CAT']:null));
  $GATE=mysqli_real_escape_string($conn,(isset($_POST['GATE'])? $_POST['GATE']:null));
  $Certifications=mysqli_real_escape_string($conn,(isset($_POST['Certifications'])? $_POST['Certifications']:null));
   $Certificate_Caption=mysqli_real_escape_string($conn,(isset($_POST['caption1'])? $_POST['caption1']:null));
  $Courses=mysqli_real_escape_string($conn,(isset($_POST['Courses'])? $_POST['Courses']:null));
   $Course_Caption=mysqli_real_escape_string($conn,(isset($_POST['caption2'])? $_POST['caption2']:null));

$query2="SELECT `id`, `Name`, `Surname`, `Email` FROM `student` WHERE `Email`='$Email'";
$result2=mysqli_query($conn,$query2);
if(mysqli_num_rows($result2)>=1)
{
  $message = "Email Already Exists..!!";
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location:register.php");
exit();
}


  $query="INSERT INTO `student`(`Name`, `Surname`, `Email`, `Mobile`, `Pincode`, `Password`, `Year`, `Course`, `Division`,`Roll_No`,`Profile`,`yoa`,`yoc`,`Pointers`,`future_option`,`Higher_Studies_option`,`GRE`,`TOEFL`,`IELTS`,`CAT`,`GATE`,`Certifications`,`Courses`) VALUES ('$Name','$Surname','$Email','$Mobile','$Pincode','$Password','$yos','$course','$division','$Roll_No','$target','$yoa','$yoc','$Pointers','$future_option','$Higher_Studies_option','$GRE','$TOEFL','$IELTS','$CAT','$GATE','$Certifications','$Courses')";
   $result=mysqli_query($conn,$query);

 $query1="INSERT INTO `certificates`(`Email`,`Certificates`,`Certificate_Caption`,`Course_Certificates`,`Course_Caption`) VALUES ('$Email','$target1','$Certificate_Caption','$target2','$Course_Caption')";
$result1=mysqli_query($conn,$query1);


$profile_temp=$_FILES["profile"]["tmp_name"];
  if(move_uploaded_file($profile_temp,$target))
  {
    $msg="Image Inserted";
  }
  else
  {
        $msg="Image not Inserted";
  }


  $profile_temp1=$_FILES["Certificates"]["tmp_name"];
  if(move_uploaded_file($profile_temp1,$target1))
  {
    $msg="Image Inserted";
  }
  else
  {
        $msg="Image not Inserted";
  }

  $profile_temp2=$_FILES["Course_Certificates"]["tmp_name"];
  if(move_uploaded_file($profile_temp2,$target2))
  {
    $msg="Image Inserted";
  }
  else
  {
        $msg="Image not Inserted";
  }


   $message = "Thanks for Registering...!!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   $to=$_POST['Email'];
    $subject="Thanks for Registering on HOC Cell Portal.";
    $msg="<h1>HOC Cell</h1> Hi <b>".$Name."</b>,<br>You recently created an Account for your HOC Cell Account. <br>Your Password is <b>".$Password."</b>.<br>You Can Login Here. <a href='tcethoc.esy.es/hoc/'>Login </a>";
          $msg.=" <br> Thanks,
            <br>HOC Cell Team.
            ";


         $header = "From:HOC Cell \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         mail ($to,$subject,$msg,$header);

 
   header("Location:profile.php");
 
 }
}
?>

<!doctype html>
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
  <form action="register.php" method="POST" novalidate="" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
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

<!--Form -->
<br><br>
<div class="container">
<center><h4>Create Account</h4></center><br>
<script>
  $(document).ready(function(){
  $("#business").hide();
    $("#GRE_Score").hide();
     $("#CAT_Score").hide();
      $("#GATE_Score").hide();
        $("#Certificates").hide();
          $("#Certificates_Caption").hide();
            $("#Courses_Certificates").hide();
              $("#Courses_Certificates_Caption").hide();
});
</script>
 <div class="row">
      <div class="row">
        <div class="input-field col s6">
         <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" name="Name" required="" aria-required="true">
          <label for="first_name" data-error="wrong" data-success="right">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" aria-required="true">
          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
        </div>
      </div>

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
     
      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="Mobile" required="" aria-required="true">
          <label for="icon_telephone" data-error="wrong" data-success="right">Mobile</label>
      </div>
       <div class="input-field col s6">
        <i class="material-icons prefix">my_location</i>
          <input id="last_name" type="text" class="validate" name="Pincode" required="" aria-required="true">
          <label for="last_name" data-error="wrong" data-success="right">Pin Code</label>
        </div>
      </div>
<div class="row">
<div class="input-field col s12">
 <i class="material-icons prefix">library_books</i>
    <select name="yos" required="" aria-required="true">
     <option value="" disabled selected>Choose your option</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
    </select>
    <label>Year of Study</label>
</div>
</div>


<div class="row">
<div class="input-field col s12">
 <i class="material-icons prefix">library_books</i>
    <select name="yoa"  class="validate" required="" aria-required="true">
      <option value="" disabled selected>Choose your option</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
       <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
       <option value="2021">2021</option>
        <option value="2022">2022</option>
         <option value="2023">2023</option>
          <option value="2024">2024</option>
           <option value="2025">2025</option>
            <option value="2026">2026</option>
             <option value="2027">2027</option>
              <option value="2028">2028</option>
               <option value="2029">2029</option>
                <option value="2030">2030</option>
    </select>
    <label>Year of Admission</label>
</div>
</div>


<div class="row">
<div class="input-field col s12">
 <i class="material-icons prefix">library_books</i>
    <select name="yoc"  class="validate" required="" aria-required="true">
      <option value="" disabled selected>Choose your option</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
       <option value="2021">2021</option>
        <option value="2022">2022</option>
         <option value="2023">2023</option>
          <option value="2024">2024</option>
           <option value="2025">2025</option>
            <option value="2026">2026</option>
             <option value="2027">2027</option>
              <option value="2028">2028</option>
               <option value="2029">2029</option>
                <option value="2030">2030</option>
    </select>
    <label>Year of BE Completion</label>
</div>
</div>



<div class="row">
<div class="input-field col s12">
 <i class="material-icons prefix">library_books</i>
    <select name="course" class="validate" required="" aria-required="true">
     <option value="" disabled selected>Choose your option</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="EXTC">EXTC</option>
    </select>
    <label>Course</label>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>



<div class="row">
<div class="input-field col s12">
 <i class="material-icons prefix">library_books</i>
    <select name="division" required="" aria-required="true">
      <option value="" disabled selected>Choose your option</option>
      <option value="A">A</option>
          <option value="B">B</option>
    </select>
    <label>Division</label>
</div>
</div>

<div class="row"  id="Roll_No">
          <div class="input-field col s12">
          <input type="number" min="1" max="100" name="Roll_No" value="0" required="">
          <label>Roll No</label>
          </div>
</div>


<div class="row">
        <div class="input-field col s12">
         <i class="material-icons prefix">trending_up</i>
          <input id="Pointers" type="text" class="validate" name="Pointers"  required="" aria-required="true">
          <label for="Pointers" data-error="wrong" data-success="right">Pointers(Average)</label>
        </div>
        
 </div>

<div class="row">

    <div class="file-field input-field col s12">
      <div class="btn">
        <span>File</span>
        <input type="file" name="profile" required="" aria-required="true">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your Profile Picture" >
      </div>
    </div>
</div>

<!--Career Options-->
<center><h4>Career Options</h4></center><br>
       
        <div class="row">
        <div class="input-field col s12">
        <select name="future_option" id="purpose" required="">
          <option value="" disabled selected>Choose your option</option>
          <option value="Placements">Placements</option>
          <option value="Higher_Studies">Higher Studies</option>
          <option value="Entrepreneurship">Entrepreneurship</option>
        </select>
        <label>Choose the option you want to opt for.</label>
        </div>
        </div>
        <script type="text/javascript">
          $(document).ready(function() {
          $('select').material_select();
           });
        </script>
  
        <div class="row" id="business">
        <div class="input-field col s12">
        <select name="Higher_Studies_option" id="business1" >
          <option value="" disabled selected>Choose your option</option>
          <option value="MS">MS</option>
          <option value="MBA">MBA</option>
          <option value="ME">ME/M.Tech</option>
        </select>
        <label>Choose the option you want to opt for.</label>
        </div>
        </div>
      
         <script type="text/javascript">
          $(document).ready(function(){
          $('#purpose').on('change', function() {
          if ( this.value == 'Higher_Studies')
          {
            $("#business").show();
            $("#GRE_Score").show();
            $("#CAT_Score").show();
            $("#GATE_Score").show();
          }
          else
          {
            $("#business").hide();
            $("#GRE_Score").hide();
            $("#CAT_Score").hide();
            $("#GATE_Score").hide(); 
          }
         });
         });

        $(document).ready(function(){
        $('#business1').on('change', function() {
          if ( this.value == 'MS')
          {
            $("#GRE_Score").show();
          }
          else
          {
            $("#GRE_Score").hide();
          }
         });
         });

        $(document).ready(function(){
        $('#business1').on('change', function() {
          if ( this.value == 'MBA')
          {
            $("#CAT_Score").show(); 
          }
          else
          {
            $("#CAT_Score").hide();    
          }
         });
         });
            
            $(document).ready(function(){
        $('#business1').on('change', function() {
          if ( this.value == 'ME')
          {
            $("#GATE_Score").show(); 
          }
          else
          {
            $("#GATE_Score").hide();    
          }
         });
         });

          </script>


        
          <div class="row"  id="GRE_Score">
          <div class="input-field col s12">
          <input type="number" min="0" max="350" name="GRE" value="0" required="">
          <label>Enter GRE Score out of 350</label>
          </div>
        

     
          <div class="input-field col s12">
          <input type="number" min="0" max="350" name="TOEFL" value="0" required="">
          <label>Enter TOEFL Score out of 350</label>
          </div>
        
      
         <div class="input-field col s12">
          <input type="number" min="0" max="350" name="IELTS" value="0" required="">
          <label>Enter IELTS Score out of 350</label>
          </div>
         </div>
      
  

          <div class="row" id="CAT_Score">
          <div class="input-field col s12">
          <input type="number" min="0" max="300" name="CAT" value="0" required="">
           <label>Enter CAT Score out of 300</label>
          </div>
          </div>
          
          <div class="row" id="GATE_Score">
          <div class="input-field col s12">
          <input type="number" min="0" max="300" name="GATE" value="0" required="">
           <label>Enter GATE Score out of 300</label>
          </div>
          </div>


        <div class="row" >
        <div class="input-field col s12">
        <select name="Certifications" id="Certifications" required="" aria-required="true">
          <option value="" disabled selected>Choose your option</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
        <label>Have you done any Certifications.?</label>
        </div>
        </div>

           <script type="text/javascript">
            $(document).ready(function(){
        $('#Certifications').on('change', function() {
          if ( this.value == 'Yes')
          {
            $("#Certificates").show(); 
          }
          else
          {
            $("#Certificates").hide();    
          }
         });
         });
          </script>

          <div class="file-field input-field" id="Certificates">
          <div class="row">
            <div class="input-field col s12">
          <div class="btn">
            <span>File</span>
            <input type="file" name="Certificates" multiple required="" aria-required="true" >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Select Certificates" readonly="">
          </div>
          </div>
          </div>
          <div class="row" id="Certificates_Caption">
          <div class="input-field col s12">
          <textarea id="caption1" class="materialize-textarea" name="caption1" ></textarea>
          <label for="textarea1">What is the Certificate About ?</label>
          </div>
          </div>
          </div>

          <div class="row" >
        <div class="input-field col s12">
        <select name="Courses" id="Courses" required="" aria-required="true">
          <option value="" disabled selected>Choose your option</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
        <label>Have you done any Courses.?</label>
        </div>
        </div>

           <script type="text/javascript">
            $(document).ready(function(){
        $('#Courses').on('change', function() {
          if ( this.value == 'Yes')
          {
            $("#Courses_Certificates").show(); 
          }
          else
          {
            $("#Courses_Certificates").hide();    
          }
         });
         });
          </script>

          <div class="file-field input-field" id="Courses_Certificates">
          <div class="row">
        <div class="input-field col s12">
          <div class="btn">
            <span>File</span>
            <input type="file" name="Course_Certificates" multiple required="" aria-required="true">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Select Courses Certificates" readonly="">
          </div>
          </div>
          </div>
          
          <div class="row" id="Courses_Certificates_Caption">
          <div class="input-field col s12">
          <textarea id="caption2" class="materialize-textarea" name="caption2" ></textarea>
          <label for="textarea1">What is the Course Certificate About ?</label>
          </div>
          </div>

          </div>
           <br><br>
             <center><button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                </button></center>

<!--End of Career Options-->

</div>
</div>

<!--End of Form -->


<!-- Modal Structure -->
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

