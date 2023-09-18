<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="ExercicioPHP1.php">
            <input name="valor1" type="number">
            <input name="valor2" type="number">
            <input name="valor3" type="number">
            <button type="submit">Enviar</button>
        </form>
<?php
$iValor1 = $_POST['valor1'];
$iValor2 = $_POST['valor2'];
$iValor3 = $_POST['valor3'];
$iTotal = $iValor1 + $iValor2 + $iValor3;

if ($iTotal > 10) {
    echo '<p style="color: blue;">' . $iTotal . '</p>';
} else if ($iValor3 < $iValor1 && $iValor3 < $iValor2) {
    echo '<p style="color: red;">' . $iTotal . '</p>';
} else if ($iValor3 < $iValor2) {
    echo '<p style="color: green;">' . $iTotal . '</p>';
}
else {
    echo $iTotal;
}
?>
    </body>
</html>
