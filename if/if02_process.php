<?php
$gender = $_GET['gender'];
$age = $_GET['age'];

if ($gender === 'male') { // 男性の場合
    if ($age <= 20) {
        $price = 2400;
    } else if ($age <= 50) {
        $price = 2800;
    } else if ($age <= 70) {
        $price = 3200;
    } else {
        $price = 3600;
    }
} else { // 女性の場合
    if ($age <= 20) {
        $price = 2000;
    } else if ($age <= 50) {
        $price = 2200;
    } else if ($age <= 70) {
        $price = 2400;
    } else {
        $price = 2600;
    }
}
print("{$price}円です。<br>");