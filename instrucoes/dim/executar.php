<?php
require_once('DimCliente.php');

use dimensoes\DimCliente;

$dimCliente = new DimCliente();
$sumCliente = $dimCliente->carregarDimCliente();
echo "Quantidade de inclusoes:".$sumCliente->quantidadeInclusoes."<br>";
echo "Quantidade de Alterações:".$sumCliente->quantidadeAlteracoes;


$data = "2019-10-31";
echo "Data: ".$data."<br>";
echo "Dia: ".date(d, strtotime($data))."<br>";
echo "Mês: ".date(m, strtotime($data))."<br>";
echo "Ano: ".date(y, strtotime($data))."<br>";

?>

