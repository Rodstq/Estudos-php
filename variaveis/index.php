<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>variáveis</title>
</head>
<body>
    <h1> Variáveis </h1>

    <?php 

    // Tipos primitivos

        #Escalares
            #Strings
            $nome = "Rodrigo";
            $sobrenome = "Nogueira";
            const PAIS = "Brasil";

            #interpolação de Strings
            echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . "<br>" ;
            
            echo "$nome \"Minotauro\" $sobrenome, muito $$$";

            #int
            $num_hexa = 0xAF; #hexadecimal => 175
            echo " O valor da variável é : $num_hexa. <br>";

            $num_bin = 0b010101111; #binario => 175
            echo " O valor da variável é :  $num_bin. <br>";
            
            #var_dump
            echo " o valor da variável é : ";
            var_dump($num_bin);

            #definir o tipo
            $num = (float) 120;
            echo "<br>";
            var_dump($num);
            echo "<br>";

        #Especiais
            $arr = [6,2,"maria",9,true,3,5];
            var_dump($arr);   
    ?>
    
</body>
</html>