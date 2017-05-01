<?php
session_start();
include("../logindb.php");
if(!isset($_SESSION["Email"]))
{
  header("Location:index.php");
exit();
}
if(isset($_POST['view']))
{

if (!isset($_POST['Email']))
{
$message = "Please Enter Email";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{


        if($conn)
        {


        $Email=mysqli_real_escape_string($conn,(isset($_POST['Email'])? $_POST['Email']:null));
      $query="SELECT * FROM `student` WHERE Year='$yos',yoa='$yoa',Course='$course',Division='$division',Roll_No='$Roll_No'";
      $result=mysqli_query($conn,$query);
      $row=mysqli_fetch_array($result);

      $query1="SELECT * FROM `certificates` WHERE Year='$yos',yoa='$yoa',Course='$course',Division='$division',Roll_No='$Roll_No'";
      $result1=mysqli_query($conn,$query1);
      $row1=mysqli_fetch_array($result1);
        if(!is_array($row))
        {
         $message = "Student Data does not Exists..!";
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
elseif (!isset($_POST['Roll_No']))
{
$message = "Please Enter Roll_No";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{


        if($conn)
        {
  $yos=mysqli_real_escape_string($conn,(isset($_POST['yos'])? $_POST['yos']:null));
  $yoa=mysqli_real_escape_string($conn,(isset($_POST['yoa'])? $_POST['yoa']:null));
  $course=mysqli_real_escape_string($conn,(isset($_POST['course'])? $_POST['course']:null));
  $division=mysqli_real_escape_string($conn,(isset($_POST['division'])? $_POST['division']:null));
  $Roll_No=mysqli_real_escape_string($conn,(isset($_POST['Roll_No'])? $_POST['Roll_No']:null));
 $query="SELECT * FROM `student` WHERE Year='$yos',yoa='$yoa',Course='$course',Division='$division',Roll_No='$Roll_No'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);

 $query1="SELECT * FROM `certificates` WHERE Year='$yos',yoa='$yoa',Course='$course',Division='$division',Roll_No='$Roll_No'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_array($result1);


 if(!is_array($row))
        {
         $message = "Student Data does not Exists..!";
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

?>