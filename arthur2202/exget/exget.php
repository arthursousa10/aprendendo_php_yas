<div class="titulo">Exercicios Get</div>

<?php 

/*echo "Exercicio 1: Salario <br>";

$sl = $_GET['s'];

$h = $_GET['h'];

$f = $sl * $h ;

echo "Você recebe R$ $sl por hora <br> Trebalhou $h horas esse mês<br>";

echo "Você recebera R$ $f no fim do mês.<br>";*/


/*echo "<br>Exercicio 2: altura e peso ideal (72.7*altura)-58<br>";

$al = $_GET['a'];

echo "<br>Sua altura é $al";

$p = (72.7 * $al)-58;

echo "Seu peso ideal é $p";*/

/*echo "<br>Exercicio 3:metros p/ centimetros <br>";

$m = $_GET['m'];

$cm = $m * 100;

echo "os $m metros em centimetros são $cm";*/

echo "Exercicio 4: tinta e 1L p/ 3 metros q <br>";  

//18L = R$80.00

$tmq = $_GET['tmq'];

$L = 1000;

echo "<br>Você quer pintar $tmq metros cubicos";

$tml = $tmq * 605;

$finalmente = $tml / 1000;

$p1 = 80/18;

$p2 = $p1 * $finalmente;

echo "<br>Você vai comprar $finalmente Litros e gastará R$ $p2";
echo "<br>Você aproximadamente $finamente latas de um litro";



?>