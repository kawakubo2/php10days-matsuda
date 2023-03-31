<?php
$data = ['山田太郎', '横山花子', '田中一郎', '山本久美子', 
         '鈴木次郎', '星山裕子', '佐藤勝男'];
?>
名簿には<?php print(count($data)); ?>人が登録されています。
<ol>
<?php
for ($i = 0; $i < count($data); $i++) {
    print("<li>{$data[$i]}</li>");
}
?>
</ol>
<hr>
<ol>
<li>山田太郎</li>
<li>横山花子</li>
<li>田中一郎</li>
<li>山本久美子</li>
<li>鈴木次郎</li>
<li>星山裕子</li>
<li>佐藤勝男</li>
</ol>
