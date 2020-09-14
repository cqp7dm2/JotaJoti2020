<?php
include "connection.php";
$id = $_GET["user_id"];
mysqli_query($link, "delete from admin where admin_id=$id");
?>

<script type="text/javascript">
window.location="tables2.php";
alert("Admin successfully deleted");
</script>
