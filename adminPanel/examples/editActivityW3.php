<?php
 include "connection.php";

 $id = $_GET["id"];

 $firstname = "";
 $lastname = "";
 $W3G1 = "";
 $W3G2 = "";

 $res=mysqli_query($link, "select * from user where user_id=$id");
 while($row=mysqli_fetch_array($res)){
     $firstname = $row["user_Fname"];
     $lastname = $row["user_Lname"];
     $W3G1 = $row["user_W3G1"];
     $W3G2 = $row["user_W3G2"];
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
 <link rel="icon" type="image/png" href="../assets/img/favicon.png">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <title>
   Material Dashboard by Creative Tim
 </title>
 <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
 <!-- CSS Files -->
 <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
 <div class="wrapper ">
     <?php include 'sideNav.php';?>
   <div class="main-panel">
     <!-- Navbar -->
     <?php include 'topNav.php';?>
     <!-- End Navbar -->
     <div class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-10">
             <div class="card">
               <div class="card-header card-header-primary">
                 <h4 class="card-title "><?php echo $firstname;?> <?php echo $lastname; ?>'s Week 3 Progression Table</h4>
                 <p class="card-category"> Here is the member's information</p>
               </div>
               <div class="card-body">
                 <div class="table-responsive">
                   <form action="" name="form1" method="post">

                     <div class="form-group">
                       <label for="pwd">First Name</label>
                       <input type="text" class="form-control" placeholder="Enter firstname" name="user_Fname"  value="<?php echo $firstname; ?>">
                     </div>

                     <div class="form-group">
                       <label for="pwd">Last Name</label>
                       <input type="text" class="form-control" placeholder="Enter lastname" name="user_Lname"  value="<?php echo $lastname; ?>">
                     </div>

                     <div class="form-group">
                       <label for="pwd">W3G1</label>
                       <input type="text" class="form-control" placeholder="Enter W3G1 resuslt" name="user_W3G1"  value="<?php echo $W3G1; ?>">
                     </div>

                     <div class="form-group">
                       <label for="pwd">W3G2</label>
                       <input type="text" class="form-control" placeholder="Enter W3G2 resuslt" name="user_W3G2"  value="<?php echo $W3G2; ?>">
                     </div>

                     <button type="submit" name="update" class="btn btn-success">Update</button>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!--   Core JS Files   -->
 <script src="../assets/js/core/jquery.min.js"></script>
 <script src="../assets/js/core/popper.min.js"></script>
 <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
 <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <!-- Plugin for the momentJs  -->
 <script src="../assets/js/plugins/moment.min.js"></script>
 <!--  Plugin for Sweet Alert -->
 <script src="../assets/js/plugins/sweetalert2.js"></script>
 <!-- Forms Validations Plugin -->
 <script src="../assets/js/plugins/jquery.validate.min.js"></script>
 <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
 <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
 <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
 <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
 <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
 <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
 <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
 <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
 <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
 <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
 <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
 <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
 <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
 <script src="../assets/js/plugins/fullcalendar.min.js"></script>
 <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
 <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="../assets/js/plugins/nouislider.min.js"></script>
 <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
 <!-- Library for adding dinamically elements -->
 <script src="../assets/js/plugins/arrive.min.js"></script>
 <!--  Google Maps Plugin    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!-- Chartist JS -->
 <script src="../assets/js/plugins/chartist.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
 <!-- Material Dashboard DEMO methods, don't include it in your project! -->
 <script src="../assets/demo/demo.js"></script>

 <script>
   $(document).ready(function() {
     $().ready(function() {
       $sidebar = $('.sidebar');

       $sidebar_img_container = $sidebar.find('.sidebar-background');

       $full_page = $('.full-page');

       $sidebar_responsive = $('body > .navbar-collapse');

       window_width = $(window).width();

       fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

       if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
         if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
           $('.fixed-plugin .dropdown').addClass('open');
         }

       }

       $('.fixed-plugin a').click(function(event) {
         // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
         if ($(this).hasClass('switch-trigger')) {
           if (event.stopPropagation) {
             event.stopPropagation();
           } else if (window.event) {
             window.event.cancelBubble = true;
           }
         }
       });

       $('.fixed-plugin .active-color span').click(function() {
         $full_page_background = $('.full-page-background');

         $(this).siblings().removeClass('active');
         $(this).addClass('active');

         var new_color = $(this).data('color');

         if ($sidebar.length != 0) {
           $sidebar.attr('data-color', new_color);
         }

         if ($full_page.length != 0) {
           $full_page.attr('filter-color', new_color);
         }

         if ($sidebar_responsive.length != 0) {
           $sidebar_responsive.attr('data-color', new_color);
         }
       });

       $('.fixed-plugin .background-color .badge').click(function() {
         $(this).siblings().removeClass('active');
         $(this).addClass('active');

         var new_color = $(this).data('background-color');

         if ($sidebar.length != 0) {
           $sidebar.attr('data-background-color', new_color);
         }
       });

       $('.fixed-plugin .img-holder').click(function() {
         $full_page_background = $('.full-page-background');

         $(this).parent('li').siblings().removeClass('active');
         $(this).parent('li').addClass('active');


         var new_image = $(this).find("img").attr('src');

         if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
           $sidebar_img_container.fadeOut('fast', function() {
             $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
             $sidebar_img_container.fadeIn('fast');
           });
         }

         if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
           var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

           $full_page_background.fadeOut('fast', function() {
             $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
             $full_page_background.fadeIn('fast');
           });
         }

         if ($('.switch-sidebar-image input:checked').length == 0) {
           var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
           var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

           $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
           $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
         }

         if ($sidebar_responsive.length != 0) {
           $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
         }
       });

       $('.switch-sidebar-image input').change(function() {
         $full_page_background = $('.full-page-background');

         $input = $(this);

         if ($input.is(':checked')) {
           if ($sidebar_img_container.length != 0) {
             $sidebar_img_container.fadeIn('fast');
             $sidebar.attr('data-image', '#');
           }

           if ($full_page_background.length != 0) {
             $full_page_background.fadeIn('fast');
             $full_page.attr('data-image', '#');
           }

           background_image = true;
         } else {
           if ($sidebar_img_container.length != 0) {
             $sidebar.removeAttr('data-image');
             $sidebar_img_container.fadeOut('fast');
           }

           if ($full_page_background.length != 0) {
             $full_page.removeAttr('data-image', '#');
             $full_page_background.fadeOut('fast');
           }

           background_image = false;
         }
       });

       $('.switch-sidebar-mini input').change(function() {
         $body = $('body');

         $input = $(this);

         if (md.misc.sidebar_mini_active == true) {
           $('body').removeClass('sidebar-mini');
           md.misc.sidebar_mini_active = false;

           $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

         } else {

           $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

           setTimeout(function() {
             $('body').addClass('sidebar-mini');

             md.misc.sidebar_mini_active = true;
           }, 300);
         }

         // we simulate the window Resize so the charts will get updated in realtime.
         var simulateWindowResize = setInterval(function() {
           window.dispatchEvent(new Event('resize'));
         }, 180);

         // we stop the simulation of Window Resize after the animations are completed
         setTimeout(function() {
           clearInterval(simulateWindowResize);
         }, 1000);

       });
     });
   });
 </script>
</body>

   <?php
   if(isset($_POST["update"]))
   {
     mysqli_query($link,
     "update user set user_Fname='$_POST[user_Fname]', user_Lname='$_POST[user_Lname]',
     user_W3G1='$_POST[user_W3G1]', user_W3G2='$_POST[user_W3G2]' where user_id=$id");
     ?>
     <script type="text/javascript">
     window.location.href = "tableActivityW3.php";
     </script>
     <?php
   }
    ?>
</html>
