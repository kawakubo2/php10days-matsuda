<?php
$numbers = [54, 82, 77, 92, 40];

// for文で要素を取り出す
$total = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $total = $total + $numbers[$i]; // $x = $x + 5  ---. $x += 5
    print($numbers[$i] . ' '); // 変数展開
}
print("合計=" . $total);
print('<hr>');

// while文で要素を取り出す(ファイル操作、データベース操作、ネットワーク処理等)
$total = 0;
$i = 0;
while($i < count($numbers)) {
    $total += $numbers[$i]; // $total = $total + $numbers[$i]
    print($numbers[$i] . ' ');
    $i++;
}
print("合計=" . $total);
print('<hr>');

// foreach文で要素を取り出す(配列から先頭のデータから順番に取り出す)
$total = 0;
foreach ($numbers as $num) {
    $total += $num;
    print($num . ' ');
}
print("合計=" . $total);
print('<hr>');