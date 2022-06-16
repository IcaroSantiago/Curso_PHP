<div class="titulo">While/Do While </div>

<?php
const VALOR_LIMITE = 5;
$contator = 0;

while($contator < VALOR_LIMITE){
    echo "while $contator <br>";
    $contator++;
}

$contator = 0;
do{
    echo "while $contator <br>";
    $contator++;
} while($contator < VALOR_LIMITE);

$contator = 0;
while(true) {
    echo "while(true) $contator <br>";
    $contator++;
    if($contator >= VALOR_LIMITE) break;
}

?>