<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2><strong>9)</strong>  Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste.
    Calcular e escrever o valor do novo salário.  </h2>";
     $salarioAtual = 2500;
     $reajuste = 25 * 2500 / 100;
     $salarioNovo =  $salarioAtual + $reajuste;

     echo "O reajuste do funcionario foi equivalente a 25% do salario que é: " .$salarioAtual." Reais,". " Que teve um reajuste de: ".$reajuste." Reais,". " Totalizando: ".$salarioNovo. " Reais";    

    ?>
</body>
</html>