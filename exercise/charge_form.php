<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>配送料金計算</h3>
    <form action="charge_process.php" method="get">
        <div class="container">
            <label for="weight">重さ(kg): </label>
            <input type="number" name="weight" id="weight" step="0.1">
        </div>
        <div class="container">
            <label for="height">サイズ(cm): </label>
            <input type="number" name="height" id="height">
        </div>
        <div>
            <input type="submit" value="計算">
        </div>
    </form>
</body>
</html>