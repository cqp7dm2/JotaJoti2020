<?php
  SESSION_start();
  SESSION_unset();
  SESSION_destroy();
  header("Location:/login.php");
  exit();
 ?>
