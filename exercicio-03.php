<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <style>
        li:nth-child(odd){
            border: solid black;
            background-color: hotpink;
            padding: 2px;
        }
    </style>



</head>
<body>
    <div>
    <h1>Exercício 3</h1>
    <hr>
    <?php
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro" ];?>
   <ol>

   <?php
     foreach ($meses as $mes) {
        ?>
            <li ><?=$mes?></li>
    <?php 
    };
    ?>  
    </ol>
    </div>


</body>
</html>