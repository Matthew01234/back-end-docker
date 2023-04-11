
<?php

#lab 3a
$nummer1 = rand(10,100);
$nummer2 = rand(10,100);

echo '<br>',$nummer1 * $nummer2;
echo '<br>',$nummer1 + $nummer2;
echo '<br>',$nummer1 - $nummer2;
echo '<br>',$nummer1 / $nummer2,'<br>','<br>';






#lab 3b

#1
for ($x = 0; $x <= 10; $x++) {
    echo 6 * $x, ' ';
  }
#2
echo '<br>';
function multiplyer($getal){
 for ($x = 0; $x <= 10; $x++) {
     echo $getal * $x, ' ';
   }
}
multiplyer(6);

#3
$array = ['3','5','8','12'];
echo '<br>';
function multiplyer2($getal){
 foreach ($getal as $num) {
     multiplyer($num);
     echo '<br>';
   }
}
multiplyer2($array)
?>  