<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE08</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="ExercicioPHP8.php">
			<label for="quantidadeParcela">Quantas parcelas?</label>
			<input name="quantidadeParcela" type="number">
			  <button type="submit">Enviar</button>
        </form>

<?php
$valorAVista = 8654.00;
$iQuantidadeParcela =($_POST['quantidadeParcela']);
$taxaInicial = 0.015;  // 1.5%

for ($i = 0; $i < $iQuantidadeParcela; $i++) {
    $n = $i + 24;
    $taxaJuros = $taxaInicial + ($i * 0.005);  
    $valorParcela = ($valorAVista / $n) + ($valorAVista * $taxaJuros / $n);
    
    echo "Para $n vezes: R$ " . ($valorParcela) . " por parcela<br>";
}
?>

   </body>
</html>