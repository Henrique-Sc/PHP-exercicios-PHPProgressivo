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
    
    <p>Faça um script que peça um número e então mostre a mensagem O número informado foi &lt;número&gt;.</p>
    <hr>

    <h2>Resultado: </h2>
    <div class="result">
        <?php
            # Números escolhidos pelo usuário
            $num = filter_input(INPUT_POST, 'num');

            # Mostrar o resultado
            echo "<p class='result'>• O número digitado foi <b>$num</b>!</p>";

        ?>
    </div>

</body>
</html>