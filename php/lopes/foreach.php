<?php

$cursos = [
    "PHP" => [
        "nome_curso" => "Curso de fundamentos de PHP",
        "versao_ferramenta" => 8.1,
        "carga_horario" => 40,
        "status" => true
    ],
    "Java" => [
        "nome_curso" => "Curso de fundamentos de Java",
        "versao_ferramenta" => 11.4,
        "carga_horario" => 30,
        "status" => true
    ],
    "C#" => [
        "nome_curso" => "Curso de fundamentos de C#",
        "versao_ferramenta" => 5,
        "carga_horario" => 60,
    ],
    "JavaScript" => [
        "nome_curso" => "Curso de fundamentos de JavaScript",
        "versao_ferramenta" => 11.4,
        "carga_horario" => 30,
        "status" => false
    ]

];

foreach ($cursos as $curso)
{
    if($curso['status'] == false){
        continue;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "versao_ferramenta" . $curso['versao_ferramenta'];
    echo "<br>";
    echo "carga_horario" . $curso['carga_horario'];
    echo "<br>";
    echo "status" . $curso['status'];
}