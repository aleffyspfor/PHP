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
    echo "<h2><strong>20)</strong> Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente. </h2>";
        $num1 = 12;
        $num2 = 13;

        if ($num1 > $num2) {
            echo "Lista:<br />" .$num2. "<br />" . $num1;
        }
        elseif($num1 < $num2){
            echo "Lista:<br />" .$num1. "<br />" . $num2;
        } else {
            echo "Ivalido: Os numeros não pode ser iguais";
        }
        
    ?>
</body>
</html>