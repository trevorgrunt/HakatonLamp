<?php
$servername = "192.168.14.113";
$database = "hackaton";
$username = "admin1";
$password = "1111";
$connect = mysqli_connect($servername, $username, $password, $database);
mysqli_close($connect);
?>