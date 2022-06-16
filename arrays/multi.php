<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Jose",
        "idade" => 43,
        "naturalidade" => "Paraíba",
    ],
    [
        "nome" => "Juliana",
        "idade" => 37,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Paulo Plinio",
    "idade" => 24,
    "naturalidade" => "Brasilia"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2] ['idade'];

$dados[2] ["Vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo'<br>';
print_r($dados);
var_dump($dadoa[1000]);

?>