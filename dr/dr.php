<?php
$x = 1;
$y = 1;
$sum = 0;
$sh = 0;
while($sum < 10){
    $sum += $x/$y;
    $x += 3;
    $y += 1;
    $sh += 1;
}
echo $sh;