<div class = "titulo">Atividade Função </div>

<form action = "#" method="post">
    Escolha C ou F = <input type = "text" name ="or"/></br>
    Digite a temp = <input type = "number" name = "t"/></br>
    <input type= "submit" name = "butao" value = "coloca"/>
</form>

<?php 

$escolha = $_POST['or'];
$temp = $_POST['t'];

echo "A temp escolhida foi $escolha ° ". escT($escolha, $temp);


function celc($a) {
    return ($a - 32) * 5/9;
}

function farem($a) {
    return ($a * 9/ 5) + 35;
}
function escT ($a, $b) {
    
if ($a == "c" || $a == "C")
    return  celc($b);

else if ($a == "f" || $a == "F")
    return farem($b);

else 
    return "Escolha indefinida";
}

?>