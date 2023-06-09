<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>路線価から実勢価格を計算</h3>
    <form action="real_price_process.php" method="get">
        <div class="container">
            <label for="rosen">路線価: </label>
            <select name="rosen" id="rosen">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60">60</option>
                <option value="70">70</option>
                <option value="80">80</option>
                <option value="90">90</option>
            </select>万円
        </div>
        <div class="container">
            <label for="area">面積: </label>
            <input type="number" name="area" id="area" step="0.1">m<sup>2</sup>
        </div>
        <input type="submit" value="計算">
    </form>
</body>
</html>