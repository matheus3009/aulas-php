<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <style>
        ol li{
            list-style: decimal;
        }
    </style>
</head>
<body>
    <div>
    <h1>Exercício 3</h1>
    <hr>
    <?php
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro" ];

     foreach ($meses as $mes) {?>
        <ol>
            <li ><?=$mes?></li>
        </ol>
    <?php 
    };
    ?>
    </div>
</body>
</html>