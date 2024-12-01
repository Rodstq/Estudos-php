<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulários</title>
</head>
<body>
        <header>
            <h1> Cadastre-se </h1>
        </header>

        <section >

        <?php
            $nome = $_GET["nome"] ?? '';
            $sobrenome = $_GET["sobrenome"] ?? '';

            if($nome != ''&& $sobrenome != '') {
                #retornar div com cadastro realizado
                echo  "<div class=\"principal realizado\">
                <p > Cadastro realizado! </p>
                <a href=\"javascript:history.go(-1)\" class=\"voltar-botao\"> Voltar</a>
            </div>";
            } else {
                #retornar div com cadastro não realizado
                echo "<div class=\"principal realizado\">
                    <p> Cadastro vazio não foi realizado!</p>
                    <a href=\"http://localhost/phptestes/formularios/index.html\" class=\"voltar-botao\"> Voltar</a>";
            }          
        ?>
                        
        </section>

        <footer>
        <p> Desenenevido por mim </p>
        </footer>
</body>
</html>