<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verifica Número</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero > 10) {
            echo "O número é maior que 10!";
        } else {
            echo "O número não é maior que 10.";
        }
    }
?>
<form method="post">
    Digite um número: <input type="number" name="numero"><br>
    <input type="submit" value="Verificar">
</form>
</body>
</html>
