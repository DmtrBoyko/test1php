<?php
$i = 15;
$names = array (
    'Kate' => 12,
    'Max' => 13,
    'Elena' => 8,
);
print_r($names);
function test_include(){
    include 'C:\Users\Dmitry\AppData\Roaming\JetBrains\PhpStorm2023.3\scratches\test_include.php';
    echo $l+$s;
}
function fol(){
    $x = 13;
    $x = $x-1;
    return $x;
}
function ghd() {
    $y = 12;
    $y -=10;
    return $y;
}
while ($i==15) {
    $b = fol();
    $i -= 1;
}

if ($i < 15) {
    $c = ghd();
    $m = test_include();
}

echo $b,"\n", $i, "\n", $c ;

