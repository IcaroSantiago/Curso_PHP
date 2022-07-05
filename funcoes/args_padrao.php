<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bem Vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Mestre',"Supremo");

echo '<br>';

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";

}

echo '<br>';

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');


function anotarPedido2($comida, $bebida = 'Água'){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";

}

echo '<br>';

// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Pizza2');