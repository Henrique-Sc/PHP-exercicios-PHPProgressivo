<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Exercício 02 - Analisando o número informado</h1>

    <?php
       $num = filter_input(INPUT_POST, 'num');
       echo "<p>O número digitado foi <mark>$num</mark>!</p>";
    ?>
</body>
</html>