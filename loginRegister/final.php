<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Final</title>
    <link rel="icon" href="../assets/img/2020.png">
  </head>

  <?php
  SESSION_start();
  // FOR USERS TO VALIDATION ON THE LOGIN
  //AVOID USER COME INTO PAGE WITHOUT LOGIN
    if(empty($_SESSION['u_id'])) {
    header("Location:login.php");
    }
   ?>

  <body id= "page-top">

        <div id="wrapper">
            <?php
            include ('usersidebar.php');
             ?>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <?php
                    include ('usernav.php');
                     ?>


    <h1>Final Page</h1>
</div>
</div>
</div>

  </body>
</html>
