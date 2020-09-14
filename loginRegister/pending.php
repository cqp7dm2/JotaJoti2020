<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Week Two</title>
    <link rel="icon" href="../assets/img/2020.png">
    <link rel="stylesheet" href="pending.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177875132-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177875132-1');
</script>

    <?php
    SESSION_start()
     ?>

     <?php
     // FOR USERS TO VALIDATION ON THE LOGIN
     //AVOID USER COME INTO PAGE WITHOUT LOGIN
       if(empty($_SESSION['user_id'])) {
       header("Location:login.php");
       }
      ?>



  </head>
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

                     <div id=container>
                       make
                       <div id=flip>
                         <div><div></div></div>
                         <div><div>lifeStyle</div></div>
                         <div><div>Everything</div></div>
                       </div>
                       AweSoMe!
                     </div>

                     <p>Design & Develop By ICT @ Jota Joti 2020</p>


                                           <script src="../assets/vendor/jquery/jquery.min.js"></script>
                                           <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                                           <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
                                           <script src="../assets/vendor/php-email-form/validate.js"></script>
                                           <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                                           <script src="../assets/vendor/venobox/venobox.min.js"></script>
                                           <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
                                           <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

                                           <script src="../assets/js/main.js"></script>



</div>
</div>
</div>

  </body>
</html>
