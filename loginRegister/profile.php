<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jota -Joti 2020 | Profile </title>
    <link rel="icon" href="../assets/img/2020.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

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
SESSION_start()
 ?>

 <?php
 // FOR USERS TO VALIDATION ON THE LOGIN
 //AVOID USER COME INTO PAGE WITHOUT LOGIN
   if(empty($_SESSION['user_id'])) {
   header("Location:login.php");
   }
  ?>

<body id="page-top">
    <div id="wrapper">
        <?php
        include ('usersidebar.php');
         ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php
                include ('usernav.php');
                 ?>


            <div class="container-fluid">
                <h3 class="text-dark mb-4 text-center">User&nbsp;Profile</h3>
                <div class="row mb-3">

                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Details</p>
                                    </div>
                                    <div class="card-body">
                                        <form method = "POST">
                                            <div class="form-row">

                                                <div class="col">
                                                    <div class="form-group"><label for="address"><strong>Email Address</strong></label><input class="form-control" type="text" , "38" name="email"></div>

                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" name="first_name"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text"  name="last_name"></div>
                                                </div>

                                            </div>
                                            <div class="form-group"><label for="address"><strong>Password</strong></label><input class= "form-control" type="text" , "38" name="pass_word"></div>
                                            <div class="form-row">
                                              <div class="col">
                                                  <div class="form-group"><label for="city"><strong>Phone Number</strong></label><input class="form-control" type="text" name="Pnumber"></div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group"><label for="country"><strong>Category</strong></label><input class="form-control" type="text" name="cate"></div>
                                              </div>
                                            </div>

                                            <div class="form-row">
                                              <div class="col">
                                                  <div class="form-group"><label for="city"><strong>Country</strong></label><input class="form-control" type="text" name="country"></div>
                                              </div>
                                              <div class="col">
                                                  <div class="form-group"><label for="country"><strong>Scout Troop Names</strong></label><input class="form-control" type="text" name="postal_code"></div>
                                              </div>
                                            </div>

                                            <div class="form-group update"><button class="btn btn-primary btn-sm" type="submit" name="update">Update&nbsp;User&nbsp;Profile</button></div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

<?php

include('../conn.php');

if (isset($_POST['update'])){

$mail = $_POST['email'];

$sql = "Update user set user_Fname ='$_POST[first_name]',user_Lname ='$_POST[last_name]',user_address ='$_POST[address]',user_Pnumber ='$_POST[Pnumber]',user_postalcode ='$_POST[postal_code]' WHERE user_email = '$_POST[email]'";
$result = mysqli_query($conn , $sql);


  if($result)
  {
    echo '<script>alert("Data Updated")</script>';
  }else{
    // echo '<script type="text/javascript">alert("Data Not Updated")</script>';
    echo $sql;
  }
}

?>
        <!-- footer -->
<!--
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script> -->
</body>

</html>
