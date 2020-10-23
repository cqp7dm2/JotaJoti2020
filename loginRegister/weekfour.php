<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jota-Joti 2020 | Week Four</title>
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
                                              <h3 data-aos="fade-right" style="color: #fab800;">Challenge 7 | T-Rex</h3>
                                              <p class="futura" data-aos="flip-down"> Lets Us Challenge on T-Rex

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
                                                    <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../Trex/index.php" target="_blank">Join T-Rex Now</a>
                                                    <a class="mt-4 btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/e/1FAIpQLSdM1TkvAPdlYxWd5KR0NoIzjN0KpBF3GtgXkz4yGdRswYuHRA/viewform" target="_blank">Submit Result Now</a>
                                                </div>
                                                <div class="col-lg-9 mt-4 mt-lg-0">
                                                  <div class="tab-content">

                                                    <div class="tab-pane active show" id="tab-1">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>DESCRIPTION</h3>
                                                          <p>
                                                             Mr. T-rex is an extreme adventure lover and he always likes to challenge his own limit. Currently, he is trying to cross a deadly desert with countless obstacles blocking his way and aggressive pterosaurs attacking him.
                                                           </p>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <div class="tab-pane" id="tab-2">
                                                      <div class="row">
                                                        <div class="col-lg-10 details order-2 order-lg-1">
                                                          <h3>RULES SND REGULATIONS</h3>
                                                          <p>Rules and Regulation (T-Rex)
                                                            1. Participants have to gain at least 3000points. <br>
                                                            2. After the game, take a screenshot of your results. <br>
                                                            3. Submit the screenshotted result via google form provided.<br>
                                                            4. Practice makes perfect. Participants can play as many times as desire either for practice or just for fun.<br>
</p>
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
                                               <h3 data-aos="fade-right" style="color: #fab800;">Challenge 8 | Tetris Battle</h3>
                                               <p class="futura" data-aos="flip-down">Lets Us Challenge on Tetris Battle</p>

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
                                                   <!-- <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#" >Coming Soon ... </a> -->
                                                   <a class="mt-4 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://jstris.jezevec10.com/?play=1&mode=1&fbclid=IwAR3Jvu0x3o8AyxGcjfKZeJmA1uz2TDQJsjhf6qF0RdwJN6FU0nz5tvq55RE" target="_blank">Start Tetris Battle Now</a>
                                                     <a class="mt-4 btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/e/1FAIpQLSedcwuzuqVpp5pN5WSCPmrvRKPtQLHJdqvRU0jpuADZNkBCKQ/viewform" target="_blank">Submit Result Now</a>
                                                 </div>
                                                 <div class="col-lg-9 mt-4 mt-lg-0">
                                                   <div class="tab-content">
                                                     <div class="tab-pane active show" id="cab-1">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>DESCRIPTION</h3>
                                                           <p>
                                                             This is another game from the 80’s. Even though many new advanced games have been introduced to us over the years, Tetris still remains as one of the most memorable games of all time, especially for those who were still kids back in the 80’s and 90’s.
                                                             In this challenge, let us all experience the excitements this game can bring to us.

                                                            </p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="tab-pane" id="cab-2">
                                                       <div class="row">
                                                         <div class="col-lg-10 details order-2 order-lg-1">
                                                           <h3>RULES AND REGULATIONS</h3>

                                                           <p>
                                                             Rules and Regulation <br>
                                                               1) Participants have to clear 40 lines in 2 minutes. <br>
                                                               2) After completing all 40 lines, take a screenshot of your results with the time shown clearly. <br>
                                                               3) Submit the screenshotted result via google form provided. <br>
                                                               4) Practice makes perfect. Participants can play as many times as desire either for practice or just for fun.  <br>
                                                               5) Participants have to screenshot the result and submit in google form. <br>
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
