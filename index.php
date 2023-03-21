<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="https://icongr.am/material/card-account-details-outline.svg?size=128&color=ffffff">
    <title>Tipes de LGTV</title>
</head>
<body>
    <form action="adicionar.php">   
    <input class="nome-input" name="nome" placeholder="Nome" type="text" >
    <input placeholder="Signo" name="signo" type="tex">
    <input placeholder="Idade" name="idade" type="text">
    <input class="submit" type="submit">
    </form>
    <table class="tabela">
        <?php $table = file('armario.csv') ?>
        <?php foreach($table as $row): ?>
            <?php list($nome, $signo, $idade) = explode(",", $row); ?>
            <tr>
            <td><a class="nomes" style="color:red; text-transform:uppercase">Nome: </a> <?= $nome ?></td> 
            <td><a class="nomes" style="color:red; text-transform:uppercase">Signo: </a> <?= $signo ?></td>
            <td><a class="nomes" style="color: red; text-transform:uppercase">Idade: </a><?= $idade ?></td>
            </tr>
            <?php endforeach ?>
        </table>
</body>
</html>