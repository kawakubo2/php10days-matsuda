<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>好きなフルーツは?</h3>
    <input type="checkbox" name="fruits1" value="apple">りんご
    <input type="checkbox" name="fruits1" value="banana">バナナ
    <input type="checkbox" name="fruits1" value="grape">ぶどう
    <input type="checkbox" name="fruits1" value="orange">オレンジ
    <input type="checkbox" name="fruits1" value="pear">なし
    <?php
    $fruits = ['apple' => 'りんご', 'banana' => 'バナナ', 'grape' => 'ぶどう',
               'orange' => 'オレンジ', 'pear' => 'なし'];
    ?>
    <h3>好きなフルーツは?</h3>
    <?php foreach($fruits as $f_en => $f_ja) { ?>
        <input type="checkbox" name="fruits2" value="<?=$f_en ?>"><?=$f_ja ?>
    <?php } ?>
</body>
</html>