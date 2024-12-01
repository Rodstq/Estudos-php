<?php
$frase = 'Esta frase tem 29 caracteres.';

#retornar o número total de caracteres na frase
$numero_caracteres_total = mb_strlen($frase);

#retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4);

#converte para maiúsculo
$todas_maiusculas = strtoupper($primeira_palavra);

#converte para minúsculo
$todas_minusculas = strtolower($primeira_palavra);

#substituir caracter por outro
$nova_frase = str_replace('a', 'x', $frase);

#verifica a posicao de um caracter dentro da string
$posicao = strpos($frase, 'a');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1> Cadastre-se </h1>
    </header>

    <section>
        <p class = "texto-retorno"> <?php echo $numero_caracteres_total ?></p>
        <p class = "texto-retorno"> <?php echo $primeira_palavra ?></p>
        <p class = "texto-retorno"> <?php echo $todas_maiusculas ?></p>
        <p class = "texto-retorno"> <?php echo $todas_minusculas ?></p>
        <p class = "texto-retorno"> <?php echo $nova_frase ?></p>
        <p class = "texto-retorno"> <?php echo $posicao ?></p>
    </section>

    <footer>
        <p> Desenenevido por mim </p>
    </footer>
</body>

</html>