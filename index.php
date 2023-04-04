<?php
$signos = [
    'Áries' => 'Chato(a)',
    'Touro' => 'Última bolacha do pacote',
    'Gêmeos' => 'Rebelde',
    'Câncer' => 'Gay até demais',
    'Leão' => 'O que não deita',
    'Virgem' => 'Comportado(a)',
    'Escorpião' => 'Maluco(a)',
    'Sargitário' => 'Modelo',
    'Capricórnio' => 'Teimosio(a)',
    'Aquário' => 'Faz o pix',
    'Peixes' => 'Acha que sabe de tudo mas não sabe de nada'
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="https://icongr.am/material/card-account-details-outline.svg?size=128&color=ffffff">
    <title>Tipes de YAGs</title>
</head>

<body>
    <form class="form" action="adicionar.php" method="POST">
        <input class="nome-input" name="nome" placeholder="Nome" type="text">
        <select name="signo" id="">
            <?php foreach ($signos as $signo => $car) : ?>
                <option value="<?= $signo ?>"><?= $signo ?></option>
            <?php endforeach ?>
        </select>
        <input placeholder="Idade" name="idade" type="text">
        <input class="submit" type="submit">

    </form>

    <!-- <a href="/crud_1/index.php">Tabela de Usuários</a>
    <h1 class="titulo">Nome</h1>
    <h1 class="titulo">Signo</h1>
    <h1 class="titulo">Idade</h1>
    <h1 class="titulo">Tipo de YAG</h1>
    <table class="tabela">   -->
    <?php $table = file('armario.csv') ?>
    <?php foreach ($table as $row) : ?>
        <?php list($nome, $signo, $idade) = explode(",", $row); ?>
        <?php
        $chi = $signos[$signo]
        ?>
        <tr>
            <td><a class="nomes">Nome: </a> <?= $nome ?></td>
            <td><a class="nomes">Signo: </a> <?= $signo ?></td>
            <td><a class="nomes">Idade: </a><?= $idade ?></td>
            <td><a class="nomes">Tipo de YAG: </a><?= $chi ?></td>
            <td>
                <form action="delete.php" method="GET">
                    <input type="hidden" name="nome" value="<?= $nome ?>">
                    <button>Remover</button>
                </form>
            </td>
        </tr>
        </tr>
    <?php endforeach ?>
    </table>
</body>

</html>