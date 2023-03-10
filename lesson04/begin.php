<?php
/*
 このプログラムはprintの役割と、それと同等に働きをする
 echoやprintを練習するのが目的

 作成者: 山田太郎
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h2>printの練習</h2>-->
   <?php
   $name = '山田太郎';
   print("こんにちは、{$name}さん！<br>");
   $age = 28;
   print("{$name}さんの年齢は{$age}歳です。<br>"); // 変数展開
   print('{$name}さんの年齢は{$age}歳です。<br>');

   echo "こんにちは、世界！<br>";
   print "こんにちは、PHP！<br>";
   print("こんにちは、HTML<br>");
?>
</body>
</html>