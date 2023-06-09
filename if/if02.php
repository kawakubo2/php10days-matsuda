<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>○○料金の計算</h3>
    <form method="GET" action="if02_process.php">
        <div class="container">
            <label for="gender">性別: </label><br>
            <select name="gender" id="gender">
                <option value="">選択</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>
        </div>
        <div class="container">
            <label for="age">年齢: </label><br>
            <input type="number" name="age" id="age" min="0">
        </div>
        <div class="container">
            <input type="submit" value="計算">
        </div>
    </form>
</body>
</html>