<div class="titulo"> Mapa</div>

<?php
$dados = array(
    "idade" => 21,
    "cor" => "vermelho",
    "peso" => 54.5

);

print_r($dados);

echo '<br>';
var_dump($dados[0]);
echo '<br>' . $dados["idade"]; 
echo '<br>' . $dados["cor"]; 
echo '<br>' . $dados["peso"]; 


$lista = array(
    "a", 
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'tentei indexar com false';
echo '<br>';
print_r($lista);

?>