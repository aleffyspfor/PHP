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
     echo "<h2><strong>14)</strong>  Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso
     contrário escrever NÃO É MAIOR QUE 10!  </h2>";
     
        $num1 = 20;
        
        if ($num1 > 10) {
            echo "O valor é maior que 10";
        }else{
            echo "O valor é menor que 10";
        }
    ?>
</body>
</html>