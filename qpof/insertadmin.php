
     <?php

     if (Isset($_POST['submit'])) {

       // include ("conn.php");

       include_once 'conn.php';

       $Fname = mysqli_real_escape_string($conn,$_POST['first_name']);
       $Lname = mysqli_real_escape_string($conn,$_POST['last_name']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $passW = mysqli_real_escape_string($conn,$_POST['password']);
       $dob = mysqli_real_escape_string($conn,$_POST['dob']);
       $phone = mysqli_real_escape_string($conn,$_POST['phone_number']);
       $address = mysqli_real_escape_string($conn,$_POST['address']);


      //Error handlers
      //Check for emptyfields
      if (empty($Fname) || empty($Lname) || empty($email) || empty($passW) || empty($dob) || empty($phone) || empty($address))
      {
        echo ('<script>alert("Empty Slot!")</script>');
        echo "<script>window.location.href='addadmin.php';</script>";
          exit();
      }else{
            //check if the input characters are Filer_validate_email
            if(!preg_match("/^[a-zA-Z]*$/",$Fname) || !preg_match("/^[a-zA-Z]*$/",$Lname)){
              echo ('<script>alert("Invalid Name!")</script>');
              echo "<script>window.location.href='addadmin.php';</script>";
            exit();
            }
            else{
          //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo ('<script>alert("Invalid Email!")</script>');
              echo "<script>window.location.href='addadmin.php';</script>";
              exit();
            }else{
              $sql = "select * from admin where admin_email = '$email'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0){
                echo ('<script>alert("Email Taken!")</script>');
                echo "<script>window.location.href='addadmin.php';</script>";
                exit();
              }else{
                  //hasting password
                  $hashedPwd = password_hash($passW, PASSWORD_DEFAULT);
                  //insert the user into the databased
                  $sql = "Insert into admin (admin_Fname, admin_Lname, admin_email, admin_pass, admin_dob, admin_Pnumber, admin_address)
                  VALUES ('$Fname', '$Lname', '$email', '$hashedPwd', '$dob', '$phone', '$address');";

                  mysqli_query($conn, $sql);

                  echo ('<script>alert("Admin Added Succesfully!")</script>');
                  echo "<script>window.location.href='addadmin.php';</script>";

                  exit();
        }
       }
      }
     }
    }
     //Ending
     else
     {
       header("Location: addmin.php");
       echo ("<script>alert('Fail');</script>");

       exit();
     }
?>
