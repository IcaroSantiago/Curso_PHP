<div class="titulo">Variáveis</div>
 
<?php
// Variaveis são case sensitive 
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo'<br>';

$a = 3;
$b = 16;
$soma = $a +$b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variavel (Regras de nomeclatura)
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'VALIDA';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar sempre que possivel
// $6var = 'inavlida';
// $%var7 = 'invalida';
// $var8% = 'inavlida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
?>