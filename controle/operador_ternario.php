<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

if ($idade >= 18){
    echo 'Maior de Idade!!';
} else {
    echo 'Menor de Idade!!';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ?  'Maior de Idade ' : 'Menor de Idade';
echo "$status<br>";

$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de Idade' ): 'Menor de Idade';

// $tipoMaiorIdade = ($idade >= 65 ? 'Aposentado' : 'Maior de Idade' );
// $status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de Idade';