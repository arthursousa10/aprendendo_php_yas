<div class="titulo">Laço For</div>


<?php 

for($pao = 10; $pao <= 100; $pao += 10) {
    echo "$pao<br>";
}
echo "<hr>";

for(; $pao <= 200; $pao +=10) {
    echo"$pao <br>";
}
echo "<hr>";

$list = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

for($day = 0; $day < count($list); $day ++) {
    echo "{$list[$day]} <br>";
}


?>