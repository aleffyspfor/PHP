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
    
    echo  "<h2><strong>44)</strong>  Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido
    um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado
    da divisão do primeiro valor lido pelo segundo valor lido. (utilizar a estrutura REPITA).</h2>";
    
    echo "<h3>DO WHILE</h3>";
    $n1 = 10;
    $n2 = 2;
        do{
            if($n2 == 0){
                echo "O valor do divisor nao pode ser igual a Zero.<br />";
                break;
            }else{
                echo "O valor do divisao e: " . $n1/$n2. "<br />";
            }
        }while($n2 == 0);
        
        echo "<h3>FOR</h3>";
        $numeros = [10,2];
        $tamanho = count($numeros);

        for($i = 0; $i < $tamanho; $i++ ){
            $num1 = $numeros[0];
            $num2 = $numeros[1];
            if($num2 == 0){
                echo "O valor do divisor nao pode ser igual a Zero.<br />";
                break;
            }else{
                echo "O valor da divisao e: " .$num1/$num2. "<br />";
                break;
            }
        }

        echo "<h3>WHILE</h3>";
        $numero1 = 1;
        $numero2 = 10;
       
        while($numero1 > 0){
            if($numero2 == 0){
                echo "O valor do divisor nao pode ser igual a Zero.";
                break;
            }
            else{
                 echo "O Valor da divisao e: " .$numero1/$numero2;
                 break;
            }
        }
    ?>
    
</body>
</html>