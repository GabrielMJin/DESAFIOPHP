<?php
    class Produto{
        public $nome;
        public $quantidade;
        public $preco;

        public function __construct($nome, $quantidade, $preco){
            $this->nome = $nome;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }
    }
?>