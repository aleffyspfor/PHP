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
    echo "<h2><strong>27)</strong> Ler um valor e escrever se é positivo, negativo ou zero. </h2>";
        $num1 = 1;

        if ($num1 > 0) {
            echo "O valor da variavel: " .$num1. " é positivo";
        }else if($num1 < 0){
            echo "O valor da variavel: " .$num1. " é negativo";
        }
        else {
            echo "O valor da variavel: " .$num1. " é zero";
        }
        
        
    ?>
</body>
</html>