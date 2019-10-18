<?php
require_once('DimCliente.php');

use dimensoes\DimCliente;

$dimCliente = new DimCliente();
$sumCliente = $dimCliente->carregarDimCliente();
echo "Quantidade de inclusoes:".$sumCliente->quantidadeInclusoes."<br>";
echo "Quantidade de Alterações:".$sumCliente->quantidadeAlteracoes;
?>