<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="ExercicioPHP4.php">
            <input name="valor1" type="number"><br><br>
            <input name="valor2" type="number"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>

<?php

$iValor1 = $_POST['valor1'];
$iValor2 = $_POST['valor2'];
$rArea = $iValor1 * $iValor2;

if ($rArea > 10){
    
    echo '<h1>A área do retângulo de lados '. $iValor1.' e '. $iValor2;
    echo ' é '. $rArea .' metros quadrados.</h1>';
    echo '</br>';
    echo '</br></br><div style="background-color: red;'. 'width:'.$iValor1. 'px;height:'.$iValor2.'px "></div>';
}else{
    echo '<h3>A área do retângulo de lados '. $iValor1.' e '. $iValor2;
    echo ' é '. $rArea .' metros quadrados.</h3>';
    echo '</br>';
    echo '</br></br><div style="background-color: red;'. 'width:'.$iValor1. 'px;height:'.$iValor2.'px "></div>';
}
?> 
   </body>
</html>