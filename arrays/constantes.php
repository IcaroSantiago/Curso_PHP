<div class="titulo">Array Constantes</div>


<?php
const FRUTAS = array('laranja','abacaxi'); 
// FRUTAS[0] = 'banana';
// FRUTAS [] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];


?>