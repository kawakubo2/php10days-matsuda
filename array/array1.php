<?php
$numbers = [5, 8, 1, 10, 2, 7, 6, 4, 3, 9];

print('---< 全ての要素を取り出す >---<br>');
foreach($numbers as $num) {
    print($num . ' ');
}
print('<br>');

print('---< 偶数だけを取り出す >---<br>');
foreach($numbers as $num) {
    if ($num % 2 === 0) { // 偶数の判定
        print($num . ' ');
    }
}
print('<br>');

print('---< 5以下の要素を取り出す >---<br>');
foreach ($numbers as $num) {
    if ($num <= 5) {
        print($num . ' ');
    }
}
print('<br>');

$total = 0;
print('---< 合計をもとめる >---<br>');
foreach ($numbers as $num) {
    $total += $num; // $total = $total + $num
}

print("合計: {$total}<br>");
$total = 0;
print('---< 偶数だけの合計 >---<br>');
foreach ($numbers as $num) {
    if ($num % 2 === 0) {
        $total += $num;
    }
}
print("偶数だけの合計: {$total}<br>");

print('---< $numbersから6以上の値を持った要素からなる新しい配列を作る >---<br>');
$numbers2 = [];
foreach ($numbers as $num) {
    if ($num >= 6) {
        $numbers2[] = $num;
    }
}
print('==< 6以上の値を持つ新しい配列 >==<br>');
foreach ($numbers2 as $num) {
    print($num . ' ');
}
print('<br>');
