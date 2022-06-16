<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
$index = array_rand($nomes);
echo "<h1><center>$nomes[$index]</center></h1>";


?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }

</style>