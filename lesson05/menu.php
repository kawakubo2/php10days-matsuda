<?php
const COFFEE = '1';
const MILK = '2';
const ORANGE = '3';
const GREEN_TEA = '4';
print(COFFEE . '.コーヒー ' . MILK . '.ミルク ' . ORANGE . '.オレンジジュース ' .  GREEN_TEA . '.緑茶 :');
print('<br>');
$drink = '3';
if ($drink == COFFEE) {
    print('420円です');
} else if ($drink == MILK) {
    print('280円です');
} else if ($drink == ORANGE) {
    print('450円です');
} else if ($drink == GREEN_TEA) {
    print('250円です。');
}