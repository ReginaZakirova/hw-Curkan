<?php
for($nam = 1000; $nam >= 50; $nam /= 2){
    $schet +=1;
}
echo $nam."<br>";
echo $schet."<br>";

$nam = 1000;
$schet = 0;
while($nam >= 50){
    $nam /= 2;
    $schet += 1;
}
echo $nam."<br>";
echo $schet."<br>";

$i = 2;
for($j = 0; $j <= 10 - $i; $j++){
    echo $j;
}