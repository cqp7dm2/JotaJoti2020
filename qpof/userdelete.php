<?php
  //first:connect to db
  include "conn.php";

  //second
  $id=intval($_GET['id']);

  //create sql
  $sql="DELETE FROM user WHERE user_id=$id";
  $result=mysqli_query($conn, $sql);

  //i unseccessfully deleted them
  if(mysqli_affected_rows($conn)<=0)
  {
    echo "<script>alert('Unable to delete user!');";
    die ("window.location.href='manageuser.php';</script>");
  }

  //successfully deleted them
  echo "<script>alert('Data deleted!');</script>";
  echo "<script>window.location.href='manageuser.php';</script>";

 ?>
