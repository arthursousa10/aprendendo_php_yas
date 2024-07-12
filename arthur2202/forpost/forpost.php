<div class="titulo">For e Post </div>

<form action = "#" method = "post">
    Tabuada do: <input type = "text" name = "tabuada"/> </br>
    <input type = "submit" name="pao" value ="Testar"/> </br>

</form>
<?php

$tab = $_POST['tabuada'];

for($num = 1; $num <= 10; $num ++) {
    
    echo "$tab X $num =". $tab * $num. "<br>";
}


?>
