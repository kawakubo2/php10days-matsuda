<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>データの受け渡し</h1>
    <p>var_form.phpからvar.phpへデータを渡す</p>
    <form method="post" action="var.php">
        <label for="x">x: </label>
        <input type="number" name="x" id="x" />
        x
        <label for="y">y: </label>
        <input type="number" name="y" id="y" />
        <input type="submit" value="計算" />
    </form>
</body>
</html>