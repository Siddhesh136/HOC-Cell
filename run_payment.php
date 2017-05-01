<?php
session_start();
include("logindb.php");
$Email=mysqli_real_escape_string($conn,(isset($_GET["Email"])? $_GET["Email"]:null));
$Event_Name=mysqli_real_escape_string($conn,(isset($_GET["Event_Name"])? $_GET["Event_Name"]:null));
$Name=mysqli_real_escape_string($conn,(isset($_GET["Name"])? $_GET["Name"]:null));
$Surname=mysqli_real_escape_string($conn,(isset($_GET["Surname"])? $_GET["Surname"]:null));
$query1="UPDATE `student_registration` SET `Payment`='Yes' WHERE   `Event_Name`='$Event_Name' AND `Email`='$Email' AND `Name`='$Name' AND `Surname`='$Surname'";
  $result1=mysqli_query($conn,$query1);
  header("Location:admin_view_registration.php");
?>