<?php
$numbers = [2, -1, 4, 5, 3, 10, -4, 8];

$total = 0;
foreach ($numbers as $n) {
    $total = $total + $n;
}
print("合計=" . $total . "<br>");

$total = 0;
foreach ($numbers as $num) {
    if ($num > 0) {
        $total = $total + $num;
    }
}
print("合計=" . $total . "<br>");