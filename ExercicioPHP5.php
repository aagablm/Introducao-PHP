<!DOCTYPE html>
<html lang="PT-br">

<head>
    <title>EXE05</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" action="ExercicioPHP5.php">
        <input name="valor1" type="number"><br><br>
        <input name="valor2" type="number"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php

    $iValor1 = $_POST['valor1'];
    $iValor2 = $_POST['valor2'];
    $rArea = ($iValor1 * $iValor2) / 2;

    echo '<h1>A área do triângulo é ' . $rArea;
    ?>
</body>

</html>