<?php
session_start();
include("logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:admin.php");
exit();
}

$query="SELECT * FROM `event` ";
 $result=mysqli_query($conn,$query);
 $key=mysqli_fetch_array($result);
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
   <form action="admin_modify_student.php" method="POST">
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
<center><a href="admin_home.php"><img src="admin_images/admin_logo.PNG" height="100" width="100" class="responsive-img circle"></a></center>
<div class="container">
<center><h5 class="red-text text-darken-4"><b>Click Event Name to Edit Event Data</b></h5></center>
<div class="card-panel grey lighten-4">
     
        <table class="highlight centered responsive-table">
        <thead>
          <tr>
              <th data-field="Event_Name">Event_Name</th>
              <th data-field="From">From</th>
              <th data-field="To">To</th>
              <th data-field="Time[From]">Time[From]</th>
              <th data-field="Time[To]">Time[To]</th>
              <th data-field="Event_Fees">Event Fees</th>
              <th data-field="Lecturer_Name">Expert Name</th>
             <th data-field="Venue">Venue</th>
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
            <td><?php echo $row["Date_From"];  ?></td>
            <td><?php echo $row["Date_To"];  ?></td>
            <td><?php echo $row["Time_From"];  ?></td>
            <td><?php echo $row["Time_To"];  ?></td>
            <td><?php echo $row["Event_Fees"];  ?></td>
            <td><?php echo $row["Lecturer_Name"];  ?></td>
            <td><?php echo $row["Venue"];  ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>     
   
</div>
</div>


</form>

  </body>
</html>
