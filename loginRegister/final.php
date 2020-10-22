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


                     <!-- 2nd Competition  -->
                                           <section id="features" class="features">
                                             <div class="container">
                                               <h3 data-aos="fade-right" style="color: #fab800;">Jota-Joti 2020| Final Submission</h3>
                                               <p class="futura" data-aos="flip-down">Let send ur your conpletion card to collect your cert</p>

                                               <div class="row">
                                                 <div class="col-lg-3">
                                                   <ul class="nav nav-tabs flex-column">
                                                     <li class="nav-item">
                                                       <a class="nav-link active show" data-toggle="tab" href="#cab-1">DESCRIPTION</a>
                                                     </li>

                                                   </ul>
                                                   <!-- <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#" >Coming Soon ... </a> -->
                                                   <a class="mt-4 btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1m5fIlB8efIYdmwwg7UwJemK229ZbWCgsF9s2qpOE9zI/edit#responses" target="_blank">Submit Your Completion Card Here</a>
                                                 </div>
                                                 <div class="col-lg-9 mt-4 mt-lg-0">
                                                   <div class="tab-content">
                                                     <div class="tab-pane active show" id="cab-1">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>DESCRIPTION</h3>
                                                           <p>
                                                             Click on the Link to Submit all your completion card to the Google Form to collect your cert of Jota Joti Penang 2020

                                                            </p>
                                                         </div>
                                                       </div>
                                                     </div>

                                                   </div>
                                                 </div>
                                               </div>

                                             </div>
                                           </section><!-- End Features Section -->

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
