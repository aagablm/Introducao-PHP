<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE06</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="ExercicioPHP6.php">
			<php
				<?php
		for ($i = 1; $i <= 6; $i++) {
        echo '<label for="produto' . $i . '"> Produto ' . $i . '</label>';
        echo '<input name="produto' . $i . '" type="number">';
		 echo '<label for="pesoProduto' . $i . '"> Peso ' . $i . '</label>';
        echo '<input name="pesoProduto' . $i . '" type="number"><br><br>';
    }
				
			?>
        </form>

<?php

$rProduto1 = $_POST['produto1'] * $_POST['pesoProduto1'];
$rProduto2 = $_POST['produto2'] * $_POST['pesoProduto2'];
$rProduto3 = $_POST['produto3'] * $_POST['pesoProduto3'];
$rProduto4 = $_POST['produto4'] * $_POST['pesoProduto4'];
$rProduto5 = $_POST['produto5'] * $_POST['pesoProduto5'];
$rProduto6 = $_POST['produto6'] * $_POST['pesoProduto6'];
$rTotalProdutos = $rProduto1  + $rProduto2 + $rProduto3 + $rProduto4 + $rProduto5 + $rProduto6;
$iValorMaximo = 50;

if ($rTotalProdutos > $iValorMaximo){
    
    echo '<h1> R$ '.$rTotalProdutos.'</h1>';
    echo '<h2 style="color: red">São necessários R$ '.$rTotalProdutos - $iValorMaximo.' para concluir a compra</h2>';
    echo '</br>';
}else if ($rTotalProdutos == $iValorMaximo){
    echo '<h1> R$ '.$rTotalProdutos.'</h1>';
    echo '<h2 style="color: green"> O saldo para compras foi esgotado</h2>';
    echo '</br>';
}else{
	echo '<h1> R$ '.$rTotalProdutos.'</h1>';
    echo '<h2 style="color: blue">Ainda sobram R$ '.$iValorMaximo - $rTotalProdutos.' </h2>';
    echo '</br>';
}
?> 
   </body>
</html>