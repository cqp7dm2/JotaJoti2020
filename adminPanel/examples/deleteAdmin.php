<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($link, "delete from admin where admin_id=$id");
?>

<script type="text/javascript">
window.location="tableAdmin.php";
alert("Admin successfully deleted");
</script>
