<?php
print('He\'s "GREAT" teacher<br>');
print("He's \"GREAT\" teacher<br>");
print("LAWSON Machi Caf\u{00E9}<br>");
print("\u{0d86}\u{0dba}\u{0dd4}\u{0db6}\u{0ddd}\u{0dc0}\u{0db1}\u{0dca}<br>");

$name = '山田太郎';
$age = 38;
$height = 170;

print($name . 'さんの年齢は' . $age . '歳です<br>');
print("{$name}さんの年齢は{$age}歳です<br>");
print('{$name}さんの年齢は{$age}歳です<br>');
print("{$name}さんの身長は{$height}cmです。");