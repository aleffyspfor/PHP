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
    echo "<h2><strong>29)</strong>  Ler 3 valores (considere que não serão informados valores iguais) e escrever a soma dos 2
    maiores.   </h2>";
    $n1 = 30;
    $n2 = 40;
    $n3 = 50;
    $total = 0;

    
        if($n1 >  $n2 && $n1 > $n3){
            if($n2 > $n3){
                $total = $n1 + $n2;
            }else{
                $total = $n1 + $n3;
            }
            echo "A soma dos dois maiores numeros e: " .$total;
        }
        elseif($n2 >  $n1 && $n2 > $n3){
            if($n1 > $n3){
                $total = $n2 + $n1;
            }else{
                $total = $n2 + $n3;
            }
            echo "A soma dos dois maiores numeros e: " .$total;
        }else{
            if($n2 > $n1){
                $total = $n3 + $n2;
            }else{
                $total = $n3 + $n1;
            }
            echo "A soma dos dois maiores numeros e: " .$total;
        }
    






    ?>
</body>
</html>