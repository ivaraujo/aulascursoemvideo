<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloaulas.css">
    <title>Operadores</title>
</head>
<body>
    <section>
        <h1>Operadores</h1>
        <?php               
            $n1= $_GET["a"];
            $n2= $_GET["b"];
            $s=$n1+$n2;
            echo "A soma entre $n1 e $n2 é: $s<br/>";
            $sub=$n1-$n2;
            echo "A subtração entre $n1 e $n2 é: $sub<br/>";
            $m=$n1*$n2;
            echo "A multiplicação entre $n1 e $n2 é: $m<br/>";
            $d=$n1/$n2;
            echo "A divisão entre $n1 e $n2 é: $d<br/>";
            $media=($n1+$n2)/2;
            echo "A média entre $n1 e $n2 é: $media<br/>";   
        ?>
        <h1>Funções Aritmeticas</h1>
        <?php 
            $v1 = $_GET["a"];
            $v2 = $_GET["b"];
            echo "O valor absoluto de $v2 é: ". abs($v2);
            echo "<br/>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
            echo "<br/>A raiz de $v1 é: ". sqrt($v1);
            echo "<br/>O valor arredondado de $v2 é: " . round($v2);
            echo "<br/>A parte inteira de $v2 é: ". intval($v2);
            echo"<br/>O valor de $v1 em moeda é: R$". number_format($v1,2,",",".");

        ?>
    </section>
    
</body>
</html>