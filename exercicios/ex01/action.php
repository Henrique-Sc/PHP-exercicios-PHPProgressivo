<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Exercício 01 - perímetro e área de um círculo</h1>

    <p>Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.</p>

    <hr>

    <h2>Resultado: </h2>
    <div class="result">
    <?php
            # Valor digitado pelo usuário
            $raio = filter_input(INPUT_POST, 'raio');
            
            # Calculos / Perímetro e área
            $peri = number_format((2 * M_PI * $raio), 2, ',', '.');
            $area = number_format((M_PI * $raio ** 2), 2, ',', '.');

            # Resultado
            echo "\t <p>• <b>Raio</b>: $raio cm</p>";
            echo "<p>• <b>Perímetro</b>: $peri cm</p>";
            echo "<p>• <b>Área</b>: $area cm</p> \n";
        ?>
    </div>

</body>
</html>