<!DOCTYPE html>
<html lang="PT-br">

<head>
    <title>EXE02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" action="ExercicioPHP2.php">
        <label for="numero">Escreva o número</label><br>
        <input name="numero" type="number"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    $iNumero = $_POST['numero'];

    if ($iNumero % 2 == 0) {
        echo "Valor divisível por 2";
    } else {
            echo "O valor não é divisível por 2";
        }
    ?>

</body>
</html>