<?php
require_once  'src/Conta.php';

$primeiraConta = new Conta('123123123','mateus');
$primeiraConta->deposita(1000);
$primeiraConta->saca(300);

echo $primeiraConta ->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;

echo $primeiraConta->recuperaSaldo().PHP_EOL;

$segundaConta=new Conta('089898','patricia');
var_dump($segundaConta);

echo Conta::recuperNumeroDeContas();