<?php

$x = 0;
$y = 1;
// Table boolean


//ET
echo "--AND--";
echo "<br>";

if ($x == 0 && $y == 0) {
    echo 0;
} else if ($x == 0 && $y == 1) {
    echo 0;
} else if ($x == 1 && $y == 0) {
    echo 0;
} else { // x== 1 y==1
    echo 1;
}

echo "<br>";

//OU
echo "--OR--";
echo "<br>";


if ($x == 0 && $y == 0) {
    echo 0;
} else if ($x == 0 && $y == 1) {
    echo 1;
} else if ($x == 1 && $y == 0) {
    echo 1;
} else {
    echo 1;
}

echo "<br>";

//NOT
echo "--NOT--";
echo "<br>";


if ($x == 0) {
    echo 1;
} else {
    echo 0;
}


echo "<br>";

//XOR
echo "--XOR--";
echo "<br>";


if ($x == 0 && $y == 0) {
    echo 0;
} else if ($x == 0 && $y == 1) {
    echo 1;
} else if ($x == 1 && $y == 0) {
    echo 1;
} else {
    echo 0;
}
