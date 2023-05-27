<?php
$height = $_GET['height'];
$weight = $_GET['weight'];

$bmi = $weight / pow($height / 100, 2);

$result = '';
if ($bmi < 18.5) {
    $result = '低体重';
} else if ($bmi < 25) {
    $result = '普通体重';
} else if ($bmi < 30) {
    $result = '肥満(1度)';
} else if ($bmi < 35) {
    $result = '肥満(2度)';
} else if ($bmi < 40) {
    $result = '肥満(3度)';
} else {
    $result = '肥満(4度)';
}
$bmi = round($bmi, 2);
print("あなたのBMI値は{$bmi}、{$result}です。<br>");
