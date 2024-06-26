<?php include "recursos.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP - Arrays</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="alert alert-info">
        <p>Empresa: <?=EMPRESA?></p>
        <p>Ano fiscal: <?=$anoFiscal?></p>
    </div>

    <div class="container">
    <h1>Arrays</h1>
    <hr>
    <h2>Arrays numéricos/indexados</h2>
    <?php
    $bandas = ["Metallica", "Megadeth", "pink floyd"];
    $cursos = array("HTML5", "PHP", "Design", "JS");

    define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
    const UNIDADES_SENAC = ["penha", "São Miguel","Itaquera"];
     ?>

      <h3>Acesso a saida de dados</h3>

      <p>Curto a banda <?=$bandas[1]?></p>
      <p>Já estudei <?=$cursos[3]?></p>
      <p>gostaria de conhecer o Sesc <?=UNIDADES_SESC[1]?> </p>
      <p>Estamos no Senac <?=UNIDADES_SENAC[0]?></p>
    

    <hr>

    <h2>Arrays associativos</h2>
    <?php
    $filme = [
        // Chave associativa
        "titulo" => "Deadpool 2",
        "ano" => 2018,
        "genero" => "ação",
        "personagens" => ["Wade Wilson", "Fanático"]
    ];

    $livro = array(
        "titulo" => "Senhor dos Anéis",
        "autor" => "Tolkien"
    );
    ?>

    <h3>Acesso e saída de dados</h3>

    <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["ano"]?>.</p>

    <p> <?=$livro["titulo"]?> é um otimo livro.</p>

    <hr>

    <h2>Comandos úteis para analise/depuração de arrys</h2>

    <h3><code>print_r()</code> e <code>var_dump()</code></h3>

    <pre>  <?=print_r($bandas)?></pre>

    <pre><?=var_dump($bandas)?></pre>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>