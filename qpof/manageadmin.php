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
                <h3 class="text-dark mb-1">Manage Admin</h3>
            </div>
        </div>

        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Admin List</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">

                    <!--Display in html table-->

                      <tr >
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>DOB</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      <?php
                            include ("conn.php");
                            $sql = "Select * from admin";
                            $result = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($result)<=0)
                            {
                              die("<script>alert('No data from database !');</script>");
                            }

                            while($rows = mysqli_fetch_array($result))
                            {

                              echo"<tr>";
                              echo"<td>".$rows['admin_Fname']."</td>";
                              echo"<td>".$rows['admin_Lname']."</td>";
                              echo"<td>".$rows['admin_email']."</td>";
                              echo"<td>".$rows['admin_Pnumber']."</td>";
                              echo"<td>".$rows['admin_address']."</td>";
                              echo"<td>".$rows['admin_dob']."</td>";

                              //Create 2 button (edit button and delete button in eac row)
                              echo "<td><a href='adminedit.php?id=".$rows['admin_id']."'><button>Edit</button></a></td>";
                              echo "<td><a href='admindelete.php?id=".$rows['admin_id']."'><button>Delete</button></a></td>";
                              echo "</tr>";
                            }
                       ?>
                    </table>

            </div>

            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <!-- footer -->
        <?php
        include ('footer.php');
         ?>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

</body>

</html>
