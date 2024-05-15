<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - variaveis e constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Variaveis e constantes</h1>
        <hr>
        
        <?php
        //variaveis usa ($)
        $curso = "Programador Web";
        $ano = 2024;
        $area = "Back-end";

        //saída interpolada (tem que ser com aspas duplas)
        echo "<p>Estamos no $curso em $ano.</p>";

        //com aspas simples, não funciona a execução dinâmica
        echo '<p>Estamos no $curso em $ano.</p>';

        //constantes
        define("AUTOR", "Matheus");//antiga
        const EMPRESA = "ABC Tecnologia";//moderna

        echo AUTOR."trabalha na empresa".EMPRESA;
        echo "<p>".AUTOR."trabalha na empresa".EMPRESA."</p>";
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>