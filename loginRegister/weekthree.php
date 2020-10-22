<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Week Three</title>
    <link rel="icon" href="../assets/img/2020.png">
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177875132-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177875132-1');
</script>

<?php
SESSION_start();
// FOR USERS TO VALIDATION ON THE LOGIN
//AVOID USER COME INTO PAGE WITHOUT LOGIN
  if(empty($_SESSION['u_id'])) {
  header("Location:login.php");
  }
 ?>

  </head>
  <body id= "page-top">

    <script>
      AOS.init();
    </script>

        <div id="wrapper">
            <?php
            include ('usersidebar.php');
             ?>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <?php
                    include ('usernav.php');
                     ?>


                     <!-- 1st Competition -->
                                          <main id="main">
                                          <section id="features" class="features">
                                            <div class="container">
                                              <h3 data-aos="fade-right" style="color: #fab800;">Challenge 5 | Virtual Expedition</h3>
                                              <p class="futura" data-aos="flip-down"> Let's explore like we did it before

                                              <div class="row">
                                                <div class="col-lg-3">
                                                  <ul class="nav nav-tabs flex-column">
                                                    <li class="nav-item">
                                                      <a class="nav-link active show" data-toggle="tab" href="#tab-1">DESCRIPTION</a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link " data-toggle="tab" href="#tab-2">RULES AND REGULATIONS</a>
                                                    </li>
                                                  </ul>
                                                    <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href= "https://docs.google.com/forms/d/e/1FAIpQLSdwkmpH6Xkhz3aiFa_FBqcwc3cAVUpQSLNnJ3jW4BNI-nmhQg/viewform" target="_blank">Join Virtual Expedition Now</a>
                                                </div>
                                                <div class="col-lg-9 mt-4 mt-lg-0">
                                                  <div class="tab-content">

                                                    <div class="tab-pane active show" id="tab-1">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>DESCRIPTION</h3>
                                                          <p>
                                                            There is nothing that can stop us from exploring our beautiful world! By using Google Earth, we can ‘travel’ to anywhere,at any time we desire in the entire world. In this challenge, we are going on an expedition virtually around the globe, searching for the final destination and observing the surroundings to complete the tasks. More importantly, enjoy and have fun. <br>
                                                            What are you waiting for, let’s get started!
                                                           </p>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <div class="tab-pane" id="tab-2">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>RULES SND REGULATIONS</h3>
                                                          <p>1) Participants required Google Earth to complete the challenge. <br>
                                                          2) The challenge is to answer the questions by searching the answers from browsing Google Earth. <br> <br></p>
                                                        </div>
                                                      </div>
                                                    </div>

                                                  </div>
                                                </div>
                                              </div>

                                            </div>
                                          </section><!-- End Features Section -->
                                          <hr>


                     <!-- 2nd Competition  -->
                                           <section id="features" class="features">
                                             <div class="container">
                                               <h3 data-aos="fade-right" style="color: #fab800;">Challenge 6 | Pac-Man</h3>
                                               <p class="futura" data-aos="flip-down">More fun with everyone at home </p>

                                               <div class="row">
                                                 <div class="col-lg-3">
                                                   <ul class="nav nav-tabs flex-column">
                                                     <li class="nav-item">
                                                       <a class="nav-link active show" data-toggle="tab" href="#cab-1">DESCRIPTION</a>
                                                     </li>
                                                     <li class="nav-item">
                                                       <a class="nav-link" data-toggle="tab" href="#cab-2">RULES AND RUGULATIONS</a>
                                                     </li>
                                                   </ul>
                                                     <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../PacMan/pacman-master/index.php" target="_blank">Start Game Now</a>
                                                     <a class="mt-4 btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1Y2Wheq1Zeoif8C0QltREEPvDQfvXumIZIGekrAF0EN4/edit" target="_blank">Submit Result Now</a>
                                                 </div>
                                                 <div class="col-lg-9 mt-4 mt-lg-0">
                                                   <div class="tab-content">
                                                     <div class="tab-pane active show" id="cab-1">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>DESCRIPTION</h3>
                                                           <p>
                                                             Pac-Man is an old archive game from the 80’s. Despite being ‘old’, it has not been any less fun and attractive for the game lovers. Over the years, modifications and improvement of the game can be clearly seen and the hard work definitely paid off as it is still considered as a well-known game until this day.
                                                             <br>
                                                            In this challenge, let us take a ‘time travelling trip’ back to the 80’s and enjoy the fun brought by the marvellous game - Pac-Man.
                                                            </p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="tab-pane" id="cab-2">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>RULES AND REGULATIONS</h3>

                                                           <p>
                                                             1) Specific points are required to reach or exceed to be considered as completing the challenge. <br>
                                                             2) Leader board is shown for competitive spirits. <br>
                                                             3) Participants are allowed to play as many times as they desire. <br>
                                                             4) Participants have to screenshot the result and submit in google form. <br>
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
