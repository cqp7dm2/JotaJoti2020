<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Connection</title>
 </head>
<body>

<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'angelfood';

$conn = mysqli_connect($server,$username,$password,$dbname);

?>

</body>
