<?php
/*
午前( 0 - 11)・・・おはよう。
正午(12     )・・・お昼です。
午後(13 - 18)・・・こんにちは。
夜  (19 - 23)・・・・こんばんは。
*/
for ($hour = -1; $hour <= 24; $hour++) {
    print('<br>======< 解法1 >======<br>');
    print("---< {$hour}時 >---<br>");
    if ($hour >= 0 && $hour <= 11) {
        print('おはよう。');
    } else if ($hour == 12) {
        print('お昼です。');
    } else if ($hour >= 13 && $hour <= 18) {
        print('こんにちは。');
    } else if ($hour >= 19 && $hour <= 23) {
        print('こんばんは。');
    } else {
        print('時刻の範囲を超えています。');
    }
    
    print('<br>======< 解法2 >======<br>');
    if ($hour < 0 || $hour > 23) {
        print('時刻の範囲を超えています。');
    } else if ($hour <= 11) {
        print('おはよう。');
    } else if ($hour == 12) {
        print('お昼です。');
    } else if ($hour <= 18) {
        print('こんにちは。');
    } else {
        print('こんばんは。');
    }

    print('<br>======< 解法3 >======<br>');
    if ($hour < 0 || $hour > 23) {
        print('時刻の範囲を超えています。');
    }

    
}