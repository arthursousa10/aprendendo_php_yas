<div class = "titulo">DoWhile </div>
<form action = "#" method = "post">
    Tabuada do: <input type = "text" name = "tabuada"/> </br>
    <input type = "submit" name="pao" value ="Testar"/> </br>
</form>

<?php
$tab = $_POST['tabuada'];
$cont = 1;

do {
    echo "$tab X $cont = ". $tab * $cont. "<br>";
    $cont++;
} while ($cont <= 10);

?>