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
        $carro = $_POST["carro"];
        $impostos = $carro * 0.45;
        $carro_impostos= $carro + $impostos;
        $vendedor = $carro_impostos * 0.28;

        $valor_total = $carro_impostos + $vendedor;

        echo "O valor do carro é: R$ " . number_format($valor_total, 2, ',', '.');
    }
?>
<form method="post">
    Valor do carro : <input type="text" name="carro"><br>
    <input type="submit" value="o valor do carro é">
</form>
</body>
</html>