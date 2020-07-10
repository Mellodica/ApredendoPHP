<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
        <?php
            $n1 = $_GET['a'];
            $n2 = $_GET['b'];
            $s = $n1 + $n2;
            
            $no = "Gustavo";
            
            echo " ". $n1 ." ". $n2;
            
            echo "A Soma é $s";
            echo "A Soma vale ".($n1 + $n2);
            echo "<br>A multiplicação vale ".($n1*$n2);
            echo "<br>A divisão vale ".($n2/$n1);
            echo "<br>O modulo vale ".($n1%$n2);
            //ABS valor absoluto
            //POW potencia
            echo "<br> O Valor de $n1<sup>$n2</sup> ". pow($n1,$n2);
            //sqrt raiz quadrada
            //round() arrdondamento
            echo "<br> A raiz quadrada de $n2 é ".sqrt($n2);
            echo "<br> O valor arredondado de $s é " . round($s); 
            //palavras ceil e floor
            //ceil arredonda pra cima
            //floor arredonda pra baixo
            //intval o valor inteiro da variavel
            //number_format
            //variavel, casas decimais, separado de casas e separador de milhar
            echo number_format($n2, 2, ",", ".");
            
            
            
            
            
            
        ?>
        </div>
    </body>
</html>
