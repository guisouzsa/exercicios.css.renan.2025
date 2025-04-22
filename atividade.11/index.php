<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = $_POST["produto"];
        $acrescimo =  $_POST["acrescimo"] / 100;
        $valor_total = $produto + ($produto * $acrescimo);

        echo "O valor da prestação é: R$ " . number_format($valor_total, 2, ',', '.');
    }
?>
<form method="post">
    Valor do produto : <input type="text" name="produto"><br>
    <input type="submit" value="calcular prestações">
    acréscimo em % : <input type="number" name="acrescimo"><br>
    <input type="submit" value="valor total">
</form>
</body>
</html>