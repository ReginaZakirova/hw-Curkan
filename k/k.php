<?php
$k = 12345678;
$s = 0;
while($k != 0){
    if(($k % 10) % 2 == 0)
    $s += $k % 10;
    else
    $s += 0;
    $k /= 10;

}
echo $s;