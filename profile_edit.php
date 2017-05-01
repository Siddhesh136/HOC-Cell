<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:profile.php");
exit();
}
$Email=$_SESSION["Email"];
 $query="SELECT * FROM `student` WHERE Email='$Email'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);

 $query1="SELECT * FROM `certificates` WHERE Email='$Email'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_array($result1);



if(isset($_POST['submit1']))
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
elseif (!isset($_POST['Roll_No']))
{
$message = "Please Enter ROll No";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{


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
  $yoc=mysqli_real_escape_string($conn,(isset($_POST['yoc'])? $_POST['yoc']:null));
  $Roll_No=mysqli_real_escape_string($conn,(isset($_POST['Roll_No'])? $_POST['Roll_No']:null));
  $Pointers=mysqli_real_escape_string($conn,(isset($_POST['Pointers'])? $_POST['Pointers']:null));

 $query2=" UPDATE `student` SET `Name`='$Name',`Surname`='$Surname',`Email`='$Email',`Mobile`='$Mobile',`Pincode`= '$Pincode',`Password`='$Password',`Year`='$yos',`yoa`='$yoa',`Roll_No`='$Roll_No',`Course`='$course',`Division`='$division',`yoc`='$yoc',`Pointers`='$Pointers' WHERE `Email`='$Email'";
$result2=mysqli_query($conn,$query2);
  header("Location:profile.php");
}
}

if(isset($_POST['submit2']))
{

if(!isset($_POST['future_option']))
{
  $message = "Please Enter future option";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{

 $future_option=mysqli_real_escape_string($conn,(isset($_POST['future_option'])? $_POST['future_option']:null));
  $Higher_Studies_option=mysqli_real_escape_string($conn,(isset($_POST['Higher_Studies_option'])? $_POST['Higher_Studies_option']:null));
  $GRE=mysqli_real_escape_string($conn,(isset($_POST['GRE'])? $_POST['GRE']:null));
  $TOEFL=mysqli_real_escape_string($conn,(isset($_POST['TOEFL'])? $_POST['TOEFL']:null));
  $IELTS=mysqli_real_escape_string($conn,(isset($_POST['IELTS'])? $_POST['IELTS']:null));
  $CAT=mysqli_real_escape_string($conn,(isset($_POST['CAT'])? $_POST['CAT']:null));
  $GATE=mysqli_real_escape_string($conn,(isset($_POST['GATE'])? $_POST['GATE']:null));

 $query3="UPDATE `student` SET `future_option`='$future_option',`Higher_Studies_option`='$Higher_Studies_option',`GRE`='$GRE',`TOEFL`='$TOEFL',`IELTS`='$IELTS',`CAT`='$CAT',`GATE`='$GATE' WHERE Email='$Email'";
$result3=mysqli_query($conn,$query3);
   header("Location:profile.php");
}
}


if(isset($_POST['submit3']))
{

 $target1="Certificates/".basename($_FILES["Certificates"]["name"]);
  $Certificates=$_FILES["Certificates"]["name"];

 $query3="INSERT INTO `certificates`(`Email`,`Certificates`) VALUES ('$Email','$target1')";
$result3=mysqli_query($conn,$query3);

 $profile_temp1=$_FILES["Certificates"]["tmp_name"];
  if(move_uploaded_file($profile_temp1,$target1))
  {
    $msg="Image Inserted";
  }
  else
  {
        $msg="Image not Inserted";
  }
 header("Location:profile.php");
}



if(isset($_POST['submit4']))
{

   $target2="Course_Certificates/".basename($_FILES["Course_Certificates"]["name"]);
  $Course_Certificates=$_FILES["Course_Certificates"]["name"];

 $query4="INSERT INTO `certificates`(`Email`,`Course_Certificates`) VALUES ('$Email','$target2')";
$result4=mysqli_query($conn,$query4);

 $profile_temp2=$_FILES["Course_Certificates"]["tmp_name"];
  if(move_uploaded_file($profile_temp2,$target2))
  {
    $msg="Image Inserted";
  }
  else
  {
        $msg="Image not Inserted";
  }
   header("Location:profile.php");
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
<center><img src="<?php echo $row["Profile"]; ?>" alt="<?php echo $row["Profile"]; ?>" height="70" width="70" class="responsive-img"> </center>
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
          <input id="first_name" type="text" class="validate" name="Name" required="" value="<?php echo $row["Name"]; ?>" aria-required="true">
          <label for="first_name" data-error="wrong" data-success="right">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="Surname" required="" value="<?php echo $row["Surname"]; ?>" aria-required="true" >
          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="Email" class="validate"  required="" value="<?php echo $row["Email"]; ?>" aria-required="true" >
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="15" required="" value="<?php echo $row["Password"]; ?>" aria-required="true">
          <label for="password" data-error="wrong" data-success="right">Password</label>
        </div>
      </div> 
      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="Mobile" required="" value="<?php echo $row["Mobile"]; ?>" aria-required="true">
          <label for="icon_telephone" data-error="wrong" data-success="right">Mobile</label>
      </div>
       <div class="input-field col s6">
        <i class="material-icons prefix">my_location</i>
          <input id="last_name" type="text" class="validate" name="Pincode" required="" value="<?php echo $row["Pincode"];?>" aria-required="true">
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
          <label for="yos" data-error="wrong" data-success="right">Year of Study</label>
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
            <label for="yoc" data-error="wrong" data-success="right">Year of BE Completion</label>
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
              <label for="course" data-error="wrong" data-success="right">Course</label>
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
              <label for="division" data-error="wrong" data-success="right">Division</label>
          </div>
          </div>

          <div class="row" id="Roll_No">
          <div class="input-field col s12">
           <i class="material-icons prefix">library_books</i>
          <input type="number" min="1" max="100" name="Roll_No" value="<?php echo $row["Roll_No"]; ?>" required="">
           <label>Roll No</label>
          </div>
          </div>

      <div class="row">
              <div class="input-field col s12">
               <i class="material-icons prefix">trending_up</i>
                <input id="Pointers" type="text" class="validate" name="Pointers"  required="" value="<?php echo $row["Pointers"]; ?>" aria-required="true">
                <label for="Pointers" data-error="wrong" data-success="right">Pointers(Average)</label>
              </div>    
       </div>

           <br><br>
           <center><a class="waves-effect waves-light btn" href="#modal1" name="mod1">Save</a></center><br><br><br><br>


</div>
</div>
    <!--End of Tab 1-->

 <!-- Tab 2-->
<div id="test2" class="col s12">

<div class="row">
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
          <option value="ME">ME</option>
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
            $("#CAT_Score").hide();
            $("#GATE_Score").hide();
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
             $("#GRE_Score").hide();
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


          <div class="row" id="GRE_Score">
          <div class="input-field col s12">
          <input type="number" min="0" max="350" name="GRE" value="0" required="">
          <label>Enter GRE Score out of 350</label>
          </div>
          

          <div class="row" >
          <div class="input-field col s12">
          <input type="number" min="0" max="350" name="TOEFL" value="0" required="">
          <label>Enter TOEFL Score out of 350</label>
          </div>
          </div>
          <div class="row">
         <div class="input-field col s12">
          <input type="number" min="0" max="350" name="IELTS" value="0" required="">
          <label>Enter IELTS Score out of 350</label>
          </div>
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

          <br><br>
           <center><a class="waves-effect waves-light btn" href="#modal2" name="mod2">Save</a></center><br><br><br><br>
</div>
</div>
<!--End of Tab 2-->

<!--Tab 3-->
<div id="test3" class="col s12"><br><br>
<div class="row">


      <div class="row">
        <div class="input-field col s12">
          <img src="<?php echo $row1["Certificates"]; ?>" alt="<?php echo $row1["Certificates"]; ?>" height="90" width="90" class="responsive-img">
        </div>
      </div>
      <div class="row">
       <div class="input-field col s12">
           <div class="file-field input-field" id="Certificates">
          <div class="btn">
            <span>File</span>
            <input type="file" name="Certificates" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Select Certificates" readonly="">
          </div>
          </div>
        </div>
      </div>


               <br><br>
           <center><a class="waves-effect waves-light btn" href="#modal3" name="mod3">Save</a></center><br><br><br><br>
</div>
</div>
<!--End of Tab 3-->
<!--Tab 4-->
<div id="test4" class="col s12"><br><br>
<div class="row">


      <div class="row">
        <div class="input-field col s12">
          <img src="<?php echo $row1["Course_Certificates"]; ?>" alt="<?php echo $row1["Course_Certificates"]; ?>" height="90" width="90" class="responsive-img">
        </div>
      </div>

          <div class="row">
           <div class="input-field col s12">
            <div class="file-field input-field" id="Courses_Certificates">
                    <div class="btn">
                      <span>File</span>
                      <input type="file" name="Course_Certificates" multiple>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Select Courses Certificates" readonly="">
                    </div>
            </div>
          </div>
          </div>

                   <br><br>
           <center><a class="waves-effect waves-light btn" href="#modal4" name="mod4">Save</a></center><br><br><br><br>
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

  <script type="text/javascript">
     $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>
<!--Modal 1-->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <center><h4>Are You Sure..?</h4>
      <p>You Want to Save this Data..</p>
      </center>
    </div>
    <div class="modal-footer">
    <center>
    
       <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
       <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" name="submit1">
       </center>
    </div>
  </div>
  <!--End of Modal 1-->

<!--Modal 2-->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <center><h4>Are You Sure..?</h4>
      <p>You Want to Save this Data..</p>
      </center>
    </div>
    <div class="modal-footer">
    <center>
    
       <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
       <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" name="submit2">
       </center>
    </div>
  </div>
  <!--End of Modal 2-->

<!--Modal 3-->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <center><h4>Are You Sure..?</h4>
      <p>You Want to Save this Data..</p>
      </center>
    </div>
    <div class="modal-footer">
    <center>
    
       <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
       <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" name="submit3">
       </center>
    </div>
  </div>
  <!--End of Modal 3-->

<!--Modal 4-->
  <div id="modal4" class="modal">
    <div class="modal-content">
      <center><h4>Are You Sure..?</h4>
      <p>You Want to Save this Data..</p>
      </center>
    </div>
    <div class="modal-footer">
    <center>
    
       <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
       <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" name="submit4">
       </center>
    </div>
  </div>
  <!--End of Modal 4-->


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
