<?php

$cpf = $_GET['nome'];

$temp = tempnam(',', '');

$fpOrigin = fopen('armario.csv', 'r');
$fpTemp = fopen($temp, 'w');

while (($row = fgetcsv($fpOrigin)) !== false ) {
    if ($row[0] != $nome) {
        fputcsv($fpTemp, $row);
    }
}

$fpOrigin = fopen('armario.csv', 'w');
$fpTemp = fopen($temp, 'r');
while (($row = fgetcsv($fpTemp)) !== false ) {
    fputcsv($fpOrigin, $row);
}

unlink($temp);

http_response_code(302);
header('location: index.php');
?>
