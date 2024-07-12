<div class="titulo">Operadores</div>
<?php

/* teste de mesa operadores relancionais 

var_dump( 1 == 1 ); //true
var_dump(1 > 1); // false 
var_dump(1 < 7); //true

var_dump(111 == '111'); //true
var_dump(111 === '111'); // false : estreitamente igual

var_dump(111 == '111'); //false
var_dump(111 !== '111'); //true

*/

echo"Verdaadeiro ou falso <br>";

var_dump( true); //true
var_dump(!true); //falso
var_dump(!!true); //true

echo "<br> Tabela Verdade 'AND' e 'OU' <br>";

var_dump(true && true); //true
var_dump(true && false); //false 
var_dump(false &&  false); //true 
var_dump(true || false); //true

?>