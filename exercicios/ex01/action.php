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

    <?php
        $raio = filter_input(INPUT_POST, 'raio');
        
        $comprimento = number_format((2 * M_PI * $raio), 2, ',', '.');

        $area = number_format((M_PI * $raio ** 2), 2, ',', '.');

        echo "<p><b>Raio</b>: $raio", " cm</p>";
        echo "<p><b>Perímetro</b>: $comprimento", ' cm</p>';
        echo "<p><b>Área</b>: $area", ' cm</p>'
    ?>
</body>
</html>