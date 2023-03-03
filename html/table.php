<?php
$items = [
    ['日付' => '2023-03-03', '費目' => '食費', 'メモ' => 'コーヒーを購入', '入金額' => 0, '出金額' => 380],
    ['日付' => '2023-03-10', '費目' => '給料', 'メモ' => '2月の給料', '入金額' => 280000, '出金額' => 0],
    ['日付' => '2023-03-11', '費目' => '教養娯楽費', 'メモ' => '書籍を購入', '入金額' => 0, '出金額' => 2800],
    ['日付' => '2023-03-14', '費目' => '交際費', 'メモ' => '同期会の会費', '入金額' => 0, '出金額' => 5000],
];
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
    <table border="1">
        <thead>
            <tr>
                <th>日付</th>
                <th>費目</th>
                <th>メモ</th>
                <th>入金額</th>
                <th>出金額</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($items as $item) { ?>
            <tr>
                <td><?=$item['日付'] ?></td>
                <td><?=$item['費目'] ?></td>
                <td><?=$item['メモ'] ?></td>
                <td><?=$item['入金額'] ?></td>
                <td><?=$item['出金額'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>