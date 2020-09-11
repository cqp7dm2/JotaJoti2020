<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Angel Food _Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<!--The log in form start here-->
<body class="bg-secondary">
    <div class="container p-1">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-10">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/jotajoti/mainlogo.png&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" action=insert.php method="post">
                              <!--Half length , Fname and Lname-->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="First Name" name="first_name" required = "required"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="Last Name" name="last_name"></div>
                                </div>

                                <!--Full length , Email& Address-->
                                <div class="form-group"><input class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Email Address" name="email" required = "required"></div>

                                <!--Half length , Password & Repeat-->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" placeholder="Password" name="password" required = "required"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="date" placeholder="Date of Birth" name="dob" required = "required"></div>
                                </div>

                                <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Phone Number" name="phone_number" required = "required"></div>
                                <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Address" name="address" required = "required"></div>
                                <div class="form-group"><input class="form-control form-control-user" type="text" placeholder="Postal Code" name="postal_code" required = "required"></div>


                                <!--full Length , Register Button-->
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Register Account</button>

                            </form>
                            <!-- <div class="text-center"><a class="small" href="forgot-password.php">Forgot Password?</a></div> -->
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                            <br>
                            <a class="btn btn-secondary btn-block text-white btn-user" href="../home.php" role="button">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
