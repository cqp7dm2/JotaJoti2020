<?php
include "connection.php";
$id = $_GET["user_id"];
$sql = "delete from user where user_id= $id";
mysqli_query($link, $sql);
echo $sql;
?>

<script type="text/javascript">
// window.location="tables.php";
alert("Member successfully deleted");
</script>
