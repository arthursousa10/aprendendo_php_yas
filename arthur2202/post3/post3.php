<div class = "titulo">Post 3<div>

<!--Confirmar login e senha de um usuaio-->

<form action = "#" method = "post">
    Digite seu login: <input type = "text" name = "ste"/><br/>
    Digite sua senha: <input type = "password" name = "senha"/><br/>
    Confirme sua senha: <input type = "password" name = "senha2"/><br/>
    <input type = "submit" name = "submit" value = "Validar"/>
</form>

<?php 

$login = $_POST['ste'];
$senha = $_POST['senha'];
$csenha = $_POST['senha2'];

if ($login != $senha && $senha == $csenha) {
    echo "cadastro feito com sucesso";
} else {
    echo "login incorreto a senha é igual ao o login ou senhas não batem";
}


?>