<?php
$price = $_GET['price'];

if ($price <= 0) {
    die('不動産売買価格は0より大きい値を入力してください');
} else if ($price < 200) {
    $tesuryo = floor($price * 0.05);
} else if ($price < 400) {
    $tesuryo = floor($price * 0.04 + 2);
} else {
    $tesuryo = floor($price * 0.03 + 6);
}

print("不動産価格が{$price}万円の場合の仲介手数料は{$tesuryo}万円です。<br>");
print("<strong>○○不動産</strong>");