<<?php

require "Gerente.php";
require "Telefonista.php";
require "Secretaria.php";

$gerente = new Gerente();
$gerente->nome = "Marcelo da Silva";
$gerente->salario = 2000;
$gerente->usuario = "marcelo.silva";
$gerente->senha = "1234";

echo "********* Gerente *********" . PHP_EOL;
echo "Nome: {$gerente->nome}" . PHP_EOL;
echo "Salário: {$gerente->salario}" . PHP_EOL;
echo "Usuario: {$gerente->usuario}" . PHP_EOL;
echo "Senha: {$gerente->senha}" . PHP_EOL;
echo "Bonificacao: " . $gerente->calculaBonificacao() . PHP_EOL;

$telefonista = new Telefonista();
$telefonista->nome = "Maryana Santos";
$telefonista->salario = 1000;
$telefonista->estacaoDeTrabalho = 12;

echo "********* Telefonista *********" . PHP_EOL;
echo "Nome: {$telefonista->nome}" . PHP_EOL;
echo "Salário: {$telefonista->salario}" . PHP_EOL;
echo "Senha: {$telefonista->estacaoDeTrabalho}" . PHP_EOL;

$secretaria = new Secretaria();
$secretaria->nome = "Tatiana Andrade";
$secretaria->salario = 1500;
$secretaria->ramal = 41958;

echo "********* Secretaria *********" . PHP_EOL;
echo "Nome: {$secretaria->nome}" . PHP_EOL;
echo "Salário: {$secretaria->salario}" . PHP_EOL;
echo "Senha: {$secretaria->ramal}" . PHP_EOL;
 ?>
