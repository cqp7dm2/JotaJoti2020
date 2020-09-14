<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($link, "delete from user where user_id= $id");
?>

<script type="text/javascript">
window.location="tableMember.php";
alert("Member successfully deleted");
</script>
