<?php
$data = [
    '山田太郎' => ['男', '1989-12-12', '北海道'],
    '横山花子' => ['女', '1997-07-23', '山形県'],
    '田中一郎' => ['男', '1971-04-08', '東京都'],
    '山本久美子' => ['女', '1989-08-05', '静岡県'],
    '鈴木次郎' => ['男', '2001-01-18', '富山県'],
    '星山裕子' => ['その他', '1982-07-22', '岡山県'],
    '佐藤勝男' => ['男', '1995-10-23', '高知県'],
];
?>
<dl>
<?php foreach ($data as $name => $prof) { ?>
    <dt><?=$name ?></dt>
    <dd>性別: <?=$prof[0] ?></dd>
    <dd>生年月日: <?=$prof[1] ?></dd>
    <dd>住所: <?=$prof[2] ?></dd>
<?php } ?>
</dl>
