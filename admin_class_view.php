<?php
ob_start();
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
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
  <form action="admin_class_view.php" method="POST" novalidate="" enctype="multipart/form-data">
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
<br>

<div class="container">
<center><h4><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Class View</b></h4></center><br>

  <div class="card-panel pink lighten-5">
  <br><center><h5>Search By Data</h5></center>
<script type="text/javascript">
          $(document).ready(function() {
          $('select').material_select();
           });
</script>

<br>
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
          <center><button class="btn waves-effect waves-light" type="submit" name="view1">View
  </button></center>
</div>
</div>

</form>




  <br><br>
<div class="card-panel grey lighten-4">
     
        <table class="highlight centered responsive-table">

        <thead>
          <tr>
              <th data-field="Name">Name</th>
              <th data-field="Surname">Surname</th>
              <th data-field="Email">Email</th>
              <th data-field="Mobile">Mobile</th>
              <th data-field="Pincode">Pincode</th>
              <th data-field="Roll_No">Roll No</th>
              <th data-field="Pointers">Pointers</th>
             <th data-field="future_option">Future Option</th>
             <th data-field="Higher_Studies_option">Higher Studies Option</th>

          </tr>
        </thead>

        <tbody>
                  <?php 

if(isset($_POST['view1']))
{

if (!isset($_POST['yos']))
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

else
{
    
  $yos=mysqli_real_escape_string($conn,(isset($_POST['yos'])? $_POST['yos']:null));
  $yoa=mysqli_real_escape_string($conn,(isset($_POST['yoa'])? $_POST['yoa']:null));
  $course=mysqli_real_escape_string($conn,(isset($_POST['course'])? $_POST['course']:null));
  $division=mysqli_real_escape_string($conn,(isset($_POST['division'])? $_POST['division']:null));
 $query="SELECT * FROM `student` WHERE Year='$yos' and yoa='$yoa' and Course='$course'and Division='$division' ";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);


 if(!is_array($row))
        {
          $message = "Student Data does not Exists..!";
         echo "<script type='text/javascript'>alert('$message');</script>";
         header("Refresh:0");

        }
        


       foreach ($result as $row) 
       {
        ?>
          <tr>
            <td><?php echo $row["Name"];  ?></td>
            <td><?php echo $row["Surname"];  ?></td>
            <td><?php echo $row["Email"];  ?></td>
            <td><?php echo $row["Mobile"];  ?></td>
            <td><?php echo $row["Pincode"];  ?></td>
            <td><?php echo $row["Roll_No"];  ?></td>
            <td><?php echo $row["Pointers"];  ?></td>
            <td><?php echo $row["future_option"];  ?></td>
            <td><?php echo $row["Higher_Studies_option"];  ?></td>

          </tr>
          <?php 
        } 
}
}

          ?>
        </tbody>
      </table>     
   
</div>
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