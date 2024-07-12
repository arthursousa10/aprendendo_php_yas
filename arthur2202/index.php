<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Idice do Exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class = "modulos">
                <div class="modulo b">
                    <h3>Modulo 1</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=teste&file=teste">Operação Aritiméica</a></li>
                            <li><a href="exercicio.php?dir=equacao&file=equacoes">Desafio Equação</a></li>
                            <li><a href="exercicio.php?dir=atribuir&file=atribuicao">Atribuicao</a></li>
                            <li><a href="exercicio.php?dir=incremento&file=incremento">Incremento</a></li>
                        </ul>
                </div>
                <div class="modulo azul">
                    <h3>Modulo 2</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=operadores&file=operadores">Operadores</a></li>
                            <li><a href="exercicio.php?dir=exercicioOperador&file=exercicioOperador">Exercicio Operador</a></li>
                            <li><a href="exercicio.php?dir=switch&file=switch">Switch Case</a></li>
                        </ul>
                </div>
                <div class="modulo violeta">
                    <h3>Modulo 3</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=array&file=array">Array</a></li>
                            <li><a href="exercicio.php?dir=array2&file=array2">Array 2</a></li>
                            <li><a href="exercicio.php?dir=get&file=get">Get/pegar</a></li>
                        </ul>
                </div>
                <div class="modulo verde">
                    <h3>Modulo 4</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=exget&file=exget">Exercicios Get</a></li>
                            <li><a href="exercicio.php?dir=post&file=post">Post Operação</a></li>
                            <li><a href="exercicio.php?dir=post2&file=post2">Post 2</a></li>
                        </ul>
                </div>
                <div class="modulo verm">
                    <h3>Modulo 5</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=post3&file=post3">Post 3</a></li>
                            <li><a href="exercicio.php?dir=expost&file=expost">Exercicio Post</a></li>
                            <li><a href="exercicio.php?dir=for&file=for">Laço For</a></li>
                        </ul>
                </div>
                <div class="modulo ama">
                    <h3>Modulo 6</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=forpost&file=forpost">For e Post</a></li>
                            <li><a href="exercicio.php?dir=while&file=while">Do While</a></li>
                            <li><a href="exercicio.php?dir=dowhile&file=dowhile">DoWhile</a></li>
                        </ul>
                </div>
                <div class="modulo rosa">
                    <h3>Modulo 7</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=for2&file=for2">For 2</a></li>
                            <li><a href="exercicio.php?dir=forex&file=forex">Exercicio For</a></li>
                            <li><a href="exercicio.php?dir=funcao&file=funcao">Função</a></li>
                        </ul>
                </div>
                <div class="modulo rox">
                    <h3>Modulo 8</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=ativfun&file=ativfun">Atividade Função</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                        </ul>
                </div>
                <div class="modulo aqua">
                    <h3>Modulo 9</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                        </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        DTEC CURSO PHP <?= date('Y'); ?>
    </footer>
</body>
</html>

