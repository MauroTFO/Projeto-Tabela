<?php
    $signos = [
        'Áries' => 'Treteiro',
        'Touro' => 'Come come',
        'Gêmeos' => 'Instavel',
        'Câncer' => 'Doido',
        'Leão' => '',
        'Virgem' => '',
        'Escorpião' => '',
        'Sargitário' => '',
        'Capricórnio' => '',
        'Aquário' => '',
        'Peixes' => ''
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
    <form action="adicionar.php">   
    <input class="nome-input" name="nome" placeholder="Nome" type="text" >
    <select name="signo" id="">
        <?php foreach ($signos as $signo => $car): ?>
            <option value="<?=$signo?>"><?=$signo?></option>
        <?php endforeach ?>
    </select>
    <input placeholder="Idade" name="idade" type="text">
    <input class="submit" type="submit">

    <label class="input">
      <input class="input__field" type="text" placeholder=" " />
      <span class="input__label">Some Fancy Label</span>
      
    </label>
    </form>
    <table class="tabela">
        <?php $table = file('armario.csv') ?>
        <?php foreach($table as $row): ?>
            <?php list($nome, $signo, $idade) = explode(",", $row); ?>
            <?php 
                $chi = $signos[$signo]
            ?>
            <tr>
            <td><a class="nomes" style="color:red; text-transform:uppercase">Nome: </a> <?= $nome ?></td> 
            <td><a class="nomes" style="color:red; text-transform:uppercase">Signo: </a> <?= $signo ?></td>
            <td><a class="nomes" style="color: red; text-transform:uppercase">Idade: </a><?= $idade ?></td>
            <td><a class="nomes" style="color: red; text-transform:uppercase">Tipo de Yag: </a><?= $chi ?></td>
            </tr>
            <?php endforeach ?>
        </table>
</body>
</html>