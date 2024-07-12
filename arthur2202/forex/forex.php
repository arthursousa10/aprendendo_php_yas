<div class = "titulo">Exercicio for</div>

<form action = "#" method = "post">
    Nota 1: <input type = "text" name = "n1"/> </br>
    Nota 2: <input type = "text" name = "n2"/> </br>
    Nota 3: <input type = "text" name = "n3"/> </br>
    <input type = "submit" name="pao" value ="começar"/> </br>
</form>

<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$notas = [$n1, $n2, $n3];

for ($i = 0; $i < count($notas); $i ++) {
    echo "Nota". $i +1 ;
    echo " {$notas[$i]} <br>";
}

$media = ($notas[0] + $notas[1] + $notas[2])/3;

if ($media >= 6.3) {
    echo "<br> Aprovado";
} else {
    echo "<br> Reprovado";
}

?>