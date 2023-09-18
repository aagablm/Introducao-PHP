<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="ExercicioPHP3.php">
            <input name="valor" type="text"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
<?php

$iValor = $_POST['valor'];

if ($iValor >= 0){
    $rArea = $iValor * 2;
    
    echo 'A área do quadrado de lado '. $iValor . ' metros';
    echo ' é '.  $rArea. ' metros quadrados'; 
    echo '</br></br><div style="background-color: red;'. 'width:'.$iValor. 'px;height:'.$iValor.'px "></div>';
}else{
    echo 'Escreva números válidos';
}
?>
</body>
</html>