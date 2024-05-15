<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>

    <style>
        .um {
            color: hotpink;
        }
        .dois {
            color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Exercício 1</h1>
    <hr>


    <?php

    const NOME = "Matheus";
    $idade = 17;
    ?>

    <p> <b class= "um"><?=NOME?></b> tem exatos <b class="dois"><?= $idade?></b> anos de idade</p>

</body>
</html>