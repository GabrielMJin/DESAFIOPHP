<?php
session_start();
include '../negocio/models/Produto.php';
include '../negocio/models/Carrinho.php';

$carrinho = array();
$totalBruto = 0;
$totalComDesconto = 0;

for ($i = 0; $i < $_SESSION['cesta']; $i++) { //criação dos produtos
    array_push(
        $carrinho,
        new Produto(
            htmlspecialchars(
                $_POST['NOME' . $i]
            ),
            (int)$_POST['QUANTIDADE' . $i],
            (float)$_POST['PRECO' . $i]
        )
    );
}

$finalizado = new Carrinho($carrinho, (float)$_POST['DESCONTO']); //instaciando a compra

$_SESSION['finalizado'] = $finalizado;

include '../telas/FinalizarCompra.php';
?>