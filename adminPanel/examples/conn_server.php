<?php
$link = mysqli_connect("localhost", "scoutmy_jota", "JotaJoti@1958") or die(mysqli_error($link));
mysqli_select_db($link, "scoutmy_jota") or die(mysqli_error($link));
?>
