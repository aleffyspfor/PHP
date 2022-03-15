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
    echo "<h2><strong>28)</strong>  Ler 3 valores (considere que não serão informados valores iguais) e escrever o maior deles.  </h2>";
         $n1 = 30;
         $n2 = 40;
         $n3 = 50;


         if($n1 >  $n2 && $n1 > $n3){
           
            echo $n1. " E o maior numero.";
        }
        elseif($n2 >  $n1 && $n2 > $n3){
           
            echo $n2. " E o maior numero.";
        }else{
           
            echo $n3. " E o maior numero.";
        }
    ?>
</body>
</html>