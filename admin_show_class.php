<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
}
$yos=$_GET['yos'];
$yoa=$_GET['yoa'];
$course=$_GET['course'];
$division=$_GET['division'];
$query="SELECT * FROM `student` WHERE Year='$yos' and yoa='$yoa' and Course='$course'and Division='$division'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
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
             <th data-field="future_option">Venue</th>
             <th data-field="Higher_Studies_option">Higher Studies Option</th>

          </tr>
        </thead>

        <tbody>
                  <?php 



       foreach ($result as $row) 
       {
        ?>
          <tr>
            <td><a href="admin_modify_event.php?Event_Name=<?php echo $row["Event_Name"]; ?>"><?php echo $row["Event_Name"];  ?></a>
            </td>
            <td><?php echo $row["Name"];  ?></td>
            <td><?php echo $row["Surname"];  ?></td>
            <td><?php echo $row["Email"];  ?></td>
            <td><?php echo $row["Mobile"];  ?></td>
            <td><?php echo $row["$Pincode"];  ?></td>
            <td><?php echo $row["Roll_No"];  ?></td>
            <td><?php echo $row["Pointers"];  ?></td>
            <td><?php echo $row["future_option"];  ?></td>
            <td><?php echo $row["Higher_Studies_option"];  ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>     
   
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

  </body>
</html>a