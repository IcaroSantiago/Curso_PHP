<div class="titulo">Basico Arrays</div>

<?php
$lista = array(1, 2 , 3.4 , "texto" );
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[3000000];
echo '<br>';
var_dump($lista[3000000]);

$texto = 'Esse texto é um teste';
echo '<br>' . $texto[0];
echo '<br>' . mb_substr($texto, 0, 10);
echo '<br>' . $texto;
?>