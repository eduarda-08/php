<?php
class carro
{
    public $modelo;
    public $ano;
    public $rodas;
    public $motor;
    public $tipodemotor;
    public $placa;
    public $marca;
 
    public function andar()
    {
        echo "o carro anda";
    }

    public function parar()
    {
       echo "o caro para";
    }
}