<?php

$nome = $_POST['nome'];
$signo = $_POST['signo'];
$idade = $_POST['idade'];

$file = fopen('armario.csv', 'a');

fwrite($file, "$nome,$signo,$idade\n");

header('location: index.php')

?>
