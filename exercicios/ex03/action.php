<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Exercício 03 - soma entre dois números</h1>
    
    <p>Faça um script que peça dois números e imprima a soma.</p>
    <hr>
    
    <h2>Resultado: </h2>
    <div class="result">
        <?php
            # Números escolhidos pelo usuário
            $num1 = filter_input(INPUT_POST, 'num1');
            $num2 = filter_input(INPUT_POST, 'num2');
            
            # Soma entre os dois números
            $soma = $num1 + $num2;

            # Mostrar o resultado
            echo "<p class='result'>• A soma entre <u>$num1</u> e <u>$num2</u> é <b>$soma</b>!";

        ?>
    </div>
    
</body>
</html>