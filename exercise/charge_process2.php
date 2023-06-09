<?php
$weight = $_GET['weight'];
$height = $_GET['height'];

$price_table = [
    [  500, 1000, 2000], // 2kg以下
    [  700, 1200, 2200], // 5kg以下
    [ 1000, 1500, 3000]  // 5kg超
];

if ($weight <= 2) {
    $weight_index = 0;
} else if ($weight <= 5) {
    $weight_index = 1;
} else {
    $weight_index = 2;
}

if ($height <= 100) {
    $height_index = 0;
} else if ($height <= 300) {
    $height_index = 1;
} else {
    $height_index = 2;
}


$price = $price_table[$weight_index][$height_index];
const BASIC_PRICE = 200;
$price += BASIC_PRICE; // $price = $price + BASIC_PRICE
print("重さが{$weight}kg、サイズが{$height}cmの配送料金は{$price}円です。");
