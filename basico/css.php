<div class="titulo">Integração CSS</div>

<h1 center>

<?php 
echo ' Olá ';
echo ' <small> ';
echo ' Mundo ';
echo ' </small> ';
?>

</h1>

<?= "<div center azul> Outra forma de me 'expressar'!</div>" ?>

<br>

<div center> <button dobro> <?= " Legal "?> </button> </div>

<style>
    button{
        padding: 5px <?= 2 * 10?>px;
        background-color: #1e90ff;
        color: #eee;
        font-weight: bold;
        border-radius: 5px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #1e90ff;
    }

    [dobro]{
        font-size: 3rem;
    }
</style>