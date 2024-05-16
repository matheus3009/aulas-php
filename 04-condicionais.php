<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>condicionais</h1>
        <hr>

        <h2>Simples (não tem o <code>else</code> )</h2>

        <?php
        //simples
        $numero = 50;
        if ($numero < 100) {
            echo "<p>Condição é verdadeira/true!</p>";
        };
        ?>
        <hr>
        <h2>Composta (usa <code>if/else</code>)</h2>

        <?php
        /* Controle de Estoque */
        $produto = "Ultrabook";
        $qtdEmEstoque = 10; //o que temos no momento
        $qtdCritica = 2; //mínimo
        ?>

        <h3>Produto: <?=$produto?></h3>
        <h3>Estoque: <?=$qtdEmEstoque?></h3>

        <?php
        /* Se a quantidade em estoque for abaixo da quantidade crítica, o sisitema deve avisar e pedir pra repor.  */
        if ($qtdEmEstoque < $qtdCritica ) {
            echo "<p class=\"alert alert-danger\">É necessário repor</p>";
        } else {
             /*  Caso contrario, dizer que o estoque está normal */
            echo "<p class= \"alert alert-success\">Estoque normal.</p>";

        }
        
       
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>