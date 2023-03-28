<?php

//Verificação de request
// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     exit();
// }

// if (!isset($_POST['email']) || !isset($_POST['nome']) || !isset($_POST['sobrenome']));

$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

//Verificação de integridade

$fp = fopen('usuarios.csv', 'r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $email) {
        echo "E-mail em uso";
        exit();
    }
}

//Salvando

// if (!file_exists('usuarios.csv')) {
//     exit();
// }

$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$email, $nome, $sobrenome]);

//http_response_302

header('location: index.php');

?>