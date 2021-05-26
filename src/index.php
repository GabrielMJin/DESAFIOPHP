<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <img src="../assets/logo.png" style="position: center;">
                        <div>
                            <h5 id="titulo">
                                <div class='row col-md-12'>
                                    <form method="post" class="col-md-4">
                                        <button type="submit" name="adicionar" class="btn btn-primary">ADICIONAR</button> <!-- Botão adicionar -->
                                    </form>

                                    <form method="post" class="col-md-4">
                                        <button type="submit" name="remover" class="btn btn-primary">REMOVER</button> <!-- Botão remover -->
                                    </form>

                                    <form method="post" class="col-md-4">
                                        <button type="submit" name="removerTodos" class="btn btn-danger">REMOVE ALL</button> <!-- Botão remover todos -->
                                    </form>
                                </div>
                            </h5>
                            <form method="post" action="negocio/telas/FinalizarCompra.php">
                                <div>
                                    <?php
                                    session_start(); //condicionais importantes para incremento e chamada de funções
                                    if (isset($_POST['adicionar'])) { 
                                        $_SESSION['cesta'] += 1; //adiciona mais uma tabela para preencher
                                    } elseif (isset($_POST['remover'])) {
                                        $_SESSION['cesta'] -= 1; //remove uma tabela para preencher
                                    } elseif (isset($_POST['removerTodos'])) {
                                        $_SESSION['cesta'] = 0; // remove todas as tabelas
                                    } else {
                                        $_SESSION['cesta'] = 0; //start na variável da tabela
                                        $_SESSION['enable'] = 1; //para ativar a condicional do botão submit 
                                    }
                                    for ($i = 0; $i < $_SESSION['cesta']; $i++) {
                                    ?>
                                        <div class="row col-md-12 mb-3">
                                            <div class="form-group col-md-4">
                                                <label for="nome<?php echo $i; ?>">NOME</label>
                                                <br>
                                                <input class="form-control" id="nome<?php echo $i; ?>" type="text" placeholder="Nome" name="NOME<?php echo $i; ?>" required>
                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label for="quantidade<?php echo $i; ?>">QUANTIDADE</label>
                                                <br>
                                                <input class="form-control" id="quantidade<?php echo $i; ?>" type="number" name="QUANTIDADE<?php echo $i; ?>" required>
                                            </div>
                                            <div class="form-group col-md-3 ">
                                                <label for="preco<?php echo $i; ?>">PREÇO</label>
                                                <br>
                                                <input class="form-control" id="preco<?php echo $i; ?>" type="number" step="0.01" name="PRECO<?php echo $i; ?>" required>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="row col-md-4 form-group">
                                    <div class="form-group">
                                        <label for="desconto">DESCONTO - ex: 0.10 = 10%</label>
                                        <br>
                                        <input class="form-control" id="desconto" name="DESCONTO" type="number" step="0.01" class="mt-3" value="0" placeholder="Valor do Desconto"></input>
                                    </div>

                                </div>
                                <div class="form-button mt-3">
                                    <input <?php if ($_SESSION['cesta'] < 1) { ?>disabled <?php } ?> type="submit" class="mt-3 btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>