<?php include "recursos.php";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=EMPRESA?> - iniciando com PHP</title>
</head>
<body>
    <h1>Experiências com PHP</h1>
    <hr>
     <!-- delimitadores de abertura/fechamento PHP -->
        <?php
        echo "Olá";
        echo "<p>Senac Penha</p>";
        ?>
        <hr>
        <h2>Tecnologias trabalhadas</h2>
        <?php
        foreach ($tecnologias as $tecnologia) { ?>
            <p><?=$tecnologia?> </p>
        <?php
        };
        ?>
     <!-- delimitadores de abertura/fechamento PHP -->
</body>
</html>