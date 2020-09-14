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
                              <p> 1)	Participants need to have an e-mail account to participants. <br>
                                  2)	All the games and challenges are published in our Jota-Joti website. <br>
                                  3)	Computer, Laptop, Mobile Phone or any digital devices that are able to access the internet are required. <br>
                                  4)	Online submission & posting statue in Facebook is required.  <br> <br> <br>
                              </p>
                              <h3 data-aos="fade-right">Method of Operations</h3>
                              <p> 1)	2 tasks OR games per week, total of 4 weeks. (8 tasks in total) <br>
                                  2)	Tasks are to upload at the first day of the week.  <br>
                                  3)	Completion card is to send to participants once they submit the tasks. <br>
                                  4)	1<sup>st</sup> week starts on the registration date. (15<sup>th</sup> Sept) <br>
                                  5)	Requirement of tasks included social media uploading and answering through online. <br>
                                  6)	The tasks must be completed within two weeks once they are uploaded. (eg. The 1<sup>st</sup> week’s tasks are removed at the 3<sup>rd</sup> week)
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
