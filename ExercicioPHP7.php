<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE07</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>


<?php

$rValoraVista = 22500;
$rValorParcela = 489.65;
$iParcelas = 60;
$rValorTotal = $rValorParcela * $iParcelas;

echo '<h1>Mariazinha gastou '.$rValorTotal .' </h1>';
echo '<h2>Ela gastou R$ '.($rValorTotal - $rValoraVista).' a mais em comparação com o valor à vista</h2>';
?> 
   </body>
</html>