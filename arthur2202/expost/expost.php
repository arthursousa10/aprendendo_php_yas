<div class = "titulo"> Exercicio do Post <div>

<!-- 1) Faça um programa que leia 5 números digitados pelo usuário
 e informe o maior número.
2) em seguida informe a soma e a média
dos números que foram informados. -->

<form action = "#"  method = "post">
     Insira o primeiro numero : <input type = "number" name='ste'/><br/>
     Insira o segundo numero : <input type = "number" name='ste2'/><br/>
     Insira o terceiro numero : <input type = "number" name='ste3'/><br/>
     Insira o quarto numero : <input type = "number" name='ste4'/><br/>
     Isira o quinto numero : <input type = "number" name='ste5'/><br/>
     <input type = "submit" name = "submit" value ="Mandar"/>
</form>

<?php

$n1 = $_POST['ste'];
$n2 = $_POST['ste2'];
$n3 = $_POST['ste3'];
$n4 = $_POST['ste4'];
$n5 = $_POST['ste5'];


if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4 && $n1 > $n5) {
    echo "O $n1 é o maior numero";
} elseif ($n2 > $n1 && $n2 > $n3 && $n2 > $n4 && $n2 > $n5) {
    echo "O $n2 é o maior numero";
} elseif ($n3 > $n1 && $n3 > $n2 && $n3 > $n4 && $n3 > $n5) {
    echo "O $n3 é o maior numero";
} elseif ($n4 > $n1 && $n4 > $n2 && $n4 > $n3 && $n4 > $n5) {
    echo "O $n4 é o maior numero";
} elseif ($n5 > $n1 && $n5 > $n2 && $n5 > $n3 && $n5 > $n4) {
    echo "O $n5 é o maior numero";
} else {
    echo "todos os numeros (ou a maioria) são(é) iguai(s) não há um maior";
}

$media = ($n1 + $n2 + $n3 + $n4 + $n5)/5;

echo "<br>A media dos numeros é $media";

?>