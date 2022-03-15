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
     echo "<h2><strong>48)</strong>   Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a
     média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada
     nota. </h2>";
    echo "<h3>DO WHILE</h3>";
    $nota1 = 10;
    $nota2 = 10;
    $media = 0;
        do{
            if($nota1 < 0 || $nota2 < 0 && $nota1 > 10 || $nota2 > 10){
                echo "O valor da nota so pode ser de 0 a 10";
                break;
            }
            else{
                $media = ($nota1 + $nota2)/2;
                echo "O valor da Media do aluno e: ".$media;
                break;
            }
        }while($nota1 && $nota2 > 0 );


        echo "<h3>FOR</h3>";
        $notas = [10,10];
        $media = 0;
        $tamanho = count($notas);
        $valorSomado = 0;
               
            for($i = 0; $i < $tamanho; $i++ ){

                $valorAtual = $notas[$i]; 

                if($valorAtual < 0 || $valorAtual > 10){
                    echo "O valor da nota so pode ser de 0 a 10";
                    break;
                }else{
                    $valorSomado = $valorAtual + $valorSomado;
                    if($i == $tamanho - 1){
                        $media = $valorSomado / $tamanho;
                        echo "A media do aluno foi: " . $media;
                    }              
                } 
            } 

            
        echo "<h3>WHILE</h3>";
        $nota1 = 10;
        $nota2 = 5;
        $media = 0;
       
        while($nota1 && $nota2 < 0 || $nota1 && $nota2 > 0){
            if($nota1 && $nota2 > 0){
                $media = ($nota1 + $nota2)/2;
                 echo "O Valor da Media do aluno e: " .$media;
                 break;
            }
            else{
                echo "O valor da nota so pode ser de 0 a 10";
                break;
            }
        }

    
    ?>
    
</body>
</html>