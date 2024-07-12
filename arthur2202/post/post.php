<div class="titulo">Post - Operação Lógica</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 01 (Terça): </label>
        <select name ="t1" id = "t1">
            <option value="1"> Executado </option>
            <option value="0"> Não Executado </option>
            <option value="0.5"> Meio Executado </option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 02 (Quinta): </label>
        <select name ="t2" id = "t2">
            <option value="1"> Executado </option>
            <option value="0"> Não Executado </option>
            <option value="0.5"> Meio Executado </option>
        </select>
    </div>

    <button>Executar</button>

</form>

<style>
    button, select {
        font-size: 20px;
    }
</style>

<?php

if (isset($_POST['t1']) && isset($_POST['t2']) ) {
    $t1 = $_POST['t1'] === '1'; //inclue valor 1 e 0
    //$t1 = !! $_POST['t1'];
    $t2 = !!$_POST['t2']; //utiliza dupla negação,
    //recebe o valor de fato inserido //$t2 = $_POST['t2'] === '1';
    $tv = ''; //vazia no inicio pois depende da condição]
    $sorvete = false;
} else echo'Você fica saldavel em casa';

if ($t1 && $t2) {
    $tv='50'; // seta na variavel TV o valor 50
} elseif ($t1 XOR $t2) {
    $tv = '32';
}

if ($t1 || $t2) {
    $sorvete = true;
}

if ($tv) {
    $resutado = "Vamos ganhar uma TV de $tv polegadas";
} else {
    $resutado = "Não ganhamos a TV";
}

if ($sorvete) {
    $resutado .= '<br>Sorvete liberado';
} else {
    $resutado .= '<br>Estamos mais saudaveis';
}
echo "<p> $resutado </p>";

?>