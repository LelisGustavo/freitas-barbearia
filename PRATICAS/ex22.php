<?php

$nome = array();

$nome[] = 'Gustavo';
$nome[] = 'Cedrico';
$nome[] = 'Khaleesi';
$nome[] = 'Churumela';
$nome[] = 'Lucimara';
$nome[] = 'Viana';
$nome[] = 'Nany';

echo 'Total: ' . count($nome) . '<br>';

for ($i = 0; $i < count($nome); $i++) {
    echo "O nome da vez é $nome[$i] <br>";
}
