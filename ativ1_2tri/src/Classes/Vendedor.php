<?php
class Vendedor
{
    public $nome;
    public $matricula;
    public $telefone;
    public $cpf;
    public $periodo;
    
    public function vender()
    {
       echo "o vendedor vendeu um carro";

    }

    public function anuncio()
    {
       echo "o vendedor anuncia carros";
    }
}