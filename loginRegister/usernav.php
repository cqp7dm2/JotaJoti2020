<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jota -Joti 2020 | UserNav </title>
    <link rel="icon" href="../assets/img/2020.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>


    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

            <h5>Welcome Back</h5> &nbsp;, &nbsp;  <h5>
              <?php
            if (isset($_SESSION['u_id']))
            {
              include ('../conn.php');
              $sql = "select * from user where user_id = '".$_SESSION['u_id']."'";
              $result = mysqli_query($conn , $sql);

              if (mysqli_affected_rows($conn) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                  echo $row["user_Fname"];
              }
            }else{
              echo $sql;
            }
          }
             ?>

             <?php
           if (isset($_SESSION['u_id']))
           {
             include ('../conn.php');
             $sql = "select * from user where user_id = '".$_SESSION['u_id']."'";
             $result = mysqli_query($conn , $sql);

             if (mysqli_affected_rows($conn) > 0){
               while ($row = mysqli_fetch_assoc($result)){
                 echo $row["user_Lname"];
             }
           }else{
             echo $sql;
           }
         }
            ?>
            </h5>

            <ul class="nav navbar-nav flex-nowrap ml-auto">

                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow" role="presentation">
                    <div class="nav-item">

                        <span class="d-none mr-1 text-gray-600 small" name="LoginName">TESTING
                        </span>

        </li>
        </ul>
</div>
</nav>
