<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <select name="estado" placeholder="Estado">
        <option value="DF"> Distrito Federal</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>


<style>
    form > *{
        font-size:1.8rem;
    }
</style>


<?php
print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);