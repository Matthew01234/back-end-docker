<?php
date_default_timezone_set('Europe/Amsterdam');
$hour = (int) date('H');
$time = date('H:i:s');
echo '<img src="images\afternoon.png">';






if ($hour >= 6 && $hour < 12) {
    echo '<img src="images\morning.png">';
    echo "<h2> $time</h2>";
    echo "<p>goede morgen</p>";
}
    
if ($hour >= 12 && $hour < 18){
    echo '<img src="images\afternoon.png">';
    echo "<h2> $time</h2>";
    echo "<p>goede morgen</p>";
}
if ($hour >= 18 && $hour < 24){
    echo '<img src="images\evening.png">';
    echo "<h2>  $time</h2>";
    echo "<p>goede morgen</p>";
}
if ($hour >= 0 && $hour < 6){ 
    echo '<img src="images\night.png">';
    echo "<h2> $time</h2>";   
    echo "<p>goede morgen</p>";
}
?>


<!DOCTYPE html>
<html> 

<head>
  <link rel='stylesheet' href = 'style.css'  >
</head>


</html> 