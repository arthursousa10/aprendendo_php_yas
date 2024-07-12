<div class="titulo">Função</div>
<form action="#" method="post">
    Numero a: <input type="number" name ="a"> </br>    
    Numero b: <input type="number" name ="b"> </br> 
    Numero c: <input type="number" name ="c"> </br> 
    <input type="submit" name = "seila" value = "setar">
</form>


<?php 


function iprimirMensagens() {
    echo"Olá, Spuder-man";
}
//invocar função

iprimirMensagens();

echo "<hr>";

$var = 1;

function tVar () {
    $var = 2;
    echo "valor trocado $var<br>";
}

echo "<br>var antes $var <br>";
tVar();
echo "var depois $var";


function varGlo () {
    global $var;
    $var = 3;
    echo "<br>Agora sim $var";
}

echo "<br>a $var";
varGlo();
echo "<br>Foi $var";

echo "<hr>";

function oMens() {
    return "Seja bem vindo a sociedade aranha";
}

echo oMens();

function oMensN($nome){
return "Bem vindo {$nome}";
}

echo "<br>". oMensN("Arthur");

function soma($a, $b) {
 return $a + $b;
}

echo "<br>A soma ". soma(5, 10);

echo "<hr>";

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

echo "O delta desses numeros é". equacao($a, $b, $c);

function equacao ($a, $b, $c) {
    $delta = delta($a, $b, $c);
if ($a == 0)
    return "não existe";
else if ($delta == 0) 
    return "duas raizes iguais";
else if ($delta > 0)
    return "duas raizes distintas";
else 
    return "duas raizes imaginarias";
}

function delta ($a, $b, $c) {
    return ($b** - 4 * $a * $c);
}



?>