<div class = 'titulo'>Atribuição</div>

<?php 
$preco = 100;
echo "O preço é R$: $preco<br>";

//$preco = $preco - ($preco *10/100);
$preco -= ($preco*10/100);
//adicao +=
//sub -=
//mult *=
//div /= 
//modulo %=

echo "O preço com o desconto de 10% é R$: $preco";

?>