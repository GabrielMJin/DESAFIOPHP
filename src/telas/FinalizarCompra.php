<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <img src="../../assets/logo.png" style="position: center;">
                        <div>
                            <h5 class="mt-3" id="titulo">
                                <p>O VALOR PAGO É DE :
                                    <?php 

                                    for ($i = 0; $i < count($finalizado->produtos); $i++) { //cálculo do valor total
                                        $totalBruto += ($finalizado->produtos[$i]->quantidade * $finalizado->produtos[$i]->preco);
                                    }
                                    $porcentagemPaga = 1 - $finalizado->desconto;
                                    $totalComDesconto = $totalBruto * $porcentagemPaga;

                                    echo number_format($totalComDesconto, 2, ',', ' .') . ' R$';
                                    ?>
                                </p>

                                <form method="post" action="../index.php">
                                    <button class="btn btn-primary" type="submit" action="negocio/telas/FinalizarCompra.php">VOLTAR</button>
                                </form>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>