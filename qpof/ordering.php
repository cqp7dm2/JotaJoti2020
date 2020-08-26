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
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Ordering</h3>


                <!--================Category Product Area =================-->
                <section class="cat_product_area section_gap">
                  <div class="container-fluid">
                    <div class="row flex-row-reverse">
                      <div class="col-lg-9">
                        <div class="product_top_bar">
                          <div class="left_dorp">
                            <select class="sorting">
                              <option value="1">Default sorting</option>
                              <option value="2">Default sorting 01</option>
                              <option value="4">Default sorting 02</option>
                            </select>
                            <select class="show">
                              <option value="1">Show 12</option>
                              <option value="2">Show 14</option>
                              <option value="4">Show 16</option>
                            </select>
                          </div>
                          <div class="right_page ml-auto">
                            <nav class="cat_page" aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#">
                                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item blank">
                                  <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                        <div class="latest_product_inner row">

                          <!-- Item 1 -->
                          <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                              <div class="f_p_img">
                                <img class="img-fluid" src="src/spag.jpg" alt="">
                                <div class="p_icon">
                                  <a href="#">
                                    <i class="lnr lnr-heart"></i>
                                  </a>
                                  <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                  </a>
                                </div>
                              </div>
                              <a href="#">
                                <h4>Spaghetti</h4>
                              </a>
                              <h5>RM10.00</h5>
                            </div>
                          </div>

                          <!-- Item 2 -->
                          <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                              <div class="f_p_img">
                                <img class="img-fluid" src="src/noodle.jpg" alt="">
                                <div class="p_icon">
                                  <a href="#">
                                    <i class="lnr lnr-heart"></i>
                                  </a>
                                  <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                  </a>
                                </div>
                              </div>
                              <a href="#">
                                <h4>Noodles</h4>
                              </a>
                              <h5>Rm 6.00</h5>
                            </div>
                          </div>

                          <!-- Item 3 -->
                          <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                              <div class="f_p_img">
                                <img class="img-fluid" src="src/ramen.jpg" alt="">
                                <div class="p_icon">
                                  <a href="#">
                                    <i class="lnr lnr-heart"></i>
                                  </a>
                                  <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                  </a>
                                </div>
                              </div>
                              <a href="#">
                                <h4>Ramen</h4>
                              </a>
                              <h5>RM 8.00</h5>
                            </div>
                          </div>

                          <!-- Item 4 -->
                          <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                              <div class="f_p_img">
                                <img class="img-fluid" src="src/rice.jpeg" alt="">
                                <div class="p_icon">
                                  <a href="#">
                                    <i class="lnr lnr-heart"></i>
                                  </a>
                                  <a href="#">

                                    <i class="lnr lnr-cart"></i>
                                  </a>
                                </div>
                              </div>
                              <a href="#">
                                <h4>Rice</h4>
                              </a>
                              <h5>Rm 12.00</h5>
                            </div>
                          </div>

                        </div>
                      </div>



                      <!-- Side Bar -->
                      <div class="col-lg-3">
                        <div class="left_sidebar_area">
                          <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                              <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                              <ul class="list">
                                <li>
                                  <a href="#">Fruits and Vegetables</a>
                                </li>
                                <li>
                                  <a href="#">Meat and Fish</a>
                                  <ul class="list">
                                    <li>
                                      <a href="#">Frozen Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Dried Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Fresh Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat Alternatives</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Cooking</a>
                                  <ul class="list">
                                    <li>
                                      <a href="#">Frozen Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Dried Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Fresh Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat Alternatives</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Beverages</a>
                                  <ul class="list">
                                    <li>
                                      <a href="#">Frozen Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Dried Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Fresh Fish</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat Alternatives</a>
                                    </li>
                                    <li>
                                      <a href="#">Meat</a>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">Home and Cleaning</a>
                                </li>
                              </ul>
                            </div>
                          </aside>


                          </aside>
                        </div>
                      </div>
                    </div>


<!-- Ordering Details -->
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
                      <!-- <?php
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
                      <?php endif; ?> -->
                    </table>
                    </div>
                    </div>
                    </div>
<!--Naviagation-->
                    <div class="row">
                      <nav class="cat_page mx-auto" aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#">
                              <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">01</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">02</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">03</a>
                          </li>
                          <li class="page-item blank">
                            <a class="page-link" href="#">...</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">09</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </section>
                <!--================End Category Product Area =================-->




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
