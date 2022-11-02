<?php
$a = "fact";
echo ucfirst($a);
echo "<br>";

$b = "Цуркан Георгий Викторович";
$c = explode(" ", $b);
echo $c[1]." ".$c[0];
echo "<br>";

$d = "Привет, мир";
echo substr_count($d, "и");
echo "<br>";

$e = "html css php";
$f = explode(" ", $e);
echo $f[0]. "<br>". $f[1]. "<br>". $f[2];
echo "<br>";

$g = " ldjflsj;df.pnglkjs;lfjl";
if (substr($g, -4) == ".png"){
    echo "да";
}
else {
    echo "нет";
};