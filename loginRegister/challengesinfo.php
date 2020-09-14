<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jota-Joti 2020 | Challenges</title>
    <link rel="icon" href="../assets/img/2020.png">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

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

    <title>Jota-Joti 2020|Challenges Information</title>
    <link rel="icon" href="../assets/img/2020.png">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

                     <!-- Portfolio Grid-->
                     <section class="page-section bg-light" id="portfolio">
                         <div class="container">
                             <div class="text-center">
                                 <h2 class="section-heading text-uppercase" data-aos="fade-down">Challenges Progression Bar</h2>
                                 <br>
                                 <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                             </div>
                             <div class="row">
                                 <div class="col-lg-3 col-sm-5 mb-3">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 1</div>
                                             <div class="portfolio-caption-subheading text-muted">Poster Challenge</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5 mb-3">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 1</div>
                                             <div class="portfolio-caption-subheading text-muted">Jota Joti Quiz</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5 mb-3">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 2</div>
                                             <div class="portfolio-caption-subheading text-muted">Pac -Man</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5 mb-3 mb-lg-0">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 2</div>
                                             <div class="portfolio-caption-subheading text-muted">Morse Code & Phonetic</div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- <div class="col-lg-3 col-sm-5 mb-3 mb-lg-0">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/05-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Southwest</div>
                                             <div class="portfolio-caption-subheading text-muted">Website Design</div>
                                         </div>
                                     </div>
                                 </div> -->
                                 <div class="col-lg-3 col-sm-5">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 3</div>
                                             <div class="portfolio-caption-subheading text-muted">Dinosaur Jump</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 3</div>
                                             <div class="portfolio-caption-subheading text-muted">Exchange JID</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 4</div>
                                             <div class="portfolio-caption-subheading text-muted">Find the location</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-5">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-crown fa-6x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/2020.png" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Week 4</div>
                                             <div class="portfolio-caption-subheading text-muted">Online Chess</div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>

                     <!-- Bootstrap core JS-->
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                     <!-- Third party plugin JS-->
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                     <!-- Contact form JS-->
                     <script src="../assets/mail/jqBootstrapValidation.js"></script>
                     <script src="../assets/mail/contact_me.js"></script>
                     <!-- Core theme JS-->
                     <script src="../js/scripts.js"></script>

</div>
</div>
</div>




  </body>
</html>
