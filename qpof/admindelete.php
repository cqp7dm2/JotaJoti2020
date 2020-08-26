<?php
  //first:connect to db
  include "conn.php";

  //second
  $id=intval($_GET['id']);

  //create sql
  $sql="DELETE FROM admin WHERE admin_id=$id";
  $result=mysqli_query($conn, $sql);

  //i unseccessfully deleted them
  if(mysqli_affected_rows($conn)<=0)
  {
    echo "<script>alert('Unable to delete admin!');";
    die ("window.location.href='manageadmin.php';</script>");
  }

  //successfully deleted them
  echo "<script>alert('Data deleted!');</script>";
  echo "<script>window.location.href='manageadmin.php';</script>";

 ?>
