<?php
if (isset($_POST['submit'])){
  SESSION_start();
  SESSION_unset();
  SESSION_destroy();
  header("Location: /login.php?=LoginOut");
  exit();
}
 ?>
