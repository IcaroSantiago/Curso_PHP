<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha"> KM > milha </option>
        <option value="milha-km"> Milha > Km </option>
        <option value="metro-km"> Metro > Km </option>
        <option value="km-metro"> Km > Metro </option>
        <option value="celsius-fahrenheit"> Celsius > Fahrenheit </option>
        <option value="fahrenheit-celsius"> Fahrenheit > Celsius </option>
    </select>
    <!-- <br> -->
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    button {
        background-color: #009aff;
    }



</style>


<?php 
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;


$param = $_POST['param'] ?? 0;
switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km = $distancia Milhas";
        break;

    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia km";
        break;
    
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia km";
        break;

    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param km = $distancia Metros";
        break;
    
    case 'celsius-fahrenheit':
        $conversao = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}° celsius = {$conversao}° Fahrenheit";
        break;

    case 'fahrenheit-celsius':
        $conversao = ( $param - 32 )/ FATOR_CELSIUS_FAHRENHEIT;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° celsius";
        break;

    default:
        $mensagem = "Nenhum Valor Calculado";
}

echo "<p>$mensagem</p>";

?>