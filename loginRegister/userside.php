<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jota Joti 2020 | User Panel</title>
    <link rel="icon" href="../assets/img/2020.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="vendors/linericon/style.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
  	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
  	<link rel="stylesheet" href="vendors/animate-css/animate.css">
  	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/down.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177875132-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177875132-1');
</script>

</head>

<?php
SESSION_start();
// FOR USERS TO VALIDATION ON THE LOGIN
//AVOID USER COME INTO PAGE WITHOUT LOGIN
  if(empty($_SESSION['u_id'])) {
  header("Location:login.php");
  }
 ?>

<body id="page-top">
    <div id="wrapper">
      <?php
      include ('usersidebar.php')
       ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
              <?php
              include ('usernav.php');
              ?>

              <script>
                AOS.init();
              </script>

              <section class="page-section" id="services">
                <div class="container">
                  <h2 class="text-center mt-0" data-aos="fade-down">Information for participating in this event</h2>
                  <hr class="divider my-4" />

                    <div class="col-lg-11 mt-4 mt-lg-0">
                      <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                          <div class="row">

                              <h3 data-aos="fade-right">Basic Requirement</h3>
                          </div>
                          <div class="row futura">
                              <p> 1) You need to have an email account to participate. <br>
                                  2) You are required to register at the web page before entering any challenges. <br>
                                  3) Computer, Laptop, Mobile Phone, or any digital devices that are able to access the internet are needed to complete the challenges. <br>
                                  4) 2 challenges will be updated every week for 4 weeks. There are 8 challenges in total. <br>
                                  5) Once the challenge is published, you have at most 2 weeks to complete and submit via google form that are attached in the respective challenge. <br>
                                  6) After 2 weeks, the challenge will be closed. (eg. the 2 challenges published on the first week will be closed on the 3<sup>rd</sup> week) <br>
                                  7) Once you pass the challenge, a completion card for the particular challenge will be sent to you via email. <br>
                                  8) All 8 completion cards are required to receive a certificate. <br>
                                  9) Once 8 completion cards are collected, submit them via google form provided to earn your certificate. <br>
                                  10) The TOP 10 fastest to submit all 8 completion cards will get to win our JOTA-JOTI badge. (Note: There are 2 TOP 10 winners which are TOP 10 scouts/guides aged below 12 and TOP 10 scouts/guides aged above12) <br>
                                  11) Try your best to complete all and have fun.
                              </p>
                            
                          </div>
                        </div>
                          </div>
                        </div>
                </div>

              </section>


                    </div>
                    </div>

                <script src="js/jquery-3.2.1.min.js"></script>
              	<script src="js/popper.js"></script>
              	<script src="js/bootstrap.min.js"></script>
              	<script src="js/stellar.js"></script>
              	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
              	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
              	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
              	<script src="vendors/isotope/isotope-min.js"></script>
              	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
              	<script src="js/jquery.ajaxchimp.min.js"></script>
              	<script src="js/mail-script.js"></script>
              	<script src="vendors/jquery-ui/jquery-ui.js"></script>
              	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
              	<script src="vendors/counter-up/jquery.counterup.js"></script>
              	<script src="js/theme.js"></script>

            </div>
        </div>
        <!-- <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © QP WDT 2019</span></div>
            </div>
        </footer> -->
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

</html>
