<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($link, "delete from table1 where id=$id");
?>

<script type="text/javascript">
window.location="tables.php";
alert("Member successfully deleted");
</script>
