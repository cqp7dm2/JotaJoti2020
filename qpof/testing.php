<?php
SESSION_start();
$product_ids = array();


//check if add to cart button has been submitted
if(filter_input(INPUT_POST, 'add to cart')){
  if(isset($_SESSION['u_id'])){

    //keep track of how many shopping cart has been submitted
    $count = count($_SESSION['u_id']);

    //create sequantial array for matching array keys to product id's
    $product_ids = array_column($_SESSION['u_id'], 'id');

    if (!in_array(filter_input(INPUT_GET, 'id'))){
      $_SESSION['u_id'][$count] = array
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
          $_SESSION['u_id'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
        }
      }
    }

  }
  else{ //if shopping cart doesn't exist , create first product with array key 0
    //create array using submitted from data , start from key 0 and fill in with values
    $_SESSION['u_id'][0] = array
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
 ?>


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
    <link rel="stylesheet" href="testing.css">

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
                <h3 class="text-dark mb-1">Ordering</h3>

                <div class="container">

                <?php

                include 'conn.php';

                $sql = 'select * from cart order by id asc';
                $result = mysqli_query($conn,$sql);

                if($result){
                  if(mysqli_num_rows($result)>0){
                    while($product = mysqli_fetch_assoc($result)){
                      print_r($product);
                      ?>
                      <div class="col-sm-4 col-md-3">
                        <form action="index.php?action=add&id="<?php echo $product['id'] ?> method="post">
                          <div class="product">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive" />
                            <h4 class="text-info"><?php echo $product['name'] ?></h4>
                            <h4>$ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                            <input type="submit" name="add_to_cart" class="btn-info" style="margin-top:5px;" value="Add to Cart" />



                          </div>
                        </form>

                      </div>

                      <?php
                    }
                  }
                }

                 ?>

                 <div style="clear:both"></div>
                 <br />
                 <div class="table-responsive">
                   <table class = "table">
                       <tr><th colspan-"5"><h3>Order Details<h3></th></tr>

                     <tr>
                     <th width=40%>Product Name</th>
                     <th width=10%>Quantity</th>
                     <th width=20%>Price</th>
                     <th width=15%>Total</th>
                     <th width=5%>Action</th>
                   </tr>
                   <?php
                   if(!empty($_SESSION['shopping_cart'])):

                     $total=0;

                     foreach($_SESSION['shopping_cart'] as $key => $product):
                    ?>

                    <tr>
                      <td><?php echo $product['name']; ?></td>
                      <td><?php echo $product['quantity']; ?></td>
                      <td><?php echo $product['price']; ?></td>
                      <td><?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
                      <td>
                        <a href="testing.php?action=delete"><?php echo $product ?></a>
                          <div class="btn-danger"Remove></div>

                          </div>
                        </a>
                      </td>
                    </tr>


                    <?php

                      $total = $total + ($product['quantity'] * $product['price']);
                    endforeach;


                     ?>
                     <tr>
                       <td colspan="3" align = "right" >Total</td>
                       <td align = "right">$ <?php echo number_format($total , 2); ?></td>

                     </tr>

                     <tr>
                       <td colspan ="5">

                        <?php
                          if (isset($_SESSION['shopping_cart'])):
                            if(count($_SESSION['shopping_cart']) > 0):

                          ?>
                          <a href="#" class ="button">CheckOut</a>
                          <?php
                        endif; endif;
                           ?>
                       </td>
                     </tr>
                   <?php endif; ?>
                 </table>
               </div>
             </div>
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
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © QP WDT 2019</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

</html>
