<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <hr>

    <?php
    $dados = [
        "Nome" => "Matheus",
        "senha" => "12345",
        "idade" => 17,
        "cidade" => "Guarulhos",
        "telefones" => ["(11)98405-4723", "4002-8922"]
        
        ]


    ?>
    
    <ol>
        <li><?=$dados["Nome"]?></li>
        <li><?=$dados["idade"]?></li>
        <li><?=$dados["cidade"]?></li>
        <li><?=$dados["telefones"][1]?></li>
    </ol>

</body>
</html>