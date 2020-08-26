<?php
SESSION_start()
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - QP WDT</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
      <?php
      include ('adminsidebar.php')
       ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
              <?php
              include ('adminnav.php');
               ?>
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Add Admin</h3>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="p-5">
        <!-- Form to add admin -->
        <form class="user" action=insertadmin.php method="post">
          <!--Half length , Fname and Lname-->
            <div class="form-group row">
                <div class="col-sm-8 mb-3 mb-sm-2"><input class="form-control form-control-user" type="text" placeholder="First Name" name="first_name" required = "required"></div>
                <div class="col-sm-8"><input class="form-control form-control-user" type="text" placeholder="Last Name" name="last_name"></div>
            </div>

            <!--Full length , Email& Address-->
            <div class="form-group"><input class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Email Address" name="email" required = "required"></div>

            <!--Half length , Password & Repeat-->
            <div class="form-group row">
                <div class="col-sm-8 mb-3 mb-sm-2"><input class="form-control form-control-user" type="password" placeholder="Password" name="password" required = "required"></div>
                <div class="col-sm-8"><input class="form-control form-control-user" type="date" placeholder="Date of Birth" name="dob" required = "required"></div>
            </div>

            <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Phone Number" name="phone_number" required = "required"></div>
            <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Address" name="address" required = "required"></div>
            <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Postal Code" name="postal_code" required = "required"></div>


            <!--full Length , Register Button-->
            <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Add Admin</button>

        </form>
      </div>
    </div>



<!-- footer started here -->
<!-- footer -->
<?php
include ('footer.php');
 ?>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

</html>
