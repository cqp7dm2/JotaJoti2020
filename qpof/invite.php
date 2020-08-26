<?php
SESSION_start()
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Angel Food - Invite Friends</title>
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
</head>

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
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Invite Friends</h3>

                <!--================ Subscription Area ================-->
              	<section class="subscription-area section_gap">
              		<div class="container">
              			<div class="row justify-content-center">
              				<div class="col-lg-8">
              					<div class="section-title text-center">
              						<h2>Invite Ur Friends To Join Angel Food</h2>
              						<span>Redeem RM10 after you friends had successfully join Angel Food</span>
              					</div>
              				</div>
              			</div>
              			<div class="row justify-content-center">
              				<div class="col-lg-6">
              					<div id="mc_embed_signup">
              						<form target="_blank"
              						 method="get" class="subscription relative">
              							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
              							 required="">
              							<!-- <div style="position: absolute; left: -5000px;">
              									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
              								</div> -->
              							<button  class="newsl-btn">Invite</button>
              							<div class="info"></div>
              						</form>
              					</div>
              				</div>
              			</div>
              		</div>
              	</section>
              	<!--================ End Subscription Area ================-->

            </div>
        </div>
        <!-- footer -->
        <?php
        include ('footer.php');
         ?>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

</html>
