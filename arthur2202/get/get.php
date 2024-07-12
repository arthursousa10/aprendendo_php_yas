<div class="titulo">Get</div>

<?php

$preco = $_GET['p'];
//digita só na url do coisinho lá

$celcius = $_GET['c'];
$faren = $_GET['f'];

$calF = ($celcius * 9/ 5) + 35;
$calC = ($faren - 32) * 5/9;

$nome = $_GET['nome'];

echo "O preço do produto é R$ $preco";

echo "<br>O nome digitado foi: $nome";

echo "<br>Graus C para F $calF °";

echo "<br>Graus F para C $calC °";



?>