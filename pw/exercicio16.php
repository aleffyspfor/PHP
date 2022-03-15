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
     echo "<h2><strong>16)</strong>  As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem
     compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e
     escreva o custo total da compra.</h2>";
        $maca = 11;
        $valor = 1.30;
        $valorTotal = 0;

        if ($maca < 12) {
           $valorTotal =  $maca * $valor;
            echo "Comprando " .$maca. " Maças o valor total vai ser: " .$valorTotal;   
        }else{
            $valor = 1.0;
            $valorTotal =  $maca * $valor;
            $maca * $valor;
            echo "Comprando " .$maca. " Maças o valor total vai ser: " .$valorTotal;
        }
    ?>  
</body>
</html>