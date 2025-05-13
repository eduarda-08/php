<?php

require_once "src/Classes/Carro.php"; // importaçao de arquivo de carros

require_once "src/Classes/Cliente.php"; // importaçao de arquivo de clientes

require_once "src/Classes/Vendedor.php"; // importaçao de arquivo de clientes

$car= new Carro;
$car ->modelo = "uno";
$car ->ano ="2010";
$car ->rodas ="original";
$car ->motor = "original";
$car ->tipodemotor = "1,6";
$car ->placa = "awv-2j98";
$car ->marca = "fiat";

var_dump ($car);
echo "<br>";
var_dump ($car);
echo "<br>";

$cli= new Cliente;
$cli ->nome = "joão";
$cli ->idade = 40;
$cli ->endereco = "Rua A";
$cli ->telefone = " 41-xxxx-xxxx";

$cli ->comprar();
echo "<br>";
var_dump($cli);

$vend= new Vendedor;
$vend ->nome = "enzo";
$vend ->matricula = "6234";
$vend ->telefone = " 41-xxxx-xxxx";
$vend ->cpf = "xxx.xxx.xxx-xx";
$vend ->periodo ="integral";

var_dump($vend);
echo "<br>";
