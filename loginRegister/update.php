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
