<!-- <?php
SESSION_start();

if(filter_input(INPUT_POST, 'add to cart')){
  if(isset($_SESSION['shopping_cart'])){

    //keep track of how many shopping cart has been submitted
    $count = count($_SESSION['shopping_cart']);

    //create sequantial array for matching array keys to product id's
    $product_ids = array_column($_SESSION['shopping_cart'], 'id');

    if (!in_array(filter_input(INPUT_GET, 'id'))){
      $_SESSION['shopping_cart'][$count] = array
      (
        'id' => filter_input(INPUT_GET , 'id'),
        'name' => filter_input(INPUT_POST , 'name'),
        'price' => filter_input(INPUT_POST , 'price'),
        'quantity' => filter_input(INPUT_POST , 'quantity'),
      );
    }
    else{
      for($i = 0; $i , count($product_ids); $i++){
        if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
          $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
        }
      }
    }

  }
  else{ //if shopping cart doesn't exist , create first product with array key 0
    //create array using submitted from data , start from key 0 and fill in with values
    $_SESSION['shopping_cart'][0] = array
    (
      'id' => filter_input(INPUT_GET , 'id'),
      'name' => filter_input(INPUT_POST , 'name'),
      'price' => filter_input(INPUT_POST , 'price'),
      'quantity' => filter_input(INPUT_POST , 'quantity'),
    );

  }
}
pre_r($_SESSION);

function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
 ?> -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Angel Food - Ordering</title>
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

              <h2 >Welcome Back !</h2>

            
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
