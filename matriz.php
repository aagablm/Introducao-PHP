<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
    <style>
        * {
            font-family: 'Fira Sans', sans-serif;
        }

        table {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $x = 10;
    $y = 10;

    function GeraMatriz($linhas, $colunas) {
        $matriz = array();
        for ($i = 0; $i < $linhas; $i++) {
            $linha = array();
            for ($j = 0; $j < $colunas; $j++) {
                $linha[] = rand(1, 1000);
            }
            $matriz[] = $linha;
        }
        return $matriz;
    }

    $matriz = GeraMatriz($x, $y);

    echo '<table border="1">';
    foreach ($matriz as $linha) {
        echo '<tr>';
        foreach ($linha as $valor) {
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>
