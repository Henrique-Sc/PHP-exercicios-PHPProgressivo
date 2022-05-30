<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>

    <link rel="stylesheet" href="./../../css/style.css">
</head>
<body>
    <h1>Exercício 04 - Média de notas</h1>

    <p>Faça um script que peça 3 notas de um aluno e mostra sua média.</p>

    <hr>

    <h2>Resultado: </h2>

    <div class="result">
        <?php  
            # Nome do aluno
            $nome = filter_input(INPUT_POST, 'nome');
            
            # Notas do aluno
            $nota1 = filter_input(INPUT_POST, 'nota1');
            $nota2 = filter_input(INPUT_POST, 'nota2');
            $nota3 = filter_input(INPUT_POST, 'nota3');
            $notas = array($nota1, $nota2, $nota3);
            
            # Média
            $media = array_sum($notas) / count($notas);

            # Resultado
            echo "<p>• $media</p>"

        ?>
    </div>
</body>
</html>