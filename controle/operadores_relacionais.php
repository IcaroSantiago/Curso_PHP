<div class="titulo">Operadores Relacionais </div>

<?php 
// Comprarações
var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1); 
echo '<br>';
var_dump(1 >= 1); 
echo '<br>';
var_dump(4 < 23); 
echo '<br>';
var_dump(4 <= 7); 
echo '<br>';
var_dump(1 <= 1); 
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <>1);
echo '<br>';

var_dump( 111 == '111');
echo '<br>';
var_dump( 111 === '111');
echo '<br>';
var_dump( 111 != '111');
echo '<br>';
var_dump( 111 !== '111');
echo '<br>';

echo "<p> Relacionais no IF/Else </p> <hr>";
$idade = 15;
if ($idade < 18){
    echo "Menor de idade = $idade anos <br>";
} else if ($idade < 65 ){
    echo "Adulto = $idade anos <br>";
} else {
    echo "Terceira Idade! = $idade anos <br>";
}

echo    '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!0);
var_dump(!!5);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>