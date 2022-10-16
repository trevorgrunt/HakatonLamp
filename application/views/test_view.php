<?php 
include_once("bdconnect.php");
$sql = mysqli_query($connect, 'SELECT * FROM `CITY`');
while ($result = mysqli_fetch_array($sql)) {
    echo "Город {$result['Name']} : номер города {$result['CityID']} <br>";
  }
?>
