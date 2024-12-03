<?php

    $nota = 6;
    $resultado = '';
    $cor = '';

    #if else
    function nota($nota , &$cor){
    if($nota < 6){
        $resultado = "reprovado!";
        $cor = 'red';
        return $resultado;
    } else {
        $resultado = "aprovado";
        $cor = 'green';
        return $resultado;
    }
}

    #operador ternário
    $nota > 6 ? $resultado = 'OK' : $resultado = 'X';

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
    <?php

        $final = nota($nota,$cor);
       echo "<a class = \"texto-retorno voltar-botao\" style=\"background-color : $cor ;\">" . $final . "</a>"
        ?>
    </section>

    <footer>
        <p> Desenenevido por mim </p>
    </footer>
</body>

</html>