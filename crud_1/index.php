<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crud_1/index.css">
    <title>lista de Usuários</title>
</head>

<body>
    <h1> Lista de Usuários </h1>
    <table>
        <tr>
            <th class="tabela">E-mail:</th>
            <th class="tabela">Nome:</th>
            <th class="tabela">Sobrenome:</th>
        </tr>
        <?php $fp = fopen('usuarios.csv', 'r') ?>
        <?php while (($row = fgetcsv($fp)) !== false) : ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td>
                    <form action="delete.php" method="GET">
                        <input type="hidden" name="cpf" value="<?= $row[0] ?>">
                        <button>Remover</button>
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
    <form class="form" action="adicionar.php" method="POST">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="Sobrenome">
        <button>Salvar</button>
    </form>
    <form action="delete"></form>
    <a href="/">Voltar</a>
</body>

</html>