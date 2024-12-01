<?php

    #criar array numérico
    $valores = [1,2,3,4,5,6,7,8,9];

    #mudar o valor do indice 1 para o número 3
    $valores[1] = 3;

    #adicionar 20 no final do array
    $valores[] = 20;

    #array assossiativo
    $dados = [
        'A' => 10,
        'B' => 20,
        'C' => 30
    ];

    #arrays multidimensionais
    $matriz = [
        [1,2,3],
        [2,1,3],
        [2,3,1]
    ];

    #multidimensionais assossiativos
    $cidades = [
        'Brasil' => ['São Paulo', 'Rio de Janeiro'],
        'Portugal' => ['Lisboa', 'Porto'],
        'Espanha' => ['Madrid', 'Barcelona',]
    ];

    #definição de uma função tipo toString()
    function to_mostrar($array){
        for ($i = 0 ; $i < count($array); $i++){
            echo "<p class = \"texto-retorno\">" . $array[$i] . "</p>";
        }
    }
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
        <p class = "texto-retorno"><?php to_mostrar($valores);?> </p>
        <a href="" class="voltar-botao"> Adicionar </a>";
    </section>

    <footer>
        <p> Desenenevido por mim </p>
    </footer>
</body>

</html>