<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento da Poupança</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_fixo = $_POST["valor_fixo"];
        $juros = 0.007;
        $montante = $juros * $valor_fixo;
        $rendimento = $montante + $valor_fixo;

        echo "Valor do rendimento após 1 mês: R$ " . number_format($rendimento, 2, ',', '.');
    }
?>
<form method="post">
    Valor fixo: <input type="text" name="valor_fixo"><br>
    <input type="submit" value="Calcular rendimento">
</form>
</body>
</html>
