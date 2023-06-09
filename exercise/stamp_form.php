<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>印紙税額</h3>
    <form action="stamp_process.php" method="get">
        <div class="container">
            <label for="contract_price">契約金額: </label>
            <input type="number" name="contract_price" id="contract_price">万円
        </div>
        <input type="submit" value="計算">
    </form>
</body>
</html>