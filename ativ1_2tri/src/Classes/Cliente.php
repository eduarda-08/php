<?php
class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function comprar()
    {
       echo "o cliente {$this->nome} realizou uma compra";
    }
    public function definirNome($nomeClasse2)
    {
        $this ->nome = $nome;
    }
    public function reembolso()
    {
      echo "o cliente {$this->nome} pediu um reembolso";
    }
    public function atendimento()
    {
       echo "o cliente {$this->nome} foi atendido";
    }
   
    public function pedido()
    {
       echo "o cliente {$this->nome} fez um pedido online";
    }
  
    public function saiu()
    {
       echo "o cliente {$this->nome} saiu da loja";
    }
    }
  
 