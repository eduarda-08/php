<?php

$linguagens = ["PHP" , "C#", "Java"];

$linguagens = array("PHP", "C#", "Java");

$curso = ["curso de fundamentos de PHP", 8.1, 40,true];

$curso = [
    "nome_curso"=> "curso fundamental de php",
    "versao_ferramenta"=> 8.1,
    "carga_hoario"=> 40,
    "status"=>true
];

$numeros = [
    [1,2,3,4,],
    [5,6,7,8,9],
    [10,[11,12,13]]
];

echo  $numeros[1][2];