<?php
include "connection.php";
$id = $_GET["user_id"];
mysqli_query($link, "delete from user where user_id=$id");
?>

<script type="text/javascript">
window.location="tables.php";
alert("Member successfully deleted");
</script>
