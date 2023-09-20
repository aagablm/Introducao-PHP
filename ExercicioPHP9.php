<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE09</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
<body>

<?php
$valorMoto = 15000; 
$opcoesParcelamento = [24, 36, 48, 60];
$taxaInicial = 2; 
$incrementoTaxa = 0.3; 


foreach ($opcoesParcelamento as $parcelamento) {
  $taxaJuros = $taxaInicial + ($parcelamento - 24) * $incrementoTaxa;

  $taxaJurosDecimal = $taxaJuros / 100;
  $montante = $valorMoto * pow(1 + $taxaJurosDecimal, $parcelamento);

  $valorParcela = $montante / $parcelamento;

  echo "Parcelamento em $parcelamento vezes: R$ " . number_format($valorParcela, 2) . " por mês<br>";
}
?>


</body>
</html>
