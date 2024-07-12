<div class="titulo"> Post 2 </div>
<!-- Inserir um numero de 0 a 10 -->
<form action = "#"  method = "post">
     Isira uma nota : <input type = "number" name='Ste'/><br>
     <input type = "submit" name = "submit" value ="Inserir"/>
</form>

<?php

$nota = $_POST['Ste'];

if ($nota <= 10 && $nota >= 0){
    echo "nota inserida com sucesso";
} else {
    echo "insira uma nota valida entre 0 a 10";
}

?>