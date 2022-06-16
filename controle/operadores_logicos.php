<div class="titulo">Operadores Lógicos </div>

<?php
echo "<p>Negação Lógica </p>";
echo "<p> V ou F </p>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p> Tabela Verdade 'AND' (E)</p><hr>"; // Se tiver um false, já torna a expressão falsa
var_dump(true  && true);
var_dump(true  && false);
var_dump(false && true);
var_dump(false && false);
// var_dump(true && 3 > 2 && 7 <= 7);
// var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo '<br>';
var_dump(true  and true);
var_dump(true  and false);
var_dump(false and true);
var_dump(false and false);

echo "<p> Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true  || true);
var_dump(true  || false);
var_dump(false || true);
var_dump(false || false);

echo '<br>';
var_dump(true  or true);
var_dump(true  or false);
var_dump(false or true);
var_dump(false or false);

echo "<p> Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true  xor true);
var_dump(true  xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<br>';
var_dump(true  != true);
var_dump(true  != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class= 'divisiao'> Exemplo </p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomen = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomen || $criterioMulher;
$podeSeAposentar =  $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aponsentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M'){
    echo "Pode se Aposentar ->  $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

?>

<style>
p{
    margin-bottom: 0px;
}

hr {
    margin-top:0px;
}

</style>