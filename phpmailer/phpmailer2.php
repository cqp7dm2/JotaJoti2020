<?php
include ("connection.php");
include ("login-session.php");
include("unit-session.php");
include("retrieve.php");
include("access-owner.php");

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];.
$Email = $_POST['Email'];
$Role = $_POST['Role'];
$Contact = $_POST['Contact'];
$Registered_Date = $_POST['Registered_Date'];
$Pass = $_POST['Password'];

$Pass = mysqli_real_escape_string($con, $Pass);
$Pass = stripslashes($Pass);
$Pass = htmlentities($Pass);
$Pass = md5($Pass);

$message = "Dear $First_name $Last_name, Your acccount has registered succesfully. 'Admin' will be your password for this new account, please login to change it.";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file.
require 'C:\xampp\composer\vendor\autoload.php'; */

/* If you installed PHPMailer without Composer do this instead: */

require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);
/*$mailid = $email;
$subject = "Test";
$text_message = "Hello";
$message = "Thank You for Contact with us.";
*/
?>

<?php
try {

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'assignmenttesting123@gmail.com';   // SMTP username
$mail->Password = 'Abc12345@@@';           // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

   $mail->setFrom('assignmenttesting123@gmail.com', 'Uptown Resident Tenant Management');

   $mail->addAddress($Email, 'Receipient');

   $mail->Subject = 'Registered account';

   $mail->Body = $message;

   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
?>

<?php
include("connection.php");

$sql="INSERT INTO user(First_name, Last_name, Email, Contact, Password, Role, Registered_Date, Account_status)

Values

('$First_name','$Last_name','$Email','$Contact','$Pass','$Role',now(), 'Active')";

mysqli_query($con,$sql);

//Retrieve UserID
$retrieveSql = "select * from User where Registered_Date = now(); ";

if(!$runRetrieve = mysqli_query($con, $retrieveSql)){
	die("Error : ".mysqli_error($con));
} else {
	$userRow = mysqli_fetch_assoc($runRetrieve);
	$sql="Insert into tenants(User_ID, Unit_ID)

Values

('$userRow[ID]','$_SESSION[Unit]')";


if(!mysqli_query($con,$sql))
{
	die('Error:'.mysqli_error($con));
}

echo'<script>alert("Registered sucessfully!");
window.location.href = "dashboard.php";
</script>';

}

mysqli_close($con);
?>
