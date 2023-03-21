<?php

$nome = $_GET['nome'];
$signo = $_GET['signo'];
$idade = $_GET['idade'];

$file = fopen('armario.csv', 'a');

fwrite($file, "$nome,$signo,$idade\n");

header('location:index.php')

?>
