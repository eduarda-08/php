<?php

require_once "scr/Classes/Cliente.php";

$cli = new Cliente;
$cli -> nome = "eduarda";
$cli -> idade = 27;
$cli -> endereco = "rua b";
$cli -> telefone = "41-xxxx-xxxx";
$cli ->comprar();

$cli2 = new Cliente;
$cli2 -> nome = "eduarda";
$cli2 -> idade = 27;
$cli2 -> endereco = "rua b";
$cli2 -> telefone = "41-xxxx-xxxx";
$cli2 ->reembolso();

$cli3 = new Cliente;
$cli3 -> nome = "eduarda";
$cli3 -> idade = 27;
$cli3 -> endereco = "rua b";
$cli3 -> telefone = "41-xxxx-xxxx";
$cli3 ->atendimento();

$cli4 = new Cliente;
$cli4 -> nome = "eduarda";
$cli4 -> idade = 27;
$cli4 -> endereco = "rua b";
$cli4 -> telefone = "41-xxxx-xxxx";
$cli4 ->pedido();

$cli5 = new Cliente;
$cli5 -> nome = "eduarda";
$cli5 -> idade = 27;
$cli5 -> endereco = "rua b";
$cli5 -> telefone = "41-xxxx-xxxx";
$cli5 ->saiu();