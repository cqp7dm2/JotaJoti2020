<?php


if (Isset($_POST['submit'])) {

  include_once 'conn.php';

  $Fname = mysqli_real_escape_string($conn,$_POST['first_name']);
  $Lname = mysqli_real_escape_string($conn,$_POST['last_name']);
  $email = mysqli_real_escape_string($conn,$_POST['Email']);
  $sub= mysqli_real_escape_string($conn,$_POST['Sub']);
  $mes = mysqli_real_escape_string($conn,$_POST['Mes']);


  if (empty($Fname) || empty($Lname) || empty($email) || empty($sub) ||  empty($mes))
  {
    echo ('<script>alert("Empty Slot!")</script>');
    echo "<script>window.location.href='contactus.php';</script>";
      exit();
  }else{
  //insert the user into the databased
  $sql = "Insert into contactus (con_Fname, con_Lname, con_Email, con_Sub, con_Mes)
  VALUES ('$Fname', '$Lname', '$email', '$sub', '$mes');";


  mysqli_query($conn, $sql);

  echo ('<script>alert("Submission Sucessfully!")</script>');
  echo "<script>window.location.href='contactus.php';</script>";
  exit();
   }
 }

?>
