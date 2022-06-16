<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concateção
echo "Bom dia  " . " Meu caro", "<br>"; // Utilizando o ponto para contatenar strings.
echo 'O Nosso numero é ' . 123;
echo '<br>', "Também aceito ", " virgulas";

echo '<br>';
echo "'Teste' " . ' "Teste"' . '\' teste\'' .  "\" teste\"" . "\n";

print("<br> Também existe a função print");
print "<br> Também existe a função print" ;

// Algumas Funções 
echo '<br>' . strtoupper('maximizado'); // Coloca toda a string em maiusculo.
echo '<br>' . strtolower('MINIMIZADO'); // Coloca toda a string em minusculo.
echo '<br>' . ucfirst('Apenas a primeira letra'); // Apenas a primeira letra se torna maiuscula.
echo '<br>' . ucwords('todas as palavras'); // As letras iniciais serão maiusculas.
echo '<br>' . strlen('Quantas letras'); // Calcula quantos caracteres tem a string.
echo '<br>' . mb_strlen('Eu também' , 'utf-8'); // Calcula as string de acordo com o padrão de linguagem.
echo '<br>' . substr('Só uma parte mesmo', 7 , 7); // Imprime uma parte da string.
echo '<br>' . str_replace('isso', ' aquilo', ' Trocar isso isso'); // Irá procurar o primeiro fator e trocar pelo segundo





?>