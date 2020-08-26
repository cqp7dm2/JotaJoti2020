<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editing Form</title>
  </head>

  <body>


<?php
//to get all the relevance into from the databased for that specific item
include "conn.php";

$id = $_GET['id'];
$sql = "Select * from admin where admin_id = $id";
$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
{
    $Fname = $rows['admin_Fname'];
    $Lname = $rows['admin_Lname'];
    $email = $rows['admin_email'];
    $phone = $rows['admin_Pnumber'];
    $address = $rows['admin_address'];
    $dob = $rows['admin_dob'];


}
else
{
  echo "<script>alert('No data from db! Technical errors!');</script>";
  die ("<script>window.location.href='viewdata.php';</script>");
}
?>

<center>

  <h1>Edit Page: </h1>
    <form method="post" action="update.php">

<table>

  <tr><th width="200px">ID:</th>
    <td width="300px">
    <input type="text" name="uid" value="<?php echo $id;?>" readonly/>
  </td></tr>

  <tr><th width="200px">Name:</th>
    <td width="300px">
    <input type="text" name="name" value="<?php echo $name;?>"
    required="required"/>
  </td></tr>

  <tr><th width="200px">Email:</th>
    <td width="300px">
    <input type="text" name="email_address" value="<?php echo $email;?>"
    required="required"/>
  </td></tr>

  <tr><th width="200px">Address:</th>
    <td width="300px">
    <textarea name="home_address" required="required">

<?php echo
    $address;?></textarea>
  </td></tr>

  <tr><th width="200px">Phone:</th>
    <td width="300px">
    <input type="text" name="phone_num" value="<?php echo $phone;?>"
    required="required"/>
  </td></tr>

  <tr><th>Gender:</th><td>
    <input type="radio" name="gender" value="Male"
    <?php if($gender== "Male")echo "checked='checked'";?>/>Male
    <input type="radio" name="gender" value="Female"
    <?php if($gender== "Female")echo "checked='checked'";?>/>Female
  </td></tr>

  <tr><th>Relationship:</th><td>
    <select name="relationship" required="required">

      <option value="">Please select</option>
      <option value="Family" <?php if ($relationship == "Family")
      echo"selected='selected'";?>>Family</option>
      <option value="Friend" <?php if ($relationship == "Friend")
      echo"selected='selected'";?>>Friend</option>
      <option value="Colleague" <?php if ($relationship == "Colleague")
      echo"selected='selected'";?>>Colleague</option>
      <option value="Other" <?php if ($relationship == "Other")
      echo"selected='selected'";?>>Other</option>
  </select>
</td></tr>

<tr><th>Date of Birth:</th>
<td><input type="date" name="dob" value="<?php echo $dob?>"
required="required"/>
</td></tr>


<!--add a update button for this page-->
<tr><td colspan="2">
<br />
<center><input type="submit" value="Update"/>&nbsp;&nbsp;
  <input type="submit"value="Back to Previous Page" formaction="view.php"/>

</center>
</td></tr>

</table>

</form>
</center>
</body>
</html>
