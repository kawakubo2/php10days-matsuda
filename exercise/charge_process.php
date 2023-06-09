<?php
$weight = $_GET['weight'];
$height = $_GET['height'];

$price = 0;
if ($weight <= 2) {
    if ($height <= 100) {
        $price = 500;
    } else if ($height <= 300) {
        $price = 1000;
    } else {
        $price = 2000;
    }
} else if ($weight <= 5) {
    if ($height <= 100) {
        $price = 700;
    } else if ($height <= 300) {
        $price = 1200;
    } else {
        $price = 2200;
    }
} else {
    if ($height <= 100) {
        $price = 1000;
    } else if ($height <= 300) {
        $price = 1500;
    } else {
        $price = 3000;
    }
}
const BASIC_PRICE = 200;
$price += BASIC_PRICE; // $price = $price + BASIC_PRICE
print("重さが{$weight}kg、サイズが{$height}cmの配送料金は{$price}円です。");
