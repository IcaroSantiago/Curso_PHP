<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bem Vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Mestre',"Supremo");

// function anotarPedido($comida, $bebida = 'Água'){

// }