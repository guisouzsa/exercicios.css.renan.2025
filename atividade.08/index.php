<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 8</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cotacao = $_POST["cotacao"];
    $dolares = $_POST["dolares"];
    $reais = $cotacao * $dolares;

    echo "Valor em reais: R$ " . number_format($reais, 2, ',', '.');
}
?>

<form method="post">
    Cotação do dólar: <input type="text" name="cotacao"><br>
    Quantidade em dólares: <input type="text" name="dolares"><br>
    <input type="submit" value="Converter">
</form>

</body>
</html>