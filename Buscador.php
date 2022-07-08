<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Busca Cep</title>
</head>

<body>
    <h1>Busca Cep</h1>
    <form action="" method="post">
        <label for="cep">CEP: </label>
        <input type="text" name="cep" id="cep">
        <br>
        <input type="submit" value="Buscar">
    </form>
    <?php

    require_once("funcao.php");
    $endereco = "";
    if (isset($_POST["cep"]) && trim($_POST["cep"]) != "") {

        $endereco = json_decode(buscarCEP($_POST["cep"]));
    }
    if ($endereco != "") {
    ?>
        <p>Resultado da Pesquisa:</p>

        <p>CEP: <?= $endereco->cep ?></p>
        <p>Cidade: <?= $endereco->localidade ?></p>
        <p>UF: <?= $endereco->uf ?></p>
        <p>DDD: <?= $endereco->ddd ?></p>

    <?php
    }
    ?>
</body>

</html>