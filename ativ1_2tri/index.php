<?php

require_once "src/Classes/Cliente.php"; // importaçao de arquivo de clientes

$cli= new Cliente;
$cli ->nome = "joão";
$cli ->idade = 40;
$cli ->endereco = "Rua A";
$cli ->telefone = " 41-xxxx-xxxx";

$cli ->comprar();
echo "<br>";


