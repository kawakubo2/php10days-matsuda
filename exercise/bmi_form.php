<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>BMI計算</h3>
    <form action="bmi_process.php" method="get">
        <div class="containr">
            <label for="height">身長: </label><br>
            <input type="number" name="height" id="height" step="0.5">cm
        </div>
        <div class="container">
            <label for="weight">体重: </label><br>
            <input type="number" name="weight" id="weight" step="0.5">kg
        </div>
        <div class="container">
            <input type="submit" value="計算">
        </div>
    </form>
</body>
</html>