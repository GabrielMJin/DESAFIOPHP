<?php 
    class Carrinho{
        public $produtos = array();
        public $desconto;

        public function __construct($produtos, $desconto){
            $this->produtos = $produtos;
            $this->desconto = $desconto;
        }
    }
?>