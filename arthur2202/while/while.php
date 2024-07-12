<div class = "titulo">Laço Do While </div>
<form action = "#" method = "post">
    Tabuada do: <input type = "text" name = "tabuada"/> </br>
    <input type = "submit" name="pao" value ="Testar"/> </br>
</form>

<?php
$tab = $_POST['tabuada'];
$cont = 1;

while ($cont <= 50) {
$resul = $tab * $cont;

echo "$tab X $cont = $resul <br>";
$cont++;
}



?> 