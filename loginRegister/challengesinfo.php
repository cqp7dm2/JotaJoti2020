<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

    <title>Challenges Information</title>
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

                     <!-- Portfolio Grid-->
                     <section class="page-section bg-light" id="portfolio">
                         <div class="container">
                             <div class="text-center">
                                 <h2 class="section-heading text-uppercase">Challenges Progression Bar</h2>
                                 <br>
                                 <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                             </div>
                             <div class="row">
                                 <div class="col-lg-4 col-sm-6 mb-4">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/01-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Threads</div>
                                             <div class="portfolio-caption-subheading text-muted">Illustration</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 mb-4">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/02-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Explore</div>
                                             <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 mb-4">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/03-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Finish</div>
                                             <div class="portfolio-caption-subheading text-muted">Identity</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/04-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Lines</div>
                                             <div class="portfolio-caption-subheading text-muted">Branding</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                                     <!-- <div class="portfolio-item">
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
                                     </div> -->
                                 </div>
                                 <div class="col-lg-4 col-sm-6">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/06-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Window</div>
                                             <div class="portfolio-caption-subheading text-muted">Photography</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/06-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Window</div>
                                             <div class="portfolio-caption-subheading text-muted">Photography</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/06-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Window</div>
                                             <div class="portfolio-caption-subheading text-muted">Photography</div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6">
                                     <div class="portfolio-item">
                                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                             <div class="portfolio-hover">
                                                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                             </div>
                                             <img class="img-fluid" src="../assets/img/portfolio/06-thumbnail.jpg" alt="" />
                                         </a>
                                         <div class="portfolio-caption">
                                             <div class="portfolio-caption-heading">Window</div>
                                             <div class="portfolio-caption-subheading text-muted">Photography</div>
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
