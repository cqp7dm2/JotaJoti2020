<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Insert</title>
 </head>

 <body>

     <?php


     if (Isset($_POST['submit'])) {

       include "../conn.php";

       $Fname = mysqli_real_escape_string($conn,$_POST['first_name']);
       $Lname = mysqli_real_escape_string($conn,$_POST['last_name']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $passW = mysqli_real_escape_string($conn,$_POST['password']);
       $dob = mysqli_real_escape_string($conn,$_POST['dob']);
       $phone = mysqli_real_escape_string($conn,$_POST['phone_number']);
       $address = mysqli_real_escape_string($conn,$_POST['address']);
       $postal = mysqli_real_escape_string($conn,$_POST['postal_code']);

      //Error handlers
      //Check for emptyfields
      if (empty($Fname) || empty($Lname) || empty($email) || empty($passW) || empty($dob) || empty($phone) || empty($address) || empty($postal))
      {
        echo ('<script>alert("Empty Slot!")</script>');
        echo "<script>window.location.href='register.php';</script>";
          exit();
      }else{
            //check if the input characters are Filer_validate_email
            if(!preg_match("/^[a-zA-Z]*$/",$Fname) || !preg_match("/^[a-zA-Z]*$/",$Lname)){
              echo ('<script>alert("Invalid Name leh cqp!")</script>');
              echo "<script>window.location.href='register.php';</script>";
            exit();
            }
            else{
          //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo ('<script>alert("Invalid Email")</script>');
              echo "<script>window.location.href='register.php';</script>";
              exit();
            }else{
              $sql = "select * from user where user_email = '$email'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0){
                echo ('<script>alert("Email Taken!")</script>');
                echo "<script>window.location.href='register.php';</script>";
                exit();
              }else{
                  //hasting password
                  $hashedPwd = password_hash($passW, PASSWORD_DEFAULT);
                  //insert the user into the databased
                  $sql = "Insert into user (user_Fname, user_Lname, user_email, user_pass, user_dob, user_pnumber, user_address, user_postalcode)
                  VALUES ('$Fname', '$Lname', '$email', '$hashedPwd', '$dob', '$phone', '$address','$postal');";

                  mysqli_query($conn, $sql);

                  echo ('<script>alert("Register Sucessfully!")</script>');
                  echo "<script>window.location.href='login.php';</script>";
                  exit();
        }
       }
      }
     }
    }
     //Ending
     else
     {
       header("Location: register.php");
       echo ("<script>alert('Insert Error');</script>");
       exit();
     }

     ?>
 </body>
 </html>
