<?php
class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function comprar()
    {
       echo "o cliente realizou uma compra";
    
    }

    public function cadastro()
    {
      echo "o cliente realizou um cadastro na loja";
    }
}